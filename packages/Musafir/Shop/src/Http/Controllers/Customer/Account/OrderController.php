<?php

namespace Musafir\Shop\Http\Controllers\Customer\Account;

use Musafir\Checkout\Facades\Cart;
use Musafir\Core\Traits\PDFHandler;
use Musafir\Sales\Repositories\InvoiceRepository;
use Musafir\Sales\Repositories\OrderRepository;
use Musafir\Shop\DataGrids\OrderDataGrid;
use Musafir\Shop\Http\Controllers\Controller;

class OrderController extends Controller
{
    use PDFHandler;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected OrderRepository $orderRepository,
        protected InvoiceRepository $invoiceRepository
    ) {}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return datagrid(OrderDataGrid::class)->process();
        }

        return view('shop::customers.account.orders.index');
    }

    /**
     * Show the view for the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function view($id)
    {
        $order = $this->orderRepository->findOneWhere([
            'customer_id' => auth()->guard('customer')->id(),
            'id'          => $id,
        ]);

        abort_if(! $order, 404);

        return view('shop::customers.account.orders.view', compact('order'));
    }

    /**
     * Reorder action for the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reorder(int $id)
    {
        $order = $this->orderRepository->findOrFail($id);

        foreach ($order->items as $item) {
            try {
                Cart::addProduct($item->product, $item->additional);
            } catch (\Exception $e) {
                // do nothing
            }
        }

        return redirect()->route('shop.checkout.cart.index');
    }

    /**
     * Print and download the for the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function printInvoice($id)
    {
        $invoice = $this->invoiceRepository->where('id', $id)
            ->whereHas('order', function ($query) {
                $query->where('customer_id', auth()->guard('customer')->id());
            })
            ->firstOrFail();

        return $this->downloadPDF(
            view('shop::customers.account.orders.pdf', compact('invoice'))->render(),
            'invoice-'.$invoice->created_at->format('d-m-Y')
        );
    }

    /**
     * Cancel action for the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancel($id)
    {
        $customer = auth()->guard('customer')->user();

        /* find by order id in customer's order */
        $order = $customer->orders()->find($id);

        /* if order id not found then process should be aborted with 404 page */
        if (! $order) {
            abort(404);
        }

        $result = $this->orderRepository->cancel($order);

        if ($result) {
            session()->flash('success', trans('shop::app.customers.account.orders.view.cancel-success', ['name' => trans('admin::app.customers.account.orders.order')]));
        } else {
            session()->flash('error', trans('shop::app.customers.account.orders.view.cancel-error', ['name' => trans('admin::app.customers.account.orders.order')]));
        }

        return redirect()->back();
    }
}

<?php

namespace Musafir\Product\Repositories;

use Illuminate\Support\Facades\Storage;
use Musafir\Core\Traits\Sanitizer;

class SearchRepository extends ProductRepository
{
    use Sanitizer;

    /**
     * Upload provided image
     *
     * @param  array  $data
     * @return string
     */
    public function uploadSearchImage($data)
    {
        $path = request()->file('image')->store('product-search');

        $this->sanitizeSVG($path, $data['image']->getMimeType());

        return Storage::url($path);
    }
}

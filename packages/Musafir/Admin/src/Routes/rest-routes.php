<?php

use Illuminate\Support\Facades\Route;
use Musafir\Admin\Http\Controllers\DashboardController;
use Musafir\Admin\Http\Controllers\DataGrid\DataGridController;
use Musafir\Admin\Http\Controllers\DataGrid\SavedFilterController;
use Musafir\Admin\Http\Controllers\MagicAIController;
use Musafir\Admin\Http\Controllers\TinyMCEController;
use Musafir\Admin\Http\Controllers\User\AccountController;
use Musafir\Admin\Http\Controllers\User\SessionController;

/**
 * Dashboard routes.
 */
Route::controller(DashboardController::class)->prefix('dashboard')->group(function () {
    Route::get('', 'index')->name('admin.dashboard.index');

    Route::get('stats', 'stats')->name('admin.dashboard.stats');
});

/**
 * Datagrid routes.
 */
Route::controller(DataGridController::class)->prefix('datagrid')->group(function () {
    Route::get('look-up', 'lookUp')->name('admin.datagrid.look_up');

    Route::controller(SavedFilterController::class)->prefix('saved-filters')->group(function () {
        Route::post('', 'store')->name('admin.datagrid.saved_filters.store');

        Route::get('', 'get')->name('admin.datagrid.saved_filters.index');

        Route::put('{id}', 'update')->name('admin.datagrid.saved_filters.update');

        Route::delete('{id}', 'destroy')->name('admin.datagrid.saved_filters.destroy');
    });
});

/**
 * Tinymce file upload handler.
 */
Route::post('tinymce/upload', [TinyMCEController::class, 'upload'])->name('admin.tinymce.upload');

/**
 * AI Routes
 */
Route::controller(MagicAIController::class)->prefix('magic-ai')->group(function () {
    Route::post('content', 'content')->name('admin.magic_ai.content');

    Route::post('image', 'image')->name('admin.magic_ai.image');
});

/**
 * Admin profile routes.
 */
Route::controller(AccountController::class)->prefix('account')->group(function () {
    Route::get('', 'edit')->name('admin.account.edit');

    Route::put('', 'update')->name('admin.account.update');
});

Route::delete('logout', [SessionController::class, 'destroy'])->name('admin.session.destroy');

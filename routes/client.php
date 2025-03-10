<?php

use App\Livewire\Client\Auth\Index as AuthIndex;
use App\Livewire\Client\Home\Index as HomeIndex;
use App\Livewire\Client\Product\Index as ProductIndex;
use App\Livewire\Client\Cart\Index as CartIndex;
use App\Livewire\Client\Shipping\Index as ShippingIndex;
use App\Livewire\Client\Payment\Callback as PaymentCallback;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/', HomeIndex::class)->name('home');
    Route::get('/product/{p_code}/{slug?}', ProductIndex::class)->name('product');

    Route::middleware('guest')->group(function () {
        Route::get('/auth', AuthIndex::class)->name('auth.index');
        Route::get('/gmail', [AuthIndex::class, 'redirectToProvider'])->name('gmail');
        Route::get('/auth/gmail/callback', [AuthIndex::class, 'handleProviderCallback'])->name('gmail.callback');
    });

    Route::middleware('auth')->group(function () {
    Route::get('/checkout/cart',CartIndex::class)->name('checkout.cart');
    Route::get('/checkout/shipping',ShippingIndex::class)->name('checkout.shipping');
    Route::get('/logout', [AuthIndex::class,'clientLogout'])->name('logout');
    Route::get('/payment/callback',PaymentCallback::class)->name('payment.callback');

    });

});

<?php

use App\Livewire\Client\Auth\Index as AuthIndex;
use App\Livewire\Client\Home\Index as HomeIndex;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/', HomeIndex::class)->name('home');
    Route::get('/auth', AuthIndex::class)->name('auth.index');
    Route::get('/gmail', [AuthIndex::class, 'redirectToProvider'])->name('gmail');
    Route::get('/auth/gmail/callback', [AuthIndex::class, 'handleProviderCallback'])->name('gmail.callback');
});

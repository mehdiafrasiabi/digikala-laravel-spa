<?php

use App\Livewire\Admin\Country\Index as CountryIndex;
use App\Livewire\Admin\Dashboard\Index as DashboardIndex;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard',DashboardIndex::class)->name('admin.dashboard.index');
Route::get('/admin/country',CountryIndex::class)->name('admin.country.index');

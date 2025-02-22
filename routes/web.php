<?php

use App\Livewire\Admin\Category\Features as CategoryFeatures;
use App\Livewire\Admin\Category\Featurevalue as CategoryFeatureValue;
use App\Livewire\Admin\Category\Index as CategoryIndex;
use App\Livewire\Admin\City\Index as CityIndex;
use App\Livewire\Admin\Country\Index as CountryIndex;
use App\Livewire\Admin\Dashboard\Index as DashboardIndex;
use App\Livewire\Admin\Product\CkUpload;
use App\Livewire\Admin\Product\Content as ProductContent;
use App\Livewire\Admin\Product\Create as CreateProduct;
use App\Livewire\Admin\Product\Features as ProductFeature;
use App\Livewire\Admin\Product\Index as ProductIndex;
use App\Livewire\Admin\State\Index as StateIndex;
use Illuminate\Support\Facades\Route;
//Dashboard Route
Route::get('/admin/dashboard',DashboardIndex::class)->name('admin.dashboard.index');

//Map Route
Route::get('/admin/country',CountryIndex::class)->name('admin.country.index');
Route::get('/admin/state',StateIndex::class)->name('admin.state.index');
Route::get('/admin/city',CityIndex::class)->name('admin.city.index');

//Category Route
Route::get('/admin/category',CategoryIndex::class)->name('admin.category.index');
Route::get('/admin/category/{category}/features',CategoryFeatures::class)->name('admin.category.features');
Route::get('/admin/category/features/{categoryFeature}/values',CategoryFeatureValue::class)->name('admin.category.features.values');

//Product Route
Route::get('/admin/product',ProductIndex::class)->name('admin.product.index');
Route::get('/admin/product/create',CreateProduct::class)->name('admin.product.create');
Route::get('/admin/product/feature/{product}',ProductFeature::class)->name('admin.product.feature');
Route::get('/admin/product/content/{product}',ProductContent::class)->name('admin.product.content');

Route::post('/admin/ck-upload/{productId}',[CkUpload::class,'upload'])->name('admin.ck-upload');


<?php


use App\Livewire\Admin\AdminUser\Index as AdminUser;
use App\Livewire\Admin\Auth\Index as AuthIndex;
use App\Livewire\Admin\Category\Features as CategoryFeatures;
use App\Livewire\Admin\Category\Featurevalue as CategoryFeatureValue;
use App\Livewire\Admin\Category\Index as CategoryIndex;
use App\Livewire\Admin\City\Index as CityIndex;
use App\Livewire\Admin\Country\Index as CountryIndex;
use App\Livewire\Admin\Dashboard\Index as DashboardIndex;
use App\Livewire\Admin\Delivery\Index as DeliveryIndex;
use App\Livewire\Admin\Order\Details as OrderDetails;
use App\Livewire\Admin\Order\Index as OrderIndex;
use App\Livewire\Admin\Payment\Index as PaymentIndex;
use App\Livewire\Admin\Product\CkUpload;
use App\Livewire\Admin\Product\Content as ProductContent;
use App\Livewire\Admin\Product\Create as CreateProduct;
use App\Livewire\Admin\Product\Features as ProductFeature;
use App\Livewire\Admin\Product\Index as ProductIndex;
use App\Livewire\Admin\Slider\Index as SliderIndex;
use App\Livewire\Admin\State\Index as StateIndex;
use App\Livewire\Admin\Story\Index as StoryIndex;
use App\Livewire\Admin\Transaction\Index as TransactionIndex;
use App\Livewire\Admin\User\Index as UserIndex;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    //Auth
    Route::get('auth/login', AuthIndex::class)->name('auth.login')->middleware('guest:admin');
    Route::get('/logout', [AuthIndex::class,'logout'])->name('logout')->middleware('auth:admin');


    Route::middleware('auth:admin')->group(function () {
        //Dashboard Route
        Route::get('/dashboard', DashboardIndex::class)->name('dashboard.index');

        //Map Route
        Route::get('/country', CountryIndex::class)->name('country.index');
        Route::get('/state', StateIndex::class)->name('state.index');
        Route::get('/city', CityIndex::class)->name('city.index');

        //Category Route
        Route::get('/category', CategoryIndex::class)->name('category.index');
        Route::get('/category/{category}/features', CategoryFeatures::class)->name('category.features');
        Route::get('/category/features/{categoryFeature}/values', CategoryFeatureValue::class)->name('category.features.values');

        //Product Route
        Route::get('/product', ProductIndex::class)->name('product.index');
        Route::get('/product/create', CreateProduct::class)->name('product.create');
        Route::get('/product/feature/{product}', ProductFeature::class)->name('product.feature');
        Route::get('/product/content/{product}', ProductContent::class)->name('product.content');

        Route::post('/ck-upload/{productId}', [CkUpload::class, 'upload'])->name('ck-upload');

        //DeliveryMethod
        Route::get('/delivery', DeliveryIndex::class)->name('delivery.index');

        //DeliveryMethod
        Route::get('/payment', PaymentIndex::class)->name('payment.index');
        //Story
        Route::get('/story', StoryIndex::class)->name('story.index');
        //Slider
        Route::get('/slider', SliderIndex::class)->name('slider.index');
        //Order
        Route::get('/order', OrderIndex::class)->name('order.index');
        Route::get('/order/{order}', OrderDetails::class)->name('order.details');
        //Transaction
        Route::get('/transaction', TransactionIndex::class)->name('transaction.index');
        //User
        Route::get('/user', UserIndex::class)->name('user.index');
        Route::get('/admin-user', AdminUser::class)->name('admin-user.index');
    });
});


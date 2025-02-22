<div class="row mb-4 layout-spacing layout-top-spacing">
    <div class="widget-header">
        <div class="d-flex justify-content-between align-items-center">

            <h4>اضافه کردن محصول جدید</h4>

            <a href="{{route('admin.product.index')}}" class="btn btn-danger mb-3 me-4">
                بازگشت به جدول محصولات
            </a>


        </div>
    </div>
    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">



        <form class="row" wire:submit="submit(Object.fromEntries(new FormData($event.target)))">

        @include('livewire.admin.product.create.name-seo-item')

        @include('livewire.admin.product.create.image-gallery')
    </div>
    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row">
            @include('livewire.admin.product.create.price-category-seller')
            @include('livewire.admin.product.create.discount')


        </div>
        </form>
    </div>

<div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
    <div class="widget-content widget-content-area ecommerce-create-section">
        <div class="row">

            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="price">قیمت</label>
                <sup style="color: red">*</sup>
                <input type="text" class="form-control" id="price" name="price" value="{{@$product->price}}">
            </div>
            @error('price')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror
            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="stock">موجودی</label>
                <sup style="color: red">*</sup>
                <input type="text" class="form-control" id="stock" name="stock" value="{{@$product->stock}}">
            </div>
            @error('stock')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror
            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="categoryId">دسته بندی</label>
                <select class="form-select" id="categoryId" name="categoryId">
                    @foreach($categories as $category)
                        <option  value="{{@$category->id}}"{{@$category->id==@$product->category_id?'selected':''}}>{{@$category->name}}</option>
                    @endforeach

                </select>
            </div>
            @error('categoryId')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror
            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="sellers">فروشنده</label>
                <select class="form-select" id="sellers" name="sellerId">
                    <option value="">خود فروشگاه</option>
                    @foreach($sellers as $seller)
                        <option value="{{@$seller->id}}" {{@$seller->id==@$product->seller_id?'selected':''}}>{{@$seller->shop_name}}</option>
                    @endforeach
                </select>
            </div>
            @error('sellerId')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror
        </div>
    </div>
</div>

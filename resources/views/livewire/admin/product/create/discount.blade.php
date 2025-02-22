<div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
    <div class="widget-content widget-content-area ecommerce-create-section">
        <div class="row">
            <div class="col-sm-12 mb-4">
                <label for="discount">درصد تخفیف</label>
                <input type="text" class="form-control" name="discount" id="discount" value="{{@$product->discount}}">
            </div>
            @error('discount')
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
            <div class="col-sm-12 mb-4">
                <label for="discount_duration">تاریخ انقضا</label>
                <input type="date" class="form-control" name="discount_duration" id="discount_duration">
            </div>
            @error('discount_duration')
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
            <div class="col-sm-12 mb-4">
                <div class="switch form-switch-custom switch-inline form-switch-danger">
                    <input class="switch-input" type="checkbox" name="featured" role="switch" {{@$product->featured==1 ?'checked':''}}
                           id="featured">
                    <label class="switch-label" for="featured">کالای ویژه</label>
                </div>
            </div>
            @error('featured')
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
            <div class="col-sm-12">
                <button class="btn btn-success w-100">

                    <span wire:loading.remove>ذخیره</span>
                    <div class="spinner-border text-white me-2 align-self-center loader-sm "
                         wire:loading></div>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="widget-content widget-content-area ecommerce-create-section">

    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="name">نام محصول</label>
            <sup style="color: red">*</sup>

            <input type="text" class="form-control" id="name" name="name" value="{{@$product->name}}"
                   wire:model.live.debounce.350ms="name">
        </div>
    </div>
    @error('name')
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
    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="slug">اسلاگ</label>
            <sup style="color: red">*</sup>
            <input type="text" class="form-control" id="slug" name="slug" value="{{@$product->seo->slug}}" wire:model="slug">
        </div>
    </div>
    @error('slug')
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
    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="meta_title">عنوان متا</label>
            <input type="text" class="form-control" name="meta_title"  value="{{@$product->seo->meta_title}}" id="meta_title">
        </div>
    </div>
    @error('meta_title')
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
    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="meta_description">توضحیات متا</label>
            <textarea type="text" class="form-control" id="meta_description" rows="5"
                      name="meta_description"> {{@$product->seo->meta_description}}</textarea>
        </div>
    </div>
    @error('meta_description')
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

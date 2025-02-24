<div class="widget-content widget-content-area ecommerce-create-section mt-3">
    <div class="row">
        <div class="col-md-12">
            <label for="product-images">آپلود تصاویر محصول </label>
            <sup style="color: red">*</sup>
            <div class="multiple-file-upload">
                <div class="field-wrapper" x-data="{isUploading:false,progress:0 }"
                     x-on:livewire-upload-start="isUploading=true"
                     x-on:livewire-upload-finish="isUploading=false"
                     x-on:livewire-upload-error="isUploading=false"
                     x-on:livewire-upload-progress="progress=$event.detail.progress">

                    <input class="form-control" type="file" wire:model="photos" multiple>

                    <div x-show="isUploading" class="progress mt-3 ltr">
                        <div class="progress-md progress-bar-striped  bg-success progress-bar-animated"
                             role="progressbar" x-bind:style="`width:${progress}%`" aria-valuenow="10"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
                @error('coverIndex')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2" role="alert"
                     wire:loading.remove
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
                @error('photos.*')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2" role="alert"
                     wire:loading.remove
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
                <div class="d-flex flex-wrap">
                    @foreach($photos as $index=>$photo)
                        @if(in_array($photo->getMimeType(),['image/jpeg',  'image/png', 'image/jpg', 'image/gif', 'image/webp']))
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 m-3">
                                <div class="card style-6">
                                    <span class="badge badge-danger"></span>
                                    <img src="{{$photo->temporaryUrl()}}" class="card-img-top" alt="...">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6 text-start">
                                                <input type="radio" id="cover_image" class="form-check-input"
                                                       {{$index==$coverIndex ? 'checked' : ''}}
                                                       wire:click="setCoverImage({{$index}})"
                                                       style="cursor: pointer"
                                                       name="cover_image">
                                                <label for="cover_image" class="text-white"> کاور</label>

                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="pricing d-flex justify-content-end">
                                                    <a href="javascript:void(0);" class="text-danger  mb-0"
                                                       wire:click="removePhoto({{$index}})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

<div class="widget-content widget-content-area ecommerce-create-section mt-3">
@if(@$product->image)
        <div class="row">
            <div class="col-md-12">
                <label for="product-images">گالری تصاویر محصول </label>
                <sup style="color: red">*</sup>
                <div class="multiple-file-upload">
                    <div class="field-wrapper" x-data="{isUploading:false,progress:0 }"
                         x-on:livewire-upload-start="isUploading=true"
                         x-on:livewire-upload-finish="isUploading=false"
                         x-on:livewire-upload-error="isUploading=false"
                         x-on:livewire-upload-progress="progress=$event.detail.progress">

                        <div x-show="isUploading" class="progress mt-3 ltr">
                            <div class="progress-md progress-bar-striped  bg-success progress-bar-animated"
                                 role="progressbar" x-bind:style="`width:${progress}%`" aria-valuenow="10"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>
                    @error('photos.*')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2" role="alert"
                         wire:loading.remove
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
                    <div class="d-flex flex-wrap">
                        @foreach($product->image as $photo)
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 m-3">
                                <div class="card style-6">
                                    <span class="badge badge-danger"></span>
                                    <img src="/products/{{$product->id}}/small/{{@$photo->path}}" class="card-img-top"
                                         alt="...">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6 text-start">
                                                <input type="radio" id="cover_image" class="form-check-input"
                                                       {{@$photo->id==@$product->coverImage->id ? 'checked' : ''}}
                                                       wire:confirm="ایا از تغییر خود اطمنیان دارید؟"
                                                       wire:click="setOldCoverImage({{$photo}})"
                                                       style="cursor: pointer"
                                                       name="cover_image">
                                                <label for="cover_image" class="text-white"> کاور</label>

                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="pricing d-flex justify-content-end">
                                                    <a href="javascript:void(0);" class="text-danger  mb-0"
                                                       wire:confirm="آیا از انتخاب خود اطمنیان دارید؟"
                                                       wire:click="removeOldPhoto({{$photo->id}},{{$product->id}})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>

    @endif
</div>



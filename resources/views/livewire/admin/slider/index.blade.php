<div class="row">

    {{--form--}}
    <div class="col-md-4">

        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>مدیریت اسلایدر اصلی</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="title" class="form-label">عنوان :
                                <sup style="color: red">*</sup>
                            </label>
                            <input type="text" class="form-control" id="title" wire:model="title" name="title"
                                   placeholder="">
                        </div>
                    </div>
                    @error('title')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
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
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for=link"" class="form-label">لینک مقصد :
                                <sup style="color: red">*</sup>
                            </label>
                            <input type="text" class="form-control" id="link" wire:model=link"" name="link"
                                   placeholder="">
                        </div>
                    </div>
                    @error('link')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
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
                    <div class="field-wrapper  mb-4" x-data="{isUploading:false,progress:0 }"
                         x-on:livewire-upload-start="isUploading=true"
                         x-on:livewire-upload-finish="isUploading=false"
                         x-on:livewire-upload-error="isUploading=false"
                         x-on:livewire-upload-progress="progress=$event.detail.progress">

                        <label for="image" class="form-label"> تصویر اسلایدر :
                            <sup style="color: red">*</sup>
                        </label>
                        <input type="file" class="form-control" id="image" wire:model="image"
                               name="image"
                               placeholder="">

                        <div x-show="isUploading" class="progress mt-3 ltr">
                            <div class="progress-md progress-bar-striped  bg-success progress-bar-animated"
                                 role="progressbar" x-bind:style="`width:${progress}%`" aria-valuenow="10"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>

                    @error('image')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
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
                    <button type="submit" class="btn btn-success btn-lg _effect--ripple waves-effect waves-light">
                        <span wire:loading.remove>ثبت</span>
                        <div wire:loading>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-loader spin me-2">
                                <line x1="12" y1="2" x2="12" y2="6"></line>
                                <line x1="12" y1="18" x2="12" y2="22"></line>
                                <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                <line x1="2" y1="12" x2="6" y2="12"></line>
                                <line x1="18" y1="12" x2="22" y2="12"></line>
                                <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                            </svg>
                        </div>
                    </button>
                </form>

            </div>
        </div>


    </div>
    {{--list--}}
    <div class="col-md-8">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>لیست اسلایدر ها</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"> عنوان</th>
                            <th scope="col">تصویر اسلایدر</th>
                            <th class="text-center" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($sliders  as $item)

                            <tr>
                                <td>
                                    {{$loop->iteration + $sliders ->firstItem() - 1}}
                                </td>
                                <td>
                                    <div class="media">

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$item->title}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <img src="/sliders/{{$item->image}}" width="70" alt="">
                                </td>
{{--                                <td>--}}
{{--                                    <button data-story-title="{{$item->title}}"--}}
{{--                                            data-story="/stories/story/{{$item->imgae}}" type="button"--}}
{{--                                            class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light"--}}
{{--                                            data-bs-toggle="modal" data-bs-target="#storyModal">--}}
{{--                                        نمایش اسلایدر--}}
{{--                                    </button>--}}
{{--                                </td>--}}
                                <td class="text-center">
                                    <div class="action-btns d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                           wire:confirm="آیا از انتخاب خود اطمینان دارید؟"
                                           wire:click="delete({{$item->id}})"
                                           class="action-btn btn-delete bs-tooltip"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-bs-original-title="حدف">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                        <div class="form-check form-check-success form-check-inline ms-3">
                                            <input
                                                wire:confirm="آیا مطمئن هستید؟ با انتخاب شما به عنوان اسلایدر  وبسایت قرار خواهد گرفت !"
                                                wire:change="changeStatus({{$item->id}})"
                                                {{$item->status?'checked': ''}}
                                                class="form-check-input" type="checkbox" id="form-check-default">

                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                    {{$sliders ->links('layouts.admin.pagination')}}
                </div>

            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="storyModal" tabindex="-1" role="dialog" aria-labelledby="storyModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " style="width: 400px" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="storyModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                </div>
                <div class="modal-body">
                    <video id="videoPlayer" controls style="width: -webkit-fill-available;;">
                        <source id="videoSource" src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </div>

    <!-- اسکریپت‌های ضروری -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // به تمام دکمه‌های با ویژگی data-story event listener اضافه کنید
            $('button[data-story]').on('click', function () {
                // دریافت URL ویدیو از data-story
                var storyUrl = $(this).data('story');
                var storyTitle = $(this).data('story-title');

                // تنظیم URL به عنوان src تگ video
                $('#videoSource').attr('src', storyUrl);
                $('.modal-title').html(storyTitle);

                // بارگذاری و پخش ویدیو
                var videoPlayer = $('#videoPlayer').get(0);
                videoPlayer.load();
            });

            // هنگامی که مدال بسته می‌شود
            $('#storyModal').on('hide.bs.modal', function () {
                var videoPlayer = $('#videoPlayer').get(0);
                videoPlayer.pause(); // توقف ویدیو
                videoPlayer.currentTime = 0; // تنظیم ویدیو به ابتدای آن
            });
        });
    </script>

</div>

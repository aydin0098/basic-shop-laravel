<div class="widget-content widget-content-area ecommerce-create-section mt-3">
    <div class="row">
        <div class="col-md-12">
            <label for="product-images">اپلود تصاویر محصول</label>
            <div class="multiple-file-upload">

                <div class="field-wrapper" x-data="{isUploading:false,progress:0 }"
                     x-on:livewire-upload-start="isUploading=true"
                     x-on:livewire-upload-finish="isUploading=false"
                     x-on:livewire-upload-error="isUploading=false"
                     x-on:livewire-upload-progress="progress=$event.detail.progress"
                >

                    <input  class="form-control" type="file" wire:model="photos" multiple>

                    <div x-show="isUploading" class="progress mt-3 ltr">
                        <div class="progress-bar progress-bar-striped  bg-danger progress-bar-animated"
                             role="progressbar" x-bind:style="`width:${progress}%`" aria-valuenow="10"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>


                @error('photos.*')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                     wire:loading.remove
                     role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                    <strong>خطا!</strong>{{$message}}
                </div>
                @enderror
                <div class="d-flex">
                    @foreach($photos as $photo)
                        @if(in_array($photo->getMimeType(),['image/jpeg','image/png','image/jpg','image/gif','image/webp']))
                            <div class="item w-25 m-2">
                                <img class="w-100" src="{{ $photo->temporaryUrl() }}" alt="">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</div>

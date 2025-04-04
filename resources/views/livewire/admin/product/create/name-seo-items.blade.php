
<div class="widget-content widget-content-area ecommerce-create-section">

    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="inputEmail3">نام محصول</label>
            <input wire:model.live.debounce.300ms="name" value="{{@$product->name}}"
                   name="name" type="text" class="form-control" id="inputEmail3" placeholder="">
            @error('name')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                 wire:loading.remove
                 role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                <strong>خطا!</strong>{{$message}}
            </div>
            @enderror
        </div>

    </div>

    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="inputEmail3">اسلاگ</label>
            <input wire:model="slug" value="{{@$product->seo->slug}}"
                   name="slug" type="text" class="form-control" id="inputEmail3" placeholder="">
        </div>
    </div>
    -
    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="inputEmail3">عنوان متا</label>
            <input name="meta_title" value="{{@$product->seo->meta_title}}"
                   type="text" class="form-control" id="inputEmail3" placeholder="">
        </div>
        @error('meta_title')
        <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
             wire:loading.remove
             role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
            <strong>خطا!</strong>{{$message}}
        </div>
        @enderror
    </div>

    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="inputEmail3">توضیحات متا</label>
            <textarea name="meta_description"
                      type="text" class="form-control" id="inputEmail3" placeholder="">
                {{@$product->seo->meta_description}}
            </textarea>
        </div>
        @error('meta_description')
        <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
             wire:loading.remove
             role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
            <strong>خطا!</strong>{{$message}}
        </div>
        @enderror
    </div>

</div>

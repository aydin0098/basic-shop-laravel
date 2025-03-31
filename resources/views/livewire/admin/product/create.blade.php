@section('styles')
    <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/dark/forms/switches.css">
@endsection
<div class="row mb-4 layout-spacing layout-top-spacing">

    <form class="row" wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">
        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="widget-content widget-content-area ecommerce-create-section">

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="inputEmail3">نام محصول</label>
                        <input wire:model.live.debounce.300ms="name" name="name" type="text" class="form-control" id="inputEmail3" placeholder="">
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
                        <input wire:model="slug" name="slug" type="text" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                </div>
-
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="inputEmail3">عنوان متا</label>
                        <input name="meta_title" type="text" class="form-control" id="inputEmail3" placeholder="">
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
                        <textarea name="meta_description" type="text" class="form-control" id="inputEmail3" placeholder=""></textarea>
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
            <div class="widget-content widget-content-area ecommerce-create-section mt-3">
                <div class="row">
                    <div class="col-md-8">
                        <label for="product-images">Upload Images</label>
                        <div class="multiple-file-upload">
                            <input type="file"
                                   class="filepond file-upload-multiple"
                                   name="filepond"
                                   id="product-images"
                                   multiple
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="5">
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="switch form-switch-custom switch-inline form-switch-primary mt-4">
                            <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                            <label class="switch-label" for="showPublicly">Display publicly</label>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row">
                <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area ecommerce-create-section">
                        <div class="row">
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="proCode">قیمت</label>
                                <input name="price" type="text" class="form-control" id="proCode" value="">
                            </div>
                            @error('price')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                 wire:loading.remove
                                 role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                <strong>خطا!</strong>{{$message}}
                            </div>
                            @enderror
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="proSKU">موجودی</label>
                                <input name="stock" type="text" class="form-control" id="proSKU" value="">
                            </div>
                            @error('stock')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                 wire:loading.remove
                                 role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                <strong>خطا!</strong>{{$message}}
                            </div>
                            @enderror
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="gender">فروشنده</label>
                                <select name="seller_id" class="form-select" id="gender">
                                    @foreach($sellers as $seller)
                                        <option value="{{$seller['id']}}">{{$seller['name']}}</option>
                                    @endforeach
                                </select>
                                @error('seller_id')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                     wire:loading.remove
                                     role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>خطا!</strong>{{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="category">دسته محصول</label>
                                <select name="category_id" class="form-select" id="category">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat['id']}}">{{$cat['name']}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                     wire:loading.remove
                                     role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>خطا!</strong>{{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-xxl-12 col-lg-6 col-md-12">
                                <label for="tags">Tags</label>
                                <input id="tags" class="product-tags" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
                    <div class="widget-content widget-content-area ecommerce-create-section">
                        <div class="row">
                            <div class="col-sm-12 mb-4">
                                <label for="regular-price">درصد تخفیف</label>
                                <input type="text" name="discount" class="form-control" id="regular-price">
                            </div>
                            @error('discount')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                 wire:loading.remove
                                 role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                <strong>خطا!</strong>{{$message}}
                            </div>
                            @enderror
                            <div class="col-sm-12 mb-4">
                                <label for="sale-price">تاریخ انقضا</label>
                                <input type="date" name="discount_duration" class="form-control" id="sale-price">
                            </div>
                            @error('discount_duration')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                 wire:loading.remove
                                 role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                <strong>خطا!</strong>{{$message}}
                            </div>
                            @enderror
                            <div class="col-sm-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-danger">
                                    <input name="featured" class="switch-input" type="checkbox" role="switch" id="pricing-includes-texes">
                                    <label class="switch-label" for="pricing-includes-texes">کالای ویژه</label>
                                </div>
                                @error('featured')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                     wire:loading.remove
                                     role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>خطا!</strong>{{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success w-100">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


</div>

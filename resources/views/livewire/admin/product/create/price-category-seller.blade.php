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

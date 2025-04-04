<div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
    <div class="widget-content widget-content-area ecommerce-create-section">
        <div class="row">
            <div class="col-sm-12 mb-4">
                <label for="regular-price">درصد تخفیف</label>
                <input type="text" name="discount" value="{{@$product['discount']}}"
                       class="form-control" id="regular-price">
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
                <input type="date" value="{{@$product['discount_duration']}}"
                       name="discount_duration" class="form-control" id="sale-price">
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
                    <input name="featured" {{@$product->featured == 1 ? 'checked' : ''}}
                           class="switch-input" type="checkbox" role="switch" id="pricing-includes-texes">
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
                <button type="submit" class="btn btn-success w-100">
                    <svg wire:loading
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin me-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>
                    <span wire:loading.remove>ذخیره</span>
                </button>
            </div>
        </div>
    </div>
</div>

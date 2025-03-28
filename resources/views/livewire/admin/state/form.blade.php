<div class="col-md-4">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>مدیریت استان ها</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="row">
                <div class="col-lg-12 col-12 ">
                    <form wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">
                        <div class="form-group">
                            <label for="t-text" class="form-label">نام استان</label>
                            <input wire:model="name" id="t-text" type="text" name="name" placeholder="استان جدید ..." class="form-control">
                            @error('name')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                 wire:loading.remove
                                 role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                <strong>خطا!</strong>{{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="t-text" class="form-label">کشور :</label>
                            <select wire:model="countryId"
                                name="countryId" class="form-select" aria-label="Default select example" wire:ignore>
                                @foreach($countries as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                            @error('countryId')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                 wire:loading.remove
                                 role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                <strong>خطا!</strong>{{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" name="txt" class="mt-4 btn btn-primary">
                                <svg wire:loading
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin me-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>
                                <span wire:loading.remove>ثبت</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="statbox widget box box-shadow">
    <form wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">

        @foreach($features as $feature)
            <div class="row">
                <div class="col-md-2">
                    <h6>
                        {{$feature->name}}
                    </h6>
                </div>
                <div class="col-md-6">
                    <select name="featureValue[{{$loop->index}}]" class="form-select mb-3" id="category">
                        @foreach($feature->categoryFeatureValues as $value)
                            <option value="{{$feature->id}}_{{$value['id']}}"


                            >{{$value['value']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endforeach

            @error('featureValue.*')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                 wire:loading.remove
                 role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg> ...</svg>
                </button>
                <strong>خطا!</strong>{{$message}}
            </div>
            @enderror
            <div class="col-sm-12 mb-3">
                <button type="submit" class="btn btn-success">
                    <svg wire:loading
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin me-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>
                    <span wire:loading.remove>ذخیره</span>
                </button>
            </div>
    </form>

</div>

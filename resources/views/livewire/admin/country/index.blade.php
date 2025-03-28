<div class="row layout-top-spacing">
    {{--Form--}}
    <div class="col-md-4">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>مدیریت کشور ها</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="row">
                    <div class="col-lg-12 col-12 ">
                        <form wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">
                            <div class="form-group">
                                <label for="t-text" class="form-label">نام کشور</label>
                                <input wire:model="name" id="t-text" type="text" name="name" placeholder="کشور جدید ..." class="form-control">
                                @error('name')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4 mt-4"
                                     wire:loading.remove
                                     role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>خطا!</strong>{{$message}}
                                </div>
                                @enderror
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
    {{--List--}}
    <div class="col-md-8">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>لیست کشور ها</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            <th scope="col">نام کشور</th>
                            <th class="text-center" scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($countries as $country)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$loop->iteration + $countries->firstItem()-1}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$country['name']}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="action-btns">

                                        <a href="javascript:void(0);" wire:click="edit({{$country['id']}})"
                                           class="action-btn btn-edit bs-tooltip me-2"
                                           data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-edit-2">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        <a  wire:confirm="آیا رکورد حذف شود ؟؟" wire:click="delete({{$country['id']}})"
                                            href="javascript:void(0);" class="action-btn btn-delete bs-tooltip"
                                           data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$countries->links('layouts.admin.paginate')}}
                </div>

            </div>
        </div>
    </div>
</div>

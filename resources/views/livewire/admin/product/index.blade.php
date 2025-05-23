<div class="row layout-top-spacing">

    <div class="col-md-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>لیست محصولات</h4>
                        <a href="{{route('admin.product.create')}}" class="btn btn-outline-success mb-2 me-4 mt-4">
                            افزودن محصول جدید
                        </a>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-bordered border-white">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            <th scope="col">کد محصول</th>
                            <th scope="col">تصویر محصول</th>
                            <th scope="col">نام محصول</th>
                            <th scope="col">دسته بندی</th>
                            <th scope="col">قیمت</th>
                            <th scope="col">ویژگی ها</th>
                            <th class="text-center" scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$loop->iteration + $products->firstItem()-1}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$product['p_code']}}</h6>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <img src="/products/{{$product['id']}}/small/{{@$product->coverImage->path}}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$product['name']}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$product->category->name}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{number_format($product['price'])}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <a href="{{route('admin.product.feature',$product['id'])}}" class="btn btn-outline-primary mb-2">ویژگی</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="action-btns">

                                        <a href="{{route('admin.product.create')}}?p_id={{$product['id']}}"
                                           class="action-btn btn-edit bs-tooltip me-2"
                                           data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-edit-2">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        <a  wire:confirm="آیا رکورد حذف شود ؟؟" wire:click="delete({{$product['id']}})"
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
                    {{$products->links('layouts.admin.paginate')}}
                </div>

            </div>
        </div>
    </div>


</div>

@extends('welcome')
<!-- ========== Start Section ========== -->
@section('master')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Product Detail</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/"
                                            style="text-decoration:none;color:black">CountryCraft</a></li>
                                    <li class="breadcrumb-item active">Product Detail</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-3">
                                        {{-- <input type="text" name="status" id="field_id" class="form-control" @if ($initiallyDisabled) disabled @endif> --}}
                                        {{-- <a href="{{ '' }}" id=""
                                            class="btn btn-md btn-{{ product->status ? 'success' : 'danger' }}">{{ product->status ? 'Enable' : 'Disable' }}</a> --}}
                                        {{-- <a href="{{ route('product.edit', product->id) }}" --}}
                                        {{-- class="btn btn-md btn-primary">Edit</a> --}}
                                        {{-- <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline;"> --}}
                                        {{-- @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-md btn-danger"
                                            onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                        </form> --}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="product-detail">
                                            <div class="row">
                                                {{-- @foreach ($products as $product) --}}
                                                <div class="col-3">
                                                    {{-- @foreach (product->getMedia('product-image') as $item) --}}

                                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                                        aria-orientation="vertical">
                                                        <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill"
                                                            href="#product-1" role="tab">
                                                            <img src="/product/{{ $product->image_1 }}" alt="img-1"
                                                                class="img-fluid mx-auto d-block tab-img rounded">

                                                        </a>
                                                        {{-- <a class="nav-link" id="product-2-tab" data-bs-toggle="pill"
                                                            href="#product-2" role="tab">
                                                            <img src=" /assets/images/download (8).jpg " alt="img-5"
                                                                class="img-fluid mx-auto d-block tab-img rounded">
                                                        </a>
                                                        <a class="nav-link" id="product-3-tab" data-bs-toggle="pill"
                                                            href="#product-3" role="tab">
                                                            <img src="/assets/images/download (9).jpg" alt="img-3"
                                                                class="img-fluid mx-auto d-block tab-img rounded">
                                                        </a>
                                                        <a class="nav-link" id="product-4-tab" data-bs-toggle="pill"
                                                            href="#product-4" role="tab">
                                                            <img src="/assets/images/download (10).jpg" alt="img-4"
                                                                class="img-fluid mx-auto d-block tab-img rounded">
                                                        </a> --}}
                                                    </div>
                                                    {{-- @endforeach --}}
                                                </div>
                                                <div class="col-md-8 col-9">
                                                    <div class="tab-content" id="v-pills-tabContent">
                                                        <div class="tab-pane fade show active" id="product-1"
                                                            role="tabpanel">
                                                            <div class="product-img">
                                                                {{-- @foreach (product->getMedia('product-image') as $item) --}}
                                                                {{-- <td><img src="{{$item->getUrl()}}" alt="" class="rounded-circle" width="50px" height="50px"></td> --}}

                                                                <img src="/product/{{ $product->image_1 }}" alt="img-1"
                                                                    class="img-fluid mx-auto d-block"
                                                                    data-zoom="/product/{{ $product->image_1 }}">
                                                                {{-- @endforeach --}}
                                                            </div>
                                                        </div>
                                                        {{-- <div class="tab-pane fade" id="product-2" role="tabpanel">
                                                            <div class="product-img">
                                                                <img src="/assets/images/download (8).jpg" alt="img-5"
                                                                    class="img-fluid mx-auto d-block">
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="product-3" role="tabpanel">
                                                            <div class="product-img">
                                                                <img src="/assets/images/download (9).jpg" alt="img-3"
                                                                    class="img-fluid mx-auto d-block">
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="product-4" role="tabpanel">
                                                            <div class="product-img">
                                                                <img src="/assets/images/download (10).jpg" alt="img-4"
                                                                    class="img-fluid mx-auto d-block">
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                                {{-- @endforeach --}}
                                            </div>
                                        </div>
                                        <!-- end product img -->
                                    </div>
                                    {{-- @foreach ($products as $product) --}}
                                    <div class="col-xl-7">
                                        <div class="mt-4 mt-xl-3">
                                            <a href="#" class="text-primary fs-3"></a>
                                            <h3 class="mt-1 mb-3 text-primary">{{ $product->category->name }}</h3>
                                            <h5 class="mt-1 mb-3 text-danger">{{ $product->product_name }}</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b> Product Number : </b>{{ $product->product_number }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <Script></Script><b>Sku Code : </b>
                                                        {{ $product->sku_code }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Stock Code : </b><span>CC625</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><b>Product Type : </b> <span>{{ $product->product_type }}</span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Meterial : </b><span>{{ $product->meterial }}</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><b>Finish : </b><span>{{ $product->finish }}</span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Length : </b><span>{{ $product->lenght }}</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><b>Width : </b><span>{{ $product->width }}</span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Height : </b><span>{{ $product->height }}</span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p><b>Short Discription :
                                                        </b><span>{{ $product->short_description }}</span></p>
                                                </div>
                                            </div>
                                            {{-- <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Meta Title : </b><span>table wooden</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><b>Meta Keyword : </b><span>Tt695</span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <p><b>Meta Description : </b><span>Lorem ipsum dolor sit amet
                                                            consectetur
                                                            adipisicing elit. Distinctio aliquid, ipsum nihil
                                                            exercitationem
                                                            vero dignissimos dolorum molestiae, maiores beatae pariatur
                                                            fugiat doloribus. Sequi quo quod error perferendis
                                                            consectetur
                                                            molestiae dolorum.</span></p>
                                                </div>
                                            </div> --}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- <img src="{{ asset($qrCodePath) }}" alt="QR Code"> --}}
                                                </div>
                                            </div>
                                            {{-- <h5 class="mt-2"><del class="text-muted me-2">$252</del>$240 <span class="text-danger font-size-12 ms-2">25 % Off</span></h5>
                                                    <p class="mt-3">To achieve this, it would be necessary to have uniform pronunciation</p> --}}
                                            <hr class="my-4">

                                            {{-- <div class="row">
                                                        <div class="col-md-6">
                                                            <div>
                                                                <h5 class="font-size-14">Specification :</h5>
                                                                <ul class="list-unstyled product-desc-list">
                                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i>{{$product->specification}}</li>
                                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Cotton</li>
                                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> All Sizes available</li>
                                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> 4 Different Color</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h5 class="font-size-14">Services :</h5>
                                                            <ul class="list-unstyled product-desc-list">
                                                                <li><i class="mdi mdi-sync text-primary me-1 align-middle font-size-16"></i> 10 Days Replacement</li>
                                                                <li><i class="mdi mdi-currency-usd-circle text-primary me-1 align-middle font-size-16"></i> Cash on Delivery available</li>
                                                            </ul>
                                                        </div>
                                                    </div> --}}
                                        </div>
                                    </div>
                                    {{-- @endforeach --}}
                                </div>
                                <!-- end row -->

                                <div class="mt-4">
                                    <h5 class="font-size-14 mb-3">Product description: </h5>
                                    <div class="product-desc">
                                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="desc-tab" data-bs-toggle="tab" href="#desc"
                                                    role="tab">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="specifi-tab" data-bs-toggle="tab"
                                                    href="#specifi" role="tab">Specifications</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content border border-top-0 p-4">
                                            <div class="tab-pane fade" id="desc" role="tabpanel">
                                                <div>
                                                    <p>{{ $product->description }}</p>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                                <div class="table-responsive">
                                                    <table class="table table-nowrap mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" style="width: 400px;">Category</th>
                                                                <td>{{ $product->meterial }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">First</th>
                                                                <td>{{ $product->specification_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Second</th>
                                                                <td>{{ $product->specification_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Third</th>
                                                                <td>{{ $product->specification_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Fourth</th>
                                                                <td>{{ $product->specification_4 }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->

                {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3">
                                                        <span class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-1 align-self-center overflow-hidden">
                                                        <h5>Free Shipping</h5>
                                                        <p class="text-muted mb-0">Sed ut perspiciatis unde</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex mt-4 mt-md-0">
                                                    <div class="avatar-sm me-3">
                                                        <span class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                                            <i class="ri-exchange-line"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-1 align-self-center overflow-hidden">
                                                        <h5>Easy Return</h5>
                                                        <p class="text-muted mb-0">Neque porro quisquam est</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex mt-4 mt-md-0">
                                                    <div class="avatar-sm me-3">
                                                        <span class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                                            <i class="ri-money-dollar-circle-line"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-1 align-self-center overflow-hidden">
                                                        <h5>Cash on Delivery</h5>
                                                        <p class="text-muted mb-0">Ut enim ad minima quis</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
<!-- ========== End Section ========== -->

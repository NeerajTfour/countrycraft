@extends('admin.welcome')
@section('main')
    <div class="main-content mb-3 pb-5">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add Product</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Add Product</li>
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

                                <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                    <!-- end ul -->
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane active" id="basic-info">
                                            {{-- <div class="row">
                                                        <div class="col-md-10">
                                                            <h4 class="card-title">Basic Information</h4>
                                                        <p class="card-title-desc">Fill all information below</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                    </div> --}}
                                        </div>
                                        <form action="{{ route('product.store') }}" method="POST"
                                            enctype="multipart/form-data" class="form-group">
                                            @csrf
                                            @method('POST')
                                            <div class="row form-group">
                                                {{-- <input
                                                                type="hidden"
                                                                value="{{ $product->id }}"
                                                                name="product_id"
                                                            /> --}}
                                                <div class="col-md-10">
                                                    <h5>Category</h5>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <a href="{{ route('product.view') }}"
                                                        class="btn btn-md btn-primary">View</a>
                                                </div>
                                                <div class="col-md-4 mb-3 mt-3 form-group">
                                                    <label for="">Category Name</label>
                                                    <select name="category_id" class="form-control">
                                                        <option value="">Category Name</option>
                                                        @foreach ($categories as $cate)
                                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('category_id'))
                                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 mb-3 mt-3 form-group">
                                                    <label for="product_type">Product Type</label>
                                                    <select name="product_type" id="product_type" class="form-control">
                                                        <option value="Regular"
                                                            {{ old('product_type') == 'Regular' ? 'selected' : '' }}>Regular
                                                        </option>
                                                        <option value="Best Selling"
                                                            {{ old('product_type') == 'Best Selling' ? 'selected' : '' }}>
                                                            Best Selling</option>
                                                        <option value="Discount"
                                                            {{ old('product_type') == 'Discount' ? 'selected' : '' }}>
                                                            Discount</option>
                                                    </select>
                                                    @if ($errors->has('product_type'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('product_type') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <h5>Product Details</h5>
                                                <div class="col-md-4 mb-3 form-group">
                                                    <label for="">Product Number</label>
                                                    <input type="text" name="product_number" class="form-control"
                                                        value="{{ rand(1000, 9999) }}">
                                                    @if ($errors->has('pr_number'))
                                                        <span class="text-danger">{{ $errors->first('pr_number') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 mb-3 form-group">
                                                    <label for="">Product Name</label>
                                                    <input type="text" name="product_name" class="form-control"
                                                        value="">
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                {{-- <div class="col-md-4 mb-3 form-group">
                                                    <label for="">Short Name</label>
                                                    <input type="text" name="short_name" class="form-control"
                                                        value="">
                                                    @if ($errors->has('short_name'))
                                                        <span class="text-danger">{{ $errors->first('short_name') }}</span>
                                                    @endif
                                                </div> --}}
                                                <div class="col-md-4 mb-3 form-group">
                                                    <label for="">Stock Code</label>
                                                    <input type="text" name="sku_code" class="form-control"
                                                        value="">
                                                    @if ($errors->has('stock_code'))
                                                        <span class="text-danger">{{ $errors->first('stock_code') }}</span>
                                                    @endif
                                                </div>
                                                {{-- @php
                                                                $image = DB::table('products')->where('id',29)->first();
                                                                $images = exlode('|',$image->image);
                                                            @endphp
                                                            @foreach ($images as $item)
                                                                <img src="{{URL::to($item)}}" height="60" width="60" alt="">
                                                            @endforeach --}}
                                                <hr>
                                                <div class="row">
                                                    <h5>Specification</h5>
                                                    <div class="col-md-4 mb-3 form-group">
                                                        <label for="">Specification 1</label>
                                                        <input type="text" name="specification_1" class="form-control"
                                                            value="">
                                                        @if ($errors->has('specification'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('specification') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4 mb-3 form-group">
                                                        <label for="">Specification 2</label>
                                                        <input type="text" name="specification_2" class="form-control"
                                                            value="">
                                                        @if ($errors->has('specification'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('specification') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4 mb-3 form-group">
                                                        <label for="">Specification 3</label>
                                                        <input type="text" name="specification_3" class="form-control"
                                                            value="">
                                                        @if ($errors->has('specification'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('specification') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4 mb-3 form-group">
                                                        <label for="">Specification 4</label>
                                                        <input type="text" name="specification_4" class="form-control"
                                                            value="">
                                                        @if ($errors->has('specification'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('specification') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <h5>Multi Image</h5>
                                                    <div class="col-md-4 mb-3 form-group">
                                                        <label for="">Image1</label>
                                                        {{-- <a href="{{ route('product-image.upload', $product->id) }}" class="btn btn-info">Add /View Images</a> --}}
                                                        {{-- @foreach ($product->getMedia('product-image') as $item)
                                                                    <img src="{{ $item->getUrl() }}" alt="" class="rouned"
                                                                        width="50px" height="50px">
                                                                @endforeach --}}
                                                        <input type="file" name="image_1" id="multi_image" multiple
                                                            class="form-control" value="">
                                                        @if ($errors->has('image'))
                                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4 mb-3 form-group">
                                                        <label for="">Image2</label>
                                                        <input type="file" name="image_2" id="multi_image" multiple
                                                            class="form-control" value="">
                                                        @if ($errors->has('image'))
                                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4 mb-3 form-group">
                                                        <label for="">Image3</label>
                                                        <input type="file" name="image_3" id="multi_image" multiple
                                                            class="form-control" value="">
                                                        @if ($errors->has('image'))
                                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4 mb-3 form-group">
                                                        <label for="">Image4</label>
                                                        <input type="file" name="image_4" id="multi_image" multiple
                                                            class="form-control" value="">
                                                        @if ($errors->has('image'))
                                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                {{-- <table class="table table-striped" id="table">
                                                    <tr>
                                                        <th>Specification</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <tr>
                                                        <td>

                                                            <input type="text" name="specification[]"
                                                                class="form-control" placeholder="Enter specification">
                                                        </td>
                                                        <td><button type="button" name="add" id="add"
                                                                class="btn btn-success">Add more</button></td>
                                                    </tr>
                                                </table> --}}
                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="">Short Discription</label>
                                                    <textarea name="short_description" id="" cols="30" rows="5" class="form-control"></textarea>
                                                    @if ($errors->has('short_discription'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('short_discription') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="">Discription</label>
                                                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                                    @if ($errors->has('description'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('description') }}</span>
                                                    @endif
                                                </div>


                                            </div>
                                            <hr>
                                            <div class="row">
                                                <h5>Additional Information</h5>
                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="">Meterial</label>
                                                    <input type="text" name="meterial" class="form-control"
                                                        value="">
                                                    @if ($errors->has('meterial'))
                                                        <span class="text-danger">{{ $errors->first('meterial') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="">Finish</label>
                                                    <input type="text" name="finish" class="form-control"
                                                        value="">
                                                    @if ($errors->has('finish'))
                                                        <span class="text-danger">{{ $errors->first('finish') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 mb-3 form-group">
                                                    <label for="">Length</label>
                                                    <input type="text" name="lenght" class="form-control"
                                                        value="">
                                                    @if ($errors->has('length'))
                                                        <span class="text-danger">{{ $errors->first('length') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 mb-3 form-group">
                                                    <label for="">Width</label>
                                                    <input type="text" name="width" class="form-control"
                                                        value="">
                                                    @if ($errors->has('width'))
                                                        <span class="text-danger">{{ $errors->first('width') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 mb-3 form-group">
                                                    <label for="">Height</label>
                                                    <input type="text" name="height" class="form-control"
                                                        value="">
                                                    @if ($errors->has('height'))
                                                        <span class="text-danger">{{ $errors->first('height') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            {{-- <div class="row">
                                                <h5>Meta Content</h5>
                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="">Meta Title</label>
                                                    <input type="text" name="meta_title" class="form-control"
                                                        value="">
                                                    @if ($errors->has('meta_title'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('meta_title') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="">Meta Keyword</label>
                                                    <input type="text" name="meta_keyword" class="form-control"
                                                        value="">
                                                    @if ($errors->has('meta_keyword'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('meta_keyword') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="">Meta Description</label>
                                                    <textarea name="meta_description" id="" cols="30" rows="5" class="form-control"></textarea>
                                                    @if ($errors->has('meta_description'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('meta_description') }}</span>
                                                    @endif
                                                </div>
                                            </div> --}}
                                            <div class="row form-group text-center">
                                                <div class="col-md-2">
                                                    <input type="submit"
                                                        class="btn btn-md btn-primary mb-5 form-control rounded-pill"
                                                        value="Submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var i = 0;
        $(document).ready(function() {
            $('#add').click(function() {
                if (i < 5) {
                    ++i;
                    $('#table').append(
                        `<tr>
                        <td>
                            <input type="text" name="inputs[` + i + `][specification]" placeholder="Enter specification" class="form-control"/>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                        </td>
                     </tr>`
                    );
                } else {
                    alert("You can only add up to 6 rows.");
                }
            });

            // Add event listener for dynamically created remove buttons
            $('#table').on('click', '.remove-table-row', function() {
                $(this).closest('tr').remove();
                i--; // Decrement the counter when a row is removed
            });
        });
    </script>
@endsection

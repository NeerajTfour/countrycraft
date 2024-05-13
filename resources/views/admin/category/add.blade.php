@extends('admin.welcome')

@section('main')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Form Advanced</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Advanced</li>
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
                                    <div class="col-md-9">
                                        <h2 class="text-primary mb-5">Category Information</h2>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('category.view') }}" class="btn btn-md btn-primary">View</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <form action="{{ route('category.store') }}" method="POST"
                                            enctype="multipart/form-data" class="form-group">
                                            @csrf
                                            @method('POST')
                                            <div class="row  form-group">
                                                <div class="col-md-4 form-group">
                                                    <label for="" class="mb-3">Category</label>
                                                    <input type="text" name="name" class="form-control mb-3"
                                                        placeholder="Category" value="">
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="" class="mb-3">Sub Category</label>
                                                    <select name="category_id" class="form-control" id="">
                                                        <option value="">No category</option>
                                                        @foreach ($categories as $categorie)
                                                            <option value="{{ $categorie->id }}">{{ $categorie->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('sub-category'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('sub category') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md">
                                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection

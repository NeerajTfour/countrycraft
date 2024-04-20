@extends('admin.welcome')
@section('main')
    {{-- alert message print here using session  --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" style="margin-left: 280px">
            <strong>{{ $message }}</strong>
        </div>
    @endif

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
                                        <h2 class="text-primary mb-5">Slider Information</h2>
                                    </div>
                                    <div class="col-md-2">
                                        {{-- <a href="/admin/slider/sliderTable" class="btn btn-md btn-primary">View</a> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <form action="{{ route('slider.store') }}" method="POST"
                                            enctype="multipart/form-data" class="form-group">
                                            @csrf
                                            {{-- @method('POST') --}}
                                            <div class="row  form-group">
                                                <div class="col-md-4 form-group">
                                                    <label for="" class="mb-3">Title</label>
                                                    <input type="text" name="title" class="form-control mb-3"
                                                        placeholder="title" value="{{ old('title') }}">
                                                    @if ($errors->has('title'))
                                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="" class="mb-3">Paragraph</label>
                                                    <input type="text" name="para" class="form-control mb-3"
                                                        placeholder="para" value="{{ old('para') }}">
                                                    @if ($errors->has('para'))
                                                        <span class="text-danger">{{ $errors->first('para') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="" class="mb-3">Bname</label>
                                                    <input type="text" name="bname" class="form-control mb-3"
                                                        placeholder="bname" value="{{ old('bname') }}">
                                                    @if ($errors->has('bname'))
                                                        <span class="text-danger">{{ $errors->first('bname') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="" class="mb-3">Image</label>
                                                    <input type="file" name="image" class="form-control mb-3"
                                                        placeholder="image">
                                                    @if ($errors->has('image'))
                                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
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

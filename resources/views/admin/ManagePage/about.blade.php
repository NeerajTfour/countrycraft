@extends('admin.welcome')
@section('main')
    <div class="container">
        <div class="row" style="margin-top:85px;margin-left:115px">
            <div class="col-md-12">
                <div class="card p-3 mb-5">
                    <form action="{{ url('/admin/ManagePage/about/edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        @isset($about)
                            <div class="row">
                                <input type="hidden" value="{{ $about->id }}" name="about_id" />
                                <div class="col-md-10 mb-3">
                                    <textarea name="about_text" id="editor" cols="50" rows="30">{{ $about->about_text }}</textarea>
                                </div>
                            </div>
                        @else
                            <p>not found</p>
                        @endisset
                        <button type="submit" class="btn btn-md btn-primary mb-3">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.welcome')
@section('main')
    <div class="container">
        <div class="row" style="margin-top:85px;margin-left:115px">
            <div class="col-md-12">
                <div class="card p-3 mb-5">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        {{-- @isset($term) --}}
                        <div class="row">
                            <input type="hidden" value="" name="terms_id" />
                            <div class="col-md-8 mb-3">
                                <textarea name="text" id="editor" cols="50" rows="30"></textarea>
                            </div>
                        </div>
                        {{-- @else --}}
                        {{-- <p>not found</p> --}}
                        {{-- @endisset --}}
                        <button type="submit" class="btn btn-md btn-primary mb-3">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

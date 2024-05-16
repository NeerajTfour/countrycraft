@extends('admin.welcome')

@section('main')
    <div class="container">
        <div class="row" style="margin-top:85px; margin-left:115px;">
            <div class="col-md-12">
                <div class="card p-3 mb-5">
                    <form action="{{ url('/admin/ManagePage/privacy/edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($privacy)
                            <div class="row">
                                <input type="hidden" value="{{ $privacy->id }}" name="privacy_id" />
                                <div class="col-md-10 mb-3">
                                    <textarea name="text" id="editor" cols="50" rows="30">{{ $privacy->text }}</textarea>
                                </div>
                            </div>
                        @else
                            <p>Privacy policy not found</p>
                        @endisset
                        <button type="submit" class="btn btn-md btn-primary mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include the script to initialize the editor if using one like CKEditor or TinyMCE -->
    {{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script> --}}
@endsection

@extends('admin.welcome')
@section('main')
    <div class="container">
        <div class="row" style="margin-top:85px;margin-left:115px">
            <div class="col-md-12">
                <div class="card p-3 mb-5">
                    <form action="{{ route('term.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        @isset($terms)
                            <div class="row">
                                <input type="hidden" value="{{ $terms->id }}" name="terms_id" />
                                <div class="col-md-10 mb-3">
                                    <textarea name="text" id="editor" cols="50" rows="30">{{ $terms->text }}</textarea>
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

    {{-- <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckeditor.upload') . '?_token=' . csrf_token() }}'
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script> --}}
@endsection

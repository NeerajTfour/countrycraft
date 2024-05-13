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
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="text-primary mb-5">Contact Information</h2>
                                    </div>
                                    <div class="col-md-3 w-25">
                                        {{-- <form action="{{ route('category.search') }}" method="GET">
                                            <div class="input-group">
                                                <input class="form-control" name="search" placeholder="search...">
                                                <button class="btn btn-sm btn-light">Search</button>
                                            </div>
                                        </form> --}}
                                    </div>
                                    <div class="col-md-1">
                                        <a href="/admin/contact" class="btn btn-md btn-primary"><i
                                                class="fa fa-add fs-4"></i></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-striped table-border table-hover">
                                            <thead class="text-dark bg-success fs-5">
                                                <th>S.No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Message</th>
                                                <th colspan="3">Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($contact as $key => $cont)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $cont->name }}</td>
                                                        <td>{{ $cont->email }}</td>
                                                        <td>{{ $cont->contact }}</td>
                                                        <td>{{ $cont->msg }}</td>
                                                        <td><a href="javascript::void(0)" data-id="{{ $cont->id }}"
                                                                class="contact_delete"><i class="fa fa-trash "></i> </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            {{-- {{ $contact->links() }} --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endsection
            @push('footer-script')
                <script>
                    $('.contact_delete').on('click', function() {
                        if (confirm('Are you want to delete this category.')) {
                            var id = $(this).data('id');
                            $.ajax({
                                url: '{{ route('contact.destroy') }}',
                                method: 'POST',
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    'id': id
                                },
                                success: function(data) {
                                    location.reload();
                                }
                            });
                        }
                    });
                </script>
            @endpush

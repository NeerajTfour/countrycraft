@extends('welcome')

@section('master')
    <section>
        <div class="container-fluid bg-color ">
            <div class="row sticky-left mb-3">
                <div class="col-md-2 pt-3 pro ">
                    <h6 class="ps-3">PRODUCT CATEGORIES</h6>
                    <ul class="">
                        {{-- @foreach ($categories as $categorie)
                            <li><a href="{{ $categories->category_id }}">{{ $categories->category->name }}</a></li> --}}
                        <li> <a href="/layouts/bar">Bar Cabinet</a></li>
                        <li> <a href="/layouts/dining/bedside">Bed Side</a></li>
                        <li> <a href="/layouts/bar/bookselves">Bookshelf</a></li>
                        <li> <a href="/layouts/chair">chair</a></li>
                        <li> <a href="/layouts/dining/coffee">Coffee Table</a></li>
                        <li> <a href="/layouts/dining/console">Console Table</a></li>
                        <li> <a href="/layouts/dining/desk">Desk</a></li>
                        <li> <a href="/layouts/dining">Dining Table</a></li>
                        <li> <a href="/layouts/bar/shelving">Shelving</a></li>
                        <li> <a href="/layouts/chair/sidetable">Side Table</a></li>
                        <li> <a href="/layouts/chair/sideboard">Sideboard</a></li>
                        <li> <a href="/layouts/chair/sofa">Sofa</a></li>
                        <li> <a href="/layouts/bar/tv">TV Cabinet</a></li>
                        {{-- @endforeach --}}
                    </ul>
                </div>
                <div class="col-md-10">
                    @yield('cate')
                </div>
            </div>
        </div>
    </section>
@endsection

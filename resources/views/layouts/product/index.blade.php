@extends('welcome')

@section('master')
    <section>
        <div class="container-fluid">
            <div class="row sticky-left mb-3">
                <div class="col-md-2 pt-3 pro ">
                    <h6>PRODUCT CATEGORIES</h6>
                    <ul class="">
                        <li><a href="/layouts/bar">Bar Cabinet</a></li>
                        <li> <a href="">Bed Side</a></li>
                        <li> <a href="">Bookshelf</a></li>
                        <li> <a href="">chair</a></li>
                        <li> <a href="">Coffee Table</a></li>
                        <li> <a href="">Console Table</a></li>
                        <li> <a href="">Desk</a></li>
                        <li> <a href="">Dining Table</a></li>
                        <li> <a href="">Shelving</a></li>
                        <li> <a href="">Side Table</a></li>
                        <li> <a href="">Sideboard</a></li>
                        <li> <a href="">Sofa</a></li>
                        <li> <a href="">TV Cabinet</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    @yield('cate')
                </div>
            </div>
        </div>
    </section>
@endsection

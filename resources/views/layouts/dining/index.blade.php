@extends('layouts.product.index')
@section('cate')
    <div class="container">
        <div class="row ms-5 overlay">
            @foreach ($products as $product)
                <div class="col-md-4 pt-3">
                    <div class="card-2" style="width: 18rem;">
                        <img src="/product/{{ $product->image_1 }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-danger">{{ $product->category->name == 'chair' }}</h5>
                            <h5 class="card-code ">{{ $product->sku_code }}</h5>
                            <span class="card-height">H: {{ $product->height }}</span>
                            <span class="card-width">W : {{ $product->width }}</span>
                            <span class="card-length">L : {{ $product->lenght }}</span> <br>
                            <a href="/layouts/product/prodetail/{id}" class="btn btn-primary mt-3">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

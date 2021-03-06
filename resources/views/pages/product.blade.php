@extends('layouts.base')

@include('layouts.jumbotron-product')

@section('content')
<section class="product">
    <div class="container">
        <h2 class="helvetica-bold text-center mb-5">Daftar Produk <span class="helvetica-bold" style="color: #000;">Kami</span></h2>
        <div class="product-body">
            <div class="row">
                @foreach($product as $p)
                <div class="col-md-4 column-one" data-aos="zoom-in">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="{{ asset('images/products/' .$p->image) }}" alt="" srcset="">
                        </div>
                        <div class="card-body">
                            {!! $p->name !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.canvas')
@section('content')


<section id="page-title">
    <div class="container clearfix">
    <h1>Products</h1>
    <span>Start Buying your Favourite Products</span>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pages.index')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Products</li>
    </ol>
    </div>
    </section>
    
    <section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    
    <div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
        @foreach($products as $product)
    <div class="product clearfix">
    <div class="product-image">
    <a href="/products/single-product/{{$product->id}}"><img src="{{ asset('/storage/product_images/'. $product->images)}}" alt="{{$product->name}}"></a>
    <a href="/products/single-product/{{$product->id}}"><img src="{{ asset('/storage/product_images/'. $product->images)}}" alt="{{$product->name}}"></a>
    
    </div>
    <div class="product-desc">
    <div class="product-title"><h3><a href="/products/single-product/{{$product->id}}">{{$product->name}}</a></h3></div>
  
    </div>
    </div>   
    @endforeach

    </div>
    </div>
     </div>
    </div>
    </div>
    </div>
    </section>

@endsection
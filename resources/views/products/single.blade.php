@extends('layouts.canvas')
@section('content')

<section id="page-title">
    <div class="container clearfix">
    <h1>{{$product->name}}</h1>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pages.index')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Shop</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
    </ol>
    </div>
    </section>
    
<section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
<div class="clear"></div>
<div class="col_two_fifth">
<h5></h5>
<img src="{{ asset('/storage/product_images/'. $product->images)}}" alt="{{$product->name}}">
</div>
<div class="col_three_fifth col_last">
<h4>{{$product->name}}</h4>
<div class="line"></div>
{{$product->description}}
<br>
<div class="pricing-price">
    <span class="price-unit"></span> ${{$product->price}}<span class="price-tenure"></span>
</div>
<a href="/send-query/{{$product->id}}" class="button button-border button-rounded button-fill fill-from-right button-blue"><span>Enquire</span></a>
</div>
</div>
</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">
    <h1>Related Products</h1>
<div class="clear"></div>
@foreach($relatedProducts as $relatedProduct)
<div class="col_one_fifth">
<img src="{{ asset('/storage/product_images/'. $relatedProduct->images)}}" alt="{{$product->name}}">
<h5>{{$relatedProduct->name}}</h5>
{{-- {{$relatedProduct->description}} --}}
<center>
$ {{$relatedProduct->price}} 
</center>
<center>
<a href="/products/single-product/{{$relatedProduct->id}}" class="button button-border button-rounded button-fill fill-from-right button-blue"><span>View</span></a>
</center>
</div>
@endforeach

</section>
@endsection

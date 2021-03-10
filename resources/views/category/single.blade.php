@extends('layouts.canvas')
@section('content')

<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('/storage/category_images/'. $category->image)}}''); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
    <div class="container clearfix">
    <h1>{{$category->name}}</h1>
    <span>Explore {{$category->name}}</span>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pages.index')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('category.index')}}">Categories</a></li>
    <li class="breadcrumb-item"><a href="/categories/category-single/{{$category->id}}">{{$category->name}}</a></li>

    </ol>
    </div>
    </section>

    
<div class="content-wrap-2">
    <div class="container clearfix">
        <div class="fancy-title title-dotted-border title-center">
            <h4><span style="color:black;">{{$category->name}}</span></h4>
            </div>
    <p style="font-family:'times new roman'">{{$category->description}}</p>
    </div>
</div>
 
<div class="content-wrap-2">
    <div class="container clearfix">
        <div class="title-block">
            <h4>Products from <span style="color:black;">{{$category->name}}</span></h4>
            </div>
<div class="row">
    
    @foreach($relatedProducts as $relatedProduct)
<div class="col-md-6 col-lg-4">
<div class="card" style="width: 20rem;">
<img class="card-img-top" height="170px;" width="450px;" src="{{ asset('/storage/product_images/'. $relatedProduct->images)}}" alt="Card image cap">
<div class="card-body">
<h4>{{$relatedProduct->name}}</h4>

<a href="/products/single-product/{{$relatedProduct->id}}" class="button button-border button-rounded button-fill fill-from-right button-blue"><span>View</span></a>

</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
    
@endsection
@extends('layouts.canvas')
@section('content')


<section id="page-title">
    <div class="container clearfix">
    <h1>Categories</h1>
    <span>Start Buying your Favourite Categories</span>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pages.index')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Categories</li>
    </ol>
    </div>
    </section>
    
    <section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    
    <div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
        @foreach($categories as $category)
    <div class="product clearfix">
    <div class="product-image">
    <a href="/categories/category-single/{{$category->id}}"><img src="{{ asset('/storage/category_images/'. $category->image)}}" alt="{{$category->name}}"></a>
    <a href="/categories/category-single/{{$category->id}}"><img src="{{ asset('/storage/category_images/'. $category->image)}}" alt="{{$category->name}}"></a>
    
    </div>
    <div class="product-desc">
    <div class="product-title"><h3><a href="/categories/category-single/{{$category->id}}">{{$category->name}}</a></h3></div>
  
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
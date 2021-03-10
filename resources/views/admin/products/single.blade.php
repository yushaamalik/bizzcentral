@extends('admin.layouts.admin')
@section('content')
<div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Product # {{$product->id}} </h2>
          <ol class="breadcrumb">
            <li> <a href="{{route('admin.dashboard')}}">Home</a> </li>
          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
              <h1>{{$product->name}} | {{$product->category['name']}}</h1>
                <div class="ibox-tools"> 
                    <button class="btn btn-primary" type="button">Edit</button>
                    <form method="POST" action="/admin/delete-product/{{$product->id}}">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
              </div>
              <!-- / ibox-title -->
              <div id="demo1" class="ibox-content collapse in">
                <div class="widgets-container">
                    <img class="image_fade" src="{{ asset('/storage/product_images/'. $product->images)}}" alt="Standard Post with Image" height="250px;" width="350px;">
                  <h3>Description</h3>
                    <p> {{$product->description}} </p>
                    <hr>
                </div>
              </div>

                </div>
                <div class="ibox-footer"> <span class="pull-right"> Last updated at : <strong> {{$product->updated_at->format('F-d')}} </strong> </span> Category : {{$product->category['name']}} <strong></strong> </div>
              </div>
            </div>
          </div>
        </div>
@endsection
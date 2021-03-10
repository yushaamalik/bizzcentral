@extends('layouts.canvas')
@section('content')


<section id="page-title">
    <div class="container clearfix">
    <h1>Send Query</h1>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pages.index')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Shop</a></li>
    <li class="breadcrumb-item active" aria-current="page">Send Query</li>
    </ol>
    </div>
    </section>
@if (session()->has('success'))
    <div class="alert alert-success">
        <i class="icon-gift"></i><strong>Success</strong> Your query has been successfully sent. We will get back to you shortly.
    </div>
    <strong>
        {!! session()->get('success') !!}
    </strong>
@endif
    <section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    <div class="table-responsive">
    <table class="table cart">
    <thead>
    <tr>
    <th class="cart-product-thumbnail">&nbsp;</th>
    <th class="cart-product-name">Product</th>
    <th class="cart-product-name">Category</th>
    <th class="cart-product-price">Unit Price</th>
    </tr>
    </thead>
    <tbody>
    <tr class="cart_item">
   
    <td class="cart-product-thumbnail">
    <img width="64" height="64" src="{{ asset('/storage/product_images/'. $product->images)}}" alt="{{$product->name}}"></a>
    </td>
    <td class="cart-product-name">
    <strong>{{$product->name}}</strong>
    </td>
    <td class="cart-product-name">
       <strong> {{$product->category['name']}}</strong>
        </td>
    <td class="cart-product-price">
   <strong> <span class="amount">${{$product->price}}</span></strong>
    </td>
    
    </tr>
   
    </tbody>
    </table>
    </div>
    <div class="row clearfix">
    <div class="col-lg-6 clearfix">
    <h4>Enter your details</h4>
    <form method="POST" action="{{route('orders.store')}}" >
        @csrf
        <br>
    <input type="hidden" value="{{$product->id}}" name="product_id">
    <div class="col_half">
    <input type="text" class="sm-form-control" required name="first_name" placeholder="First Name *" />
    </div>
    <div class="col_half">
    <input type="text" class="sm-form-control" required name="last_name" placeholder="Last Name *" />
    </div>
    <div class="col_half">
    <input type="text" class="sm-form-control"  name="contact_no" placeholder="Contact Number (Optional)" />
    </div>
    <div class="col_half">
        <label for="body">Additional Details (Optional)</label>
       <textarea rows="7" cols="75" name="body"> </textarea>
    </div>
    <div class="col_half">
    <button type="submit" class="btn btn-primary"> Send Query </button>
    </div>
</form>
    </div>
    <div class="col-lg-6 clearfix">
    <h4>Product Totals</h4>
    <div class="table-responsive">
    <table class="table cart">
    <tbody>
    <tr class="cart_item">
    <td class="cart-product-name">
    <strong>Product Subtotal</strong>
    </td>
    <td class="cart-product-name">
    <span class="amount">${{$product->price}}</span>
    </td>
    </tr>
    <tr class="cart_item">
    <td class="cart-product-name">
    <strong>Shipping</strong>
    </td>
    <td class="cart-product-name">
    <span class="amount">Free Delivery</span>
    </td>
    </tr>
    <tr class="cart_item">
    <td class="cart-product-name">
    <strong>Total</strong>
    </td>
    <td class="cart-product-name">
    <span class="amount color lead"><strong>${{$product->price}}</strong></span>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    

@endsection
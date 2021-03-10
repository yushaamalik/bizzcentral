@extends('admin.layouts.admin')
@section('content')
<!-- End page sidebar wrapper -->
<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Products </h2>
          <ol class="breadcrumb">
            <li> <a href="{{route('admin.dashboard')}}">Home</a> </li>
            <li> <a>Products</a> </li>
            <li class="active"> <strong> Create new </strong> </li>
          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <!-- Basic Form start -->
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="widgets-container">
                <h5>Add a City</h5>
                <hr>
                <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="editor">Category</label>
                    <div class="col-md-5 input-group">
                      <select class=" _select js-states form-control" name="category_id">
                          @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input class="form-control m-t-xxs" name="name" placeholder="Name" type="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sku</label>
                    <input class="form-control m-t-xxs" name="sku" placeholder="SKU" type="text">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Description </label>
                  <textarea rows="10" cols="152" name="description"> </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Featured Image </label>
                    <br>
                    <div class="fileinput fileinput-new" data-provides="fileinput"> <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                    <input type="file" name="product_image">
                    </span> <span class="fileinput-filename"></span> <a href="#" class="close fileinput-exists" data-dismiss="fileinput"
                    style="float: none">&times;</a> </div>
                 </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input class="form-control m-t-xxs" name="price" placeholder="Price" type="text">
                </div>
                 <div class="form-group">
                  <button type="submit" class="btn aqua m-t-xs bottom15-xs" data-toggle="modal" data-target=".modal-m">Submit</button>
                </form>
              </div>
            </div>
          </div>
          <!-- Basic Form End -->
          <!-- Horizontal Form start -->
@endsection
@section('js')
<script type="text/javascript">
  $(function() {
      $('._select').select2();
      var data = [{
          id: 0,
          text: 'enhancement'
      }, {
          id: 1,
          text: 'bug'
      }, {
          id: 2,
          text: 'duplicate'
      }, {
          id: 3,
          text: 'invalid'
      }, {
          id: 4,
          text: 'wontfix'
      }];

      $(".js-example-data-array").select2({
          data: data
      })

      $(".js-example-data-array-selected").select2({
          data: data
      })

      $('.selectpicker').selectpicker({
          style: 'defaultSelectDrop',
          size: 4
      });

      $('.selectpickerprimary').selectpicker({
          style: 'btn-primary',
          size: 4
      });
      $('.selectpickerinfo').selectpicker({
          style: 'btn-info',
          size: 4
      });
      $('.selectpickersuccess').selectpicker({
          style: 'btn-success',
          size: 4
      });
      $('.selectpickerwarning').selectpicker({
          style: 'btn-warning',
          size: 4
      });
      $('.selectpickerdanger').selectpicker({
          style: 'btn-danger',
          size: 4
      });

  });
</script>
@endsection
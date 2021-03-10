@extends('admin.layouts.admin')
@section('content')
<!-- End page sidebar wrapper -->
<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Edit Category </h2>
          <ol class="breadcrumb">
            <li> <a href="{{route('admin.dashboard')}}">Home</a> </li>
            <li> <a>Category</a> </li>
            <li class="active"> <strong> EDIT </strong> </li>
          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <!-- Basic Form start -->
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="widgets-container">
                <h5>Edit Category</h5>
                <hr>
                <form action="/admin/category/update-category/{{$category->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{$category->id}}">
                  @csrf
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input class="form-control m-t-xxs" value="{{$category->name}}" name="name" placeholder="Name" type="text">
                  </div>
              
                  <div class="form-group">
                  <label for="exampleInputEmail1">Description </label>
                  <textarea rows="10" cols="152" name="description" value="{{$category->description}}"> {{$category->description}} </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Featured Image </label>
                    <br>
                    <div class="fileinput fileinput-new" data-provides="fileinput"> <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                    <input type="file" name="image" value="{{$category->image}}" >
                    </span> <span class="fileinput-filename"></span> <a href="#" class="close fileinput-exists" data-dismiss="fileinput"
                    style="float: none">&times;</a> </div>
                 </div>
                 
                
                  
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
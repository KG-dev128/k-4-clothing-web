@extends('product.main')
@section('title','Product Create')
@section('pagedata')

<div class="clearfix">
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Add Product</div>
           <hr>
         <form method="POST" action="{{ url('proSave') }}" enctype="multipart/form-data">
              @csrf
           <div class="form-group">
            <label>Product Name</label>
            <input type="text" required name="Pro_Name" class="form-control form-control-rounded" placeholder="Enter Product Name">
           </div>
           
           <div class="form-group">
            <label>Product Quantity</label>
            <input type="number" required min="50" name="Pro_Qty" class="form-control form-control-rounded" placeholder="Enter Quantity">
           </div>
           <div class="form-group">
            <label>Product Price</label>
            <input type="number" required min="500" name="Pro_Price" class="form-control form-control-rounded" placeholder="Enter Product Price">
           </div>
           <div class="form-group">
            <label>Product Image</label>
            <input type="file" required name="Pro_Image" class="form-control form-control-rounded">
           </div>
           <div class="form-group">
            <label>Product Details</label>
            <input type="text" required name="Pro_Detail" class="form-control form-control-rounded" placeholder="Desciption">
           </div>
           <div class="form-group">
            <label>Select CatId</label>
            <select name="CatId" class="form-control form-control-rounded">
                <option value="">Please Select Category</option>
                    @foreach ($res as $user )
                    <option value="{{$user->cat_id}}">
                      {{$user->cat_name}} 
                      @endforeach
            </select>
           </div>
      <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label >I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Product</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div></div></div><!--End >
@endsection
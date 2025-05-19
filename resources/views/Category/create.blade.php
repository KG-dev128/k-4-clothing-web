@extends('category.main')
@section('title','Create')
@section('pagedata')

<div class="clearfix">
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Add Category</div>
           <hr>
            <form method="POST" action="{{url('catSave ')}}">
              @csrf
           <div class="form-group">
            <label for="input-6">Category Name</label>
            <input type="text" name="catname" class="form-control form-control-rounded" id="input-6" placeholder="Enter Category Name">
           </div>
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label for="user-checkbox2">I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Category</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div></div></div><!--End 

@endsection
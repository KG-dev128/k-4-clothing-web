@extends('Category.main');
@section('title');
@section('pagedata')
{{-- create form --}}
  <div class="row mt-3">
          <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Add New Category</div>
           <hr>
            <form>
           <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control form-control-rounded" required  placeholder="Enter Category Name">
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
      </div></div>
@endsection
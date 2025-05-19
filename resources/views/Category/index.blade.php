@extends('category.main')
@section('title','All Categories')
@section('pagedata')
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All categories</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Category id</th>
                      <th scope="col">Category name</th>
                      <th scope="col">Update Category </th>
                      <th scope="col">Delete Category</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($res as $user )
                    <tr>
                      <th scope="row">{{$user->cat_id}}</th>
                      <td>{{$user->cat_name}}</td>
                      <td><button type="button" class="btn btn-outline-success">Update</button></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete </button></td>
                    </tr>
                        
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

@extends('Product.main')
@section('title','All Products')
@section('pagedata')
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Products</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Product Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                      <th scope="col">Image</th>
                      <th scope="col">Details</th>
                      <th scope="col">Category</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($res as $user )
                    <tr>
                      <th scope="row">{{$user->Pro_Id}}</th>
                      <td>{{$user->Pro_Name}}</td>
                      <td>{{$user->Pro_Qty}}</td>
                      <td>{{$user->Pro_Price}}</td>
                      <td>{{$user->Pro_Image}}</td>
                      <td>{{$user->Pro_Detail}}</td>
                      <td>{{$user->CatId}}</td>
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

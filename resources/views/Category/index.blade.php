@extends('Category.main')
@section('title', 'Add Category')
@section('pagedata')

  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Categories</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Category ID</th>
                      <th scope="col">Category Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $res as $user)
                    
                    <tr>
                      <th scope="row">{{$user->cat_id}}</th>
                      <td>{{$user->cat_name}}</td>
                    </tr>
                    @endforeach
                   </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
@endsection
@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Admin Area
                    
                    <div class="menu">
                      <ul>
                        <li><i class="fas fa-qrcode"></i>
                          <a href="#">Dashboard</a>
                        </li>
                        <li>
                          <i class="fas fa-link"></i>
                          <a href="{{ route('admin.showuser') }}">User</a>
                        </li>
                        <li>
                          <i class="fas fa-stream"></i>
                          <a href="{{ URL::to('categories') }}">Category</a>
                        </li>
                       
                        </li>
                      </ul>
                      </div>

                      <div>
                        <div class="col-lg-12 margin-tb">
                          <div class="pull-left">
                              <h2>User List</h2>
                          </div>
                          <div class="pull-right">
                              <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
                          </div>
                      </div>
                        <table class="table table-hover">

                            <thead>
                        
                              <th>Id</th>
                        
                              <th>Name</th>
                        
                              <th>Email</th>

                              <th>Created Date</th>

                              <th>Login </th>
                        
                            </thead>
                        
                            <tbody>
                        @foreach($users as $user)
                        
                        
                        
                                <tr>
                        
                                  <td>{{$user->id}} </td>
                        
                                  <td>{{$user->name}} </td>
                        
                                  <td>{{$user->email}} </td>
                        
                                  <td>{{$user->created_at}} </td>
                                  
                                  <td><a class="btn btn-success" href="">Login as User</a>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        
                        </table>
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
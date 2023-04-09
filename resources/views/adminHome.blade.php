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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
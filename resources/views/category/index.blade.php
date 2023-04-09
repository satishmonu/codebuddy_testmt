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
                      <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Category List</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
                            </div>
                        </div>
                    </div>
                   
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                   
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Child Category</th>
                            <th >Action</th>
                        </tr>
                        <?php
                        $i=0;
                        ?>
                        @foreach ($category as $cat)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $cat->name }}</td>
                            <td> @if ($cat->children()->count() > 0)
                                <ul>
                                    @foreach ($cat->children as $child)
                                        <li>{{ $child->name }}</li>
                                    @endforeach
                                </ul>
                            @endif</td>
                            <td>
                                <form action="{{ route('categories.destroy',$cat->id) }}" method="POST">
                   
                                    <a class="btn btn-success" href="{{ route('categories.edit',$cat->id) }}">Edit</a>
                   
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



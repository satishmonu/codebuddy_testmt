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
            <h2>Edit Category</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
      <strong>Error</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('categories.update',$category->id) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Parent Category:</strong>
                <select class="form-control" name="parent_id">
                    <option value="">Select Category</option>
                    <?php
                    if(!empty($category_list)){
                       
                        foreach($category_list as $cat){
                            ?>
                            <option value="<?=$cat['id'];?>" {{ ( $category->parent_id == $cat['id']) ? 'selected' : '' }}><?=$cat['name'];?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
        
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



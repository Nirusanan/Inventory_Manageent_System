@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   

<form action="{{ route('products.store') }}" method="POST">
    @csrf
        
  
        <div class="form-group row">
            <label  class="col-sm-4 col-md-1 col-form-label"><strong>Name:</strong></label>
            <div class="col-sm-4">
                <input type="text" name="ProductName" class="form-control" placeholder="Name">
            </div>
        </div>
        
        
        <div class="form-group row">
            <label class="col-sm-4  col-md-1 col-form-label" for="inputState"><strong>Category:</strong> </label>
            <div class="col-sm-4">
                <select id="inputState" class="form-control" name="CategoryName">
                    <option selected>Grocery</option>
                    <option>Cosmetics</option>
                    <option>Drinks</option>
                    <option>Electronics</option>
                    <option>Foods</option>
                    <option>School Items</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label  class="col-sm-4  col-md-1 col-form-label"> <strong>Price:</strong> </label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="UnitPrice" placeholder="Price">
            </div>
        </div>

        <div class="form-group row col-sm-4 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


</form>
@endsection
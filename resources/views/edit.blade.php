@extends('layout')
   
@section('content')
    
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
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


    <form action="{{ route('products.update',$product->ProductName) }}" method="POST">
        @csrf
        @method('PUT')
  
        <div class="form-group row">
            <label  class="col-sm-4 col-md-1 col-form-label">Name: </label>
            <div class="col-sm-4">
                <input type="text" name="ProductName" value="{{ $product->ProductName }}" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="form-group row">
            <label  class="col-sm-4  col-md-1 col-form-label">Category: </label>
            <div class="col-sm-4">
                <input type="text" value="{{ $product->CategoryName }}" class="form-control" name="CategoryName" placeholder="category">
            </div>
        </div>

        <div class="form-group row">
            <label  class="col-sm-4 col-md-1 col-form-label">Price: </label>
            <div class="col-sm-4">
                <input type="number" name="UnitPrice" value="{{ $product->UnitPrice }}" class="form-control" placeholder="price">
            </div>
        </div>

        <div class="form-group row col-sm-4 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>


@endsection
@extends('layout')
 
@section('content')
    
    <div class="row text-center">
        <h2 > ABC Supermarket </h2>
            
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
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->ProductName) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->ProductName) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->ProductName) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-left">
        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
    </div>
  
    {!! $products->links() !!}
      
@endsection
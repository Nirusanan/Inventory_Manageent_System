@extends('layout')

@section('content')

<div class="row text-center">
    <h2> ABC Supermarket </h2>

</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="row">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ProductName</th>
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->ProductName }}</td>
            <td>{{ $product->CategoryName }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

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

    {{-- {!! $products->links() !!} --}}
</div>


<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> Mail</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('smtp.test-mail') }}">

                @csrf

                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Enter Recipient Mail ID">Enter Recipient Mail ID</label>
                            <input type="email" class="form-control" name="reciepient_email"
                                value="{{ old('reciepient_email') }}" required>
                            @error('reciepient_email')
                            <div class="error-msg">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Send Mail</button>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection
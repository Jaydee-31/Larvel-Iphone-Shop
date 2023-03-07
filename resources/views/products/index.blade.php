@extends('products.layout')
@section('content')

    <div class="section index">
    
        <h1>Product Management</h1>
        <hr>
        <div class="top-row">
            <div class="button pull-left">
                <a class="btn btn-info" href="{{ route('homepage.index') }}"> Home</a>
            </div>
            <div class="button pull-left">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
    
            <div class="button pull-right">
                <div class="search-container">
                    <form action="{{ route('products.index') }}" method="GET">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                {{-- <form action="{{ route('products.index') }}" method="GET">
                        <input type="text" name="search" id="search-input" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-primary">Search<i class="fas fa-search"></i></button>
                </form> --}}
                {{--     
                <form action="{{ route('products.index') }}" method="GET">
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form> --}}
            </div>
        </div>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if($products->isEmpty())
            <p>No products found.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Lead</th>
                            <th>Heading</th>
                            <th>Image</th>
                            <th>Desc</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->lead }}</td>
                                <td>{{ $product->heading }}</td>
                                <td>{{ $product->image }}</td>
                                <td>{{ $product->desc }}</td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">View</a>
                                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            <div class="pagination">
                {{ $products->links('pagination.custom') }}
            </div>
        @endif
    </div>

@endsection
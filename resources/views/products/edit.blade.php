@extends('products.layout')
@section('content')

    <div class="section edit">
        
        <h1>Edit Product</h1>
        <hr>
        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div> --}}
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="model">Lead</label>
                        <input type="text" class="form-control" id="model" name="model" value="{{ $product->model }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="storage">Heading</label>
                        <input type="text" class="form-control" id="storage" name="storage" value="{{ $product->storage }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="price">Description</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('products.layout')
@section('content')

    <div class="section show">

        <h1>Product Info</h1>
        <hr>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lead: </strong>
                    {{ $product->model }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Heading: </strong>
                    {{ $product->storage }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image: </strong>
                    {{ $product->image }}
                    <img src="{{ asset($product->image) }}" style=" margin-top: 15px; border-radius: 8px;  max-width: 100%;
                    height: auto;"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description: </strong>
                    {{ $product->price }}
                </div>
            </div>
        </div>
    </div>
@endsection
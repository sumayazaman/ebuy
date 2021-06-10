@extends('layouts.starlight')

@section('title', 'Product Edit')

@section('breadcrumb')
    @parent
    <a class="breadcrumb-item" href="{{ route('product.index') }}">Product</a>
    <span class="breadcrumb-item active">Edit - {{ $product -> product_name}}</span>
@endsection

@section('content')
<div class="row row-sm mg-t-20 justify-content-center">

    <div class="col-lg-8 mg-t-20 mg-lg-t-0">
        @component('partials.card')
            @slot('title','Edit Product')

            @slot('slot')
                <form action="{{ route('product.update', $product -> id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">                            
                        <label class="form-control-label">Category Name: </label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category -> id }}" @if ($category->id == $product->category_id)
                                    selected
                                @endif>{{ $category -> category_name }}</option>                                    
                            @endforeach
                        </select>

                        @error('category_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">                            
                        <label class="form-control-label">Product Name: </label>
                        <input class="form-control @error('product_name') is-invalid @enderror" type="text" name="product_name" value="{{ $product -> product_name }}">

                        @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">                            
                        <label class="form-control-label">Product Price: </label>
                        <input class="form-control @error('product_price') is-invalid @enderror" type="text" name="product_price" value="{{ $product -> product_price }}">

                        @error('product_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">                            
                        <label class="form-control-label">Product Quantity: </label>
                        <input class="form-control @error('product_quantity') is-invalid @enderror" type="text" name="product_quantity" value="{{ $product -> product_quantity }}">

                        @error('product_quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">                            
                        <label class="form-control-label">Product Short Description: </label>
                        <textarea name="product_short_description" class="form-control @error('product_long_description') is-invalid @enderror">{{ $product -> product_short_description }}</textarea>

                        @error('product_short_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">                            
                        <label class="form-control-label">Product Long Description: </label>
                        <textarea name="product_long_description" class="form-control @error('product_long_description') is-invalid @enderror">{{ $product -> product_long_description }}</textarea>

                        @error('product_long_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">                            
                        <label class="form-control-label">Product Alert Quantity: </label>
                        <input class="form-control @error('product_alert_quantity') is-invalid @enderror" type="text" name="product_alert_quantity" value="{{ $product -> product_alert_quantity }} ">

                        @error('product_alert_quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">                            
                        <label class="form-control-label">Product Photo: </label>
                        <input class="form-control @error('product_photo') is-invalid @enderror" type="file" name="product_photo">

                        @error('product_photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-info mg-r-5" type="submit">Add New Product</button>
                </form>
            @endslot
        
        @endcomponent
    </div>
</div>

@endsection
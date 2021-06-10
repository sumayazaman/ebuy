@extends('layouts.starlight')

@section('title', 'Product')

@section('breadcrumb')
    @parent
    <a class="breadcrumb-item active" href="{{ route('product.index') }}">Product</a>
@endsection

@section('content')
    <div class="sl-page-title">
        <h5>Product Page</h5>
    </div><!-- sl-page-title -->

    <div class="row row-sm mg-t-20">
        <div class="col-lg-8 mg-t-20 mg-lg-t-0">
            @component('partials.table')

                @slot('title', 'Product')

                @slot('thead')
                    <tr class="tx-10">
                        <th class="wd-10p pd-y-5">&nbsp;</th>
                        <th class="pd-y-5">Category Name</th>
                        <th class="pd-y-5">Product Name</th>
                        <th class="pd-y-5">Product Price</th>
                        <th class="pd-y-5">Available Quantity</th>
                        <th class="pd-y-5 tx-center">Actions</th>
                    </tr> 
                @endslot
                    
                @slot('tbody')
                    @forelse ($products as $product)                
                        <tr>
                            <td class="pd-l-20">
                                <img src="{{ asset('uploads/product')}}/{{ $product -> product_photo }}" class="wd-55" alt="Image">
                            </td>
                            <td>
                                <a href="" class="tx-inverse tx-14 tx-medium d-block">{{ $product -> category -> category_name}}</a>
                            </td>
                            <td>
                                <a href="" class="tx-inverse tx-14 tx-medium d-block">{{ $product -> product_name}}</a>
                                {{-- <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span> --}}
                            </td>
                            <td>
                                <span class="tx-inverse tx-14 tx-medium d-block">{{ $product -> product_price}}</span>
                            </td>
                            <td>
                                <span class="tx-inverse tx-14 tx-medium d-block">{{ $product -> product_quantity}}</span>
                            </td>
                            <td class="valign-middle tx-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('product.edit', $product -> id) }}" class="btn btn-primary" title="edit">
                                        <div><i class="icon ion-edit"></i></div>
                                    </a>
                                    <form action="{{ route('product.destroy', $product -> id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="delete"><i class="icon ion-trash-b"></i></button>
                                    </form>                                                                 
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="20">Nothing to show</td>
                        </tr>
                    @endforelse 
                @endslot
                @slot('footer')
                    
                @endslot
            @endcomponent
        </div>
        <div class="col-lg-4">
            @component('partials.card')
                @slot('title','Add Product')

                @slot('slot')
                    <form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">                            
                            <label class="form-control-label">Category Name: </label>
                            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                <option value=""> - -Choose One - -</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category -> id }}">{{ $category -> category_name }}</option>                                    
                                @endforeach
                            </select>

                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                            
                            <label class="form-control-label">Product Name: </label>
                            <input class="form-control @error('product_name') is-invalid @enderror" type="text" name="product_name">

                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                            
                            <label class="form-control-label">Product Price: </label>
                            <input class="form-control @error('product_price') is-invalid @enderror" type="text" name="product_price">

                            @error('product_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                            
                            <label class="form-control-label">Product Quantity: </label>
                            <input class="form-control @error('product_quantity') is-invalid @enderror" type="text" name="product_quantity">

                            @error('product_quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                            
                            <label class="form-control-label">Product Short Description: </label>
                            <textarea name="product_short_description" class="form-control @error('product_long_description') is-invalid @enderror"></textarea>

                            @error('product_short_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                            
                            <label class="form-control-label">Product Long Description: </label>
                            <textarea name="product_long_description" class="form-control @error('product_long_description') is-invalid @enderror"></textarea>

                            @error('product_long_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                            
                            <label class="form-control-label">Product Alert Quantity: </label>
                            <input class="form-control @error('product_alert_quantity') is-invalid @enderror" type="text" name="product_alert_quantity">

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
@extends('layouts.starlight')

@section('title', 'Category Edit')

@section('breadcrumb')
    @parent
    <a class="breadcrumb-item" href="{{ route('category.index') }}">Category</a>
    <span class="breadcrumb-item active">Edit - {{ $category -> category_name}}</span>
@endsection

@section('content')
<div class="row row-sm mg-t-20 justify-content-center">

    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
        @component('partials.card')
            @slot('title','Edit Category')

            @slot('slot')
                <form action="{{ route('category.update', $category -> id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        @include('partials.alert', ['key' => 'status', 'type' => 'success'])
                        
                        <label class="form-control-label">Category Name: </label>
                        <input class="form-control @error('category_name') is-invalid @enderror" type="text" name="category_name" value="{{ $category -> category_name}}">

                        @error('category_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label class="form-control-label">Category Old Image: </label>
                        <img src="{{ asset('uploads/category')}}/{{ $category -> category_image }}" class="form-control" alt="Image">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Category New Image: </label>
                        <input class="form-control @error('category_image') is-invalid @enderror" type="file" name="category_image">

                        @error('category_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <button class="btn btn-info mg-r-5" type="submit">Add New Category</button>
                </form>
            @endslot
        
        @endcomponent
    </div>
</div>

@endsection
@extends('layouts.starlight')

@section('title', 'Category')

@section('breadcrumb')
    @parent
    <a class="breadcrumb-item active" href="{{ route('category.index') }}">Category</a>
@endsection

@section('content')
    <div class="sl-page-title">
        <h5>Category Page</h5>
    </div><!-- sl-page-title -->
    <div class="row row-sm mg-t-20">

        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
          @component('partials.table')
              @slot('title', 'Category')

              @slot('thead')
                <tr class="tx-10">
                  <th class="wd-10p pd-y-5">Delete</th>
                  <th class="wd-10p pd-y-5">&nbsp;</th>
                  <th class="pd-y-5">Category Name</th>
                  <th class="pd-y-5 tx-center">Actions</th>
                </tr>
              @endslot
                
                @slot('tbody')
                    <form action="{{ route('category.selected') }}" id="selected" method="POST">
                        @csrf

                        @forelse ($categories as $category)                
                            <tr>
                                <td>
                                    <input type="checkbox" name="category_id[]" value="{{ $category->id }}">
                                </td>
                                <td class="pd-l-20">
                                    <img src="{{ asset('uploads/category')}}/{{ $category -> category_image }}" class="wd-55" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">{{ $category -> category_name}}</a>
                                    <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                                </td>
                                <td class="valign-middle tx-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('category.edit', $category -> id) }}" class="btn btn-primary btn-icon" title="edit">
                                            <div><i class="icon ion-edit"></i></div>
                                        </a>
                                        <a href="{{ route('category.destroy', $category -> id) }}" class="btn btn-danger btn-icon" title="delete" onclick="event.preventDefault();
                                            document.getElementById('destroy').submit();">
                                            <div><i class="icon ion-trash-b"></i></div>
                                        </a>                                                                    
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="20">Nothing to show</td>
                            </tr>
                        @endforelse               
                    </form>
                    @if (count($categories) > 0)
                        <form action="{{ route('category.destroy', $category -> id)}}" method="POST" id="destroy" class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endif                             
                @endslot
                    
                @slot('footer')
                    <div class="card-footer tx-12 pd-y-15 bg-transparent bd-t bd-b-200 justify-content-between d-flex">
                        <a href="{{ route('category.alldestroy')}}">Delete All Categories</a>
                        <button type="submit" form="selected">Delete selected Categories</button>
                    </div><!-- card-footer -->     
                @endslot
           @endcomponent
            </div><!-- col-6 -->
            
            <div class="col-lg-6">
                @component('partials.card')
                @slot('title','Add Category')

                @slot('slot')
                    <form action="{{ route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @include('partials.alert', ['key' => 'status', 'type' => 'success'])
                        
                        <div class="form-group">                            
                            <label class="form-control-label">Category Name: </label>
                            <input class="form-control @error('category_name') is-invalid @enderror" type="text" name="category_name">

                            @error('category_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Category Image: </label>
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
        </div><!-- col-6 -->
      </div>
@endsection
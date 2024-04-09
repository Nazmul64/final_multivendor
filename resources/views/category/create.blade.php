@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Category</div>
                @if ( session('name'))
                    <span class="alert alert-info">{{ session('name') }}</span>
                @endif
                <div class="card-body">
                   <form method="POST" action="{{ route('category.store') }}"enctype="multipart/form-data">
                    @csrf

                       <div class="mt-2">
                           <label>Name Category</label>
                           <input type="text"class="form-control  @error('name_category') is-invalid  @enderror "name="name_category" placeholder="Enter Your Category Name" >
                           @error('name_category')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Category Tagline</label>
                           <input type="text"class="form-control  @error('category_tagline') is-invalid  @enderror" name="category_tagline" placeholder="Enter Your Category Tagline">
                           @error('category_tagline')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Category photo</label>
                           <input type="file"class="form-control  @error('category_photo') is-invalid  @enderror" name="category_photo" >
                           @error('category_photo')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <button type="submit" class="btn btn-success mt-3">Add Category</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

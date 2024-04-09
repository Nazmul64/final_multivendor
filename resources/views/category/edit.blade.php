
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Category</div>
                  @if ( session('edit'))
                    <span class="alert alert-info">{{ session('edit') }}</span>
                  @endif
                <div class="card-body">
                   <form method="POST" action="{{ route('category.update',$category->id) }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                       <div class="mt-2">
                           <label>Status</label>
                           <select name="status" class="form-control">
                                <option value="show"{{( $category->status=='show')?'selected':'' }}>show</option>
                                <option value="hide"{{( $category->status=='hide')?'selected':'' }}>hide</option>
                           </select>
                       </div>
                       <div class="mt-2">
                           <label>Name Category</label>
                           <input type="text"class="form-control  @error('name_category') is-invalid  @enderror "name="name_category" placeholder="Enter Your Category Name"value="{{ $category->name_category }}" >
                           @error('name_category')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Category Tagline</label>
                           <input type="text"class="form-control  @error('category_tagline') is-invalid  @enderror" name="category_tagline" placeholder="Enter Your Category Tagline"value="{{ $category->category_tagline }}">
                           @error('category_tagline')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Old Category photo</label><br>
                            <img height="100" src="{{ asset('uploads/category_photos') }}/{{ $category->category_photo }}">
                       </div>
                       <div class="mt-2">
                           <label> New  Category photo</label>
                           <input type="file"class="form-control  @error('new_category_photo') is-invalid  @enderror" name="new_category_photo" >
                           @error('new_category_photo')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <button type="submit" class="btn btn-success mt-3">{{ $category->name_category }}</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

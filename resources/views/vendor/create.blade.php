@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Vendor</div>

                <div class="card-body">
                   <form method="POST" action="{{ route('vendor.store') }}"enctype="multipart/form-data">
                    @csrf

                       <div class="mt-2">
                           <label>Vendor Name</label>
                           <input type="text"class="form-control  @error('name_category') is-invalid  @enderror "name="" placeholder="Enter Your Category Name" >
                           @error('name_category')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Vendor phone<</label>
                           <input type="text"class="form-control  @error('category_tagline') is-invalid  @enderror" name="category_tagline" placeholder="Enter Your Category Tagline">
                           @error('category_tagline')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Vendor <address></address></label>
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

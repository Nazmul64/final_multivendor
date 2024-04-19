@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Vendor</div>

                <div class="card-body">
                   <form method="POST" action="{{ route('product.store') }}"enctype="multipart/form-data">
                    @csrf
                       <div class="mt-2">
                           <label>Category Name</label>
                            <select name="category_id"class="form-control">
                                <option value="">-Select One-</option>
                            @foreach ($active_category as $active_category )
                                <option value="{{$active_category->id}}">{{$active_category->name_category}}</option>
                            @endforeach
                           </select>
                       </div>
                       <div class="mt-2">
                           <label>Product Name</label>
                           <input type="text"class="form-control  @error('product_name') is-invalid  @enderror "name="product_name" placeholder="Enter Your product_name" >
                           @error('product_name')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Product Price</label>
                           <input type="number"class="form-control  @error('product_price') is-invalid  @enderror" name="product_price" placeholder="Enter Your product_price">
                           @error('product_price')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Product_short_description </label>
                           <textarea type="number"class="form-control  @error('product_short_description') is-invalid  @enderror" rows="2" name="product_short_description" placeholder="Enter Your Product_short_description"></textarea>
                           @error('product_short_description')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Product_full_description </label>
                           <textarea type="number"class="form-control  @error('product_full_description') is-invalid  @enderror" rows="5" name="product_full_description" placeholder="Enter Your product_full_description"></textarea>
                           @error('product_full_description')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Product Code </label>
                           <input type="text"class="form-control  @error('product_code') is-invalid  @enderror" name="product_code" placeholder="Enter Your product code">
                           @error('product_code')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> product photo</label>
                           <input type="file"class="form-control  @error('product_photo') is-invalid  @enderror" name="product_photo" placeholder="Enter Your product_photo">
                           @error('product_photo')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>

                       <button type="submit" class="btn btn-success mt-3">Add New Vendor</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

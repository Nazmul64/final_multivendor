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
                           <input type="text"class="form-control  @error('vendor_name') is-invalid  @enderror "name="vendor_name" placeholder="Enter Your vendor_name" >
                           @error('vendor_name')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Vendor Email</label>
                           <input type="email"class="form-control  @error('vendor_email') is-invalid  @enderror" name="vendor_email" placeholder="Enter Your vendor_email">
                           @error('vendor_email')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Vendor phone </label>
                           <input type="number"class="form-control  @error('vendor_phone') is-invalid  @enderror" name="vendor_phone" placeholder="Enter Your vendor_phone">
                           @error('vendor_phone')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <label> Vendor addres</label>
                           <input type="text"class="form-control  @error('vendor_photo') is-invalid  @enderror" name="vendor_address" placeholder="Enter Your vendor address">
                           @error('vendor_photo')
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

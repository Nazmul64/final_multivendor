@extends('layouts.app')
@section('form-data')
  <div class="page-title-right">
      <ol class="breadcrumb m-0">
         <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
         <li class="breadcrumb-item"><a href="{{ route('profilesetting') }}">Profile</a></li>
      </ol>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Profile</div>
                @if ( session('name'))
                    <span class="alert alert-info">{{ session('name') }}</span>
                @endif
                <div class="card-body">
                   <form method="POST"action="{{ route('profilesetting') }}"enctype="multipart/form-data">
                    @csrf
                       <div class="mt-2">
                           <label>Name</label>
                           <input type="text"class="form-control  @error('name') is-invalid  @enderror"name="name" value="{{ Auth::user()->name }}">
                           @error('name')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                        <div class="mt-2">
                           <img height="300" class="card-img-top" src="{{ asset('uploads/profile_photos/'.Auth::user()->profile_photo) }}" alt="Card image cap">
                           <input type="file"class="form-control  @error('profile_photo') is-invalid  @enderror" name="profile_photo">
                           @error('profile_photo')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <button type="submit" class="btn btn-success mt-3">updated</button>
                   </form>
                </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="card">
                <div class="card-header">changespassowrd</div>
                @if ( session('password'))
                    <span class="alert alert-info">{{ session('password') }}</span>
                @endif
                <div class="card-body">
                   <form method="POST"action="{{ route('changespassowrd') }}"enctype="multipart/form-data">
                    @csrf
                       <div class="mt-2">
                           <label>Old Password</label>
                           <input type="text"class="form-control  @error('old_password') is-invalid  @enderror"name="old_password" >
                           @error('old_password')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="mt-2">
                           <label> Password</label>
                           <input type="text"class="form-control  @error('password') is-invalid  @enderror"name="password" >
                           @error('password')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="mt-2">
                           <label> confirmation</label>
                           <input type="text"class="form-control  @error('confirmation') is-invalid  @enderror"name="confirmation" >
                           @error('confirmation')
                                 <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>

                       <button type="submit" class="btn btn-success mt-3">updated</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

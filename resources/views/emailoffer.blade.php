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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Email List</div>
                <div class="card-body">
                     <table class="table-bordered table">
                         <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                           @foreach ($email as $email)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $email->name }}</td>
                                    <td>{{ $email->email }}</td>
                                    <td>
                                      <a class="btn btn-info text-white"href="{{ route('singleoffer',$email->id)}}">Send</a>
                                   </td>
                                </tr>
                           @endforeach

                         </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

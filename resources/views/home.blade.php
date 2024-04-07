@extends('layouts.app')
@section('form-data')
  <div class="page-title-right">
      <ol class="breadcrumb m-0">
         <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
         <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
      </ol>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    <table class="table-bordered table">
                        <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Auth::user()->id }}</td>
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Category</div>
                <div class="card-body">
                     <table class="table-bordered table">
                          <thead>
                               <tr>
                                  <th>Category Name</th>
                                  <th>Category Tagline</th>
                                  <th>Category Photo</th>
                               </tr>
                          </thead>
                          <tbody>
                            @foreach ($details as  $details)
                              <tr>
                                 <td>{{ $details->name_category }}</td>
                                 <td>{{ $details->category_tagline }}</td>
                                 <td>
                                    <img height="100" src="{{ asset('uploads/category_photos') }}/{{ $details->category_photo  }}">
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

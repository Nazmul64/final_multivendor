@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Category</div>
                @if ( session('delete'))
                    <span class="alert alert-info">{{ session('delete') }}</span>
                @endif
                @if ( session('category'))
                    <span class="alert alert-info">{{ session('category') }}</span>
                @endif
                <div class="card-body">
                     <table class="table-bordered table">
                          <thead>
                               <tr>
                                  <th>Category Name</th>
                                  <th>Category Tagline</th>
                                  <th>Category Photo</th>
                                  <th>Action</th>
                               </tr>
                          </thead>
                          <tbody>
                            @foreach ($categories as $categories )
                                <tr>
                                  <td>{{ $categories ->name_category }}</td>
                                  <td>{{ $categories->category_tagline }}</td>
                                  <td>
                                     <img height="50" src=" {{ asset('uploads/category_photos') }}/{{ $categories ->category_photo }}">
                                  </td>
                                  <td class="d-flex">
                                     <a class="btn btn-success text-white mx-2" href="{{ route('category.edit',$categories->id) }}">Edit</a>
                                     <a class="btn btn-info text-white" href="{{ route('category.show',$categories->id) }}">details</a>
                                     <form method="POST"action="{{ route('category.destroy',$categories->id)  }}">
                                        @csrf
                                        @method('DELETE')
                                         <button type="submit" class="btn btn-danger text-white mx-2">delete</button>
                                     </form>
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

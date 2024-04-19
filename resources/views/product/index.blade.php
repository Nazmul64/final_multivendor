@extends('layouts.app')
@section('content')
<div class="container-fluid">
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
                     <table class="table-bordered table table-responsive">
                          <thead>
                               <tr>
                                  <th>product_name</th>
                                  <th>product_price</th>
                                  <th>product_short_description</th>
                                  <th>product_full_description</th>
                                  <th>product_code</th>
                                  <th>product_photo</th>
                                  <th>Action</th>
                               </tr>
                          </thead>
                          <tbody>
                            @foreach ($product as $product )
                                <tr>
                                  <td>{{ $product->product_name }}</td>
                                  <td>{{ $product->product_price }}</td>
                                  <td>{{ $product->product_short_description }}</td>
                                  <td>{{ $product->product_full_description }}</td>
                                  <td>{{ $product->product_code }}</td>
                                  <td>{{ $product->product_photo }}</td>
                                  {{-- <td>
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
                                  </td> --}}
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

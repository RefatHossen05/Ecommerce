@extends('backend.master') @section('content')

<h1 class="bg-info text-white text-center p-2">Product List</h1>
<a href="{{route('product.form')}}" class="btn btn-success mb-2">Add list</a>

<table class="table table-bordered">
    <thead>
        <tr class="text-center">
            <th>Product id</th>
            <th>Product Name</th>
            <th>Product Warenty</th>
            <th>Stock Status</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $viewdata)
        <tr>
            <td>{{$viewdata->id}}</td>
            <td>{{$viewdata->product_name}}</td>
            <td>{{$viewdata-> product_warenty}}</td>
            <td>{{ $viewdata->stock_status}}</td>
            <td class="text-center">
                <img src="{{url('/uploads/product/'.$viewdata->image)}}" alt="image not found" height="70px" width="70px" />
            </td>
            <td>
                <a href="{{route('product.edit',$viewdata->id)}}" class="btn btn-warning">Edit</a>
                <a href="{{route('product.delete',$viewdata->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@extends('backend.master')

@section('content')

<h1 class="bg-info text-white text-center p-2">Product List</h1>
<a href="{{route('product.form')}}" class="btn btn-success mb-2">Add list</a>


<table class="table table-bordered">
<thead>
    <tr>
        <th>Product id</th>
        <th>Product Name</th>
        <th>Product Warenty</th>
        <th>Stock Status</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</tbody>


</table>

@endsection
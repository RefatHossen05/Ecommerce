@extends('backend.master')

@section('content')
<a href="{{route('subcategory.form')}}" class="btn btn-success">Add list</a>

<h1 class="bg-warning text-center p-2 my-2">Sub Category List</h1>
<table class="table table-bordered">
<thead class="text-center">
    <tr>
        <th>Sub Category id</th>
        <th>Sub Category Name</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</tbody>


</table>

@endsection
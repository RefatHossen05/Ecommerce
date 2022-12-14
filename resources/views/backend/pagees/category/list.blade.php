@extends('backend.master')

@section('content')
<a href="{{route('category.form')}}" class="btn btn-success mb-2">Add list</a>

@if($message =session()->get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
</div>
@endif

@if($message =session()->get('danger'))
<div class="alert alert-danger alert-block">
    <strong>{{$message}}</strong>
</div>
@endif
 
<h1 class="bg-info text-white text-center p-2">Category List</h1>

<table class="table table-bordered">
<thead class="text-center">
    <tr>
        <th>Category id</th>
        <th>Category Name</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
@foreach($categoryies as $viewdata)
    <tr>
        <td>{{$viewdata->id}}</td>
        <td>{{$viewdata->category_name}}</td>
        <td class="text-center">
        <a href="{{route('category.delete',$viewdata->id)}}" class="btn btn-danger">Delete</a>
        <a href="{{route('category.edit',$viewdata->id)}}" class="btn btn-warning">Edit</a>
        </td>
    </tr>
</tbody>
@endforeach

</table>

@endsection
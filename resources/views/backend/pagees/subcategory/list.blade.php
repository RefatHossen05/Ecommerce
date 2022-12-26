@extends('backend.master')

@section('content')
<a href="{{route('subcategory.form')}}" class="btn btn-success">Add list</a>

<h1 class="bg-warning text-center p-2 my-2">Sub Category List</h1>

@if($message =session()->get('success'))
<div class="alert alert-success alert-block">
<strong>
 {{$message}}
</strong>
</div>
@endif


<table class="table table-bordered">
<thead class="text-center">
    <tr>
        <th>Sub Category id</th>
        <th>Sub Category Name</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
@foreach($subcategories as $key=>$subcategory)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$subcategory->subcategory_name}}</td>
        <td class="text-center">
            <a href="{{route('subcategory.edit',$subcategory->id)}}" class="btn btn-info">Edit</a>
            <a href="{{route('subcategory.delete', $subcategory->id)}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
@endforeach
</tbody>


</table>

@endsection
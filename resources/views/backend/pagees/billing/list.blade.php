@extends('backend.master')

@section('content')

<h1 class="bg-info text-white text-center p-2">Product List</h1>
<a href="{{route('billing.form')}}" class="btn btn-success mb-2">Add list</a>


<table class="table table-bordered">
<thead>
    <tr>
        <th>Bill id</th>
        <th>Bill Date</th>
        <th>Card type</th>
        <th>Card No.</th>
        <th>Delevery Date</th>
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
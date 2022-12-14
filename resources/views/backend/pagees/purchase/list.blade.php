@extends('backend.master')

@section('content')
<a href="{{route('purchase.form')}}" class="btn btn-success">Purchase list</a>

<h1 class="my-2 text-center">Purchase List</h1>

<table class="table table-bordered">
<thead>
    <tr>
        <th>Sl NO</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Status</th>
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
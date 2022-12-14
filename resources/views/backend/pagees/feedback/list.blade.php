@extends('backend.master')

@section('content')
<a href="{{route('feedback.form')}}" class="btn btn-success">Add list</a>

<h1 class="text-center">Customer Feedbacke List</h1>
<table class="table table-bordered">
<thead>
    <tr>
        <th>Feedbacke ID</th>
        <th>Customer ID</th>
        <th>Product ID</th>
        <th>Rating</th>
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
    </tr>
</tbody>


</table>

@endsection
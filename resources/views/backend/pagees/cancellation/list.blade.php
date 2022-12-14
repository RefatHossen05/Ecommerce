@extends('backend.master')

@section('content')
<a href="{{Route('create.form')}}" class="btn btn-success">Add list</a>

<h1 class="text-center">Cancellation List</h1>

<table class="table table-bordered table-striped">
<thead>
    <tr>
        <th>Sl NO</th>
        <th>Cancellation Date</th>
        <th>Refund Amount</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>


</tbody>


</table>

@endsection
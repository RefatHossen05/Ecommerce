@extends('backend.master')

@section('content')
<a href="{{route('customer.form')}}" class="btn btn-success my-2">Add list</a>


<table class="table table-bordered">
<thead>
    <tr>
        <th>Customer id</th>
        <th>Customer Name</th>
    </tr>
</thead>

<tbody>
@foreach($)
    <tr>
        <td></td>
        <td></td>
    </tr>
</tbody>


</table>

@endsection
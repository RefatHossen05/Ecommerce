@extends('backend.master')

@section('content')
<h1 class="text-center p-2">Add Cancellation Information</h1>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-lg-5 bg-secondary text-white py-2">
            <form action="" method="post">
            @csrf
            <div class="form-group mb-2">
            <label for="cancellation_date" class="mb-2">Cancellation Date</label>
            <input type="text" class="form-control" name="cancellation_date" placeholder="Plase Enter cancellation date" id="cancellation_date">
            </div>
            <div class="form-group mb-2">
            <label for="refund_amount" class="mb-2">Refund Amount</label>
            <input type="text" class="form-control" name="refund_amount" placeholder="Plase Enter refund amount" id="refund_amount">
            </div>
           


            <div class="form-group text-center mt-2">
                <button class="btn btn-success">submit</button>
            </div>

            

            </form>

           
        </div>
    </div>
            <div>
                <button onclick="window.print()" class="btn btn-warning">Print this page</button>
            </div>

</div>


@endsection
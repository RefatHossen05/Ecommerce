@extends('backend.master')

@section('content')
<h1 class="text-center p-2">Add Billing Information</h1>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-lg-5 bg-info text-white py-2">
            <form action="" method="post">
            @csrf
            <div class="form-group mb-2">
            <label for="bill_date" class="mb-2">Bill Date</label>
            <input type="text" class="form-control" name="bill_date" placeholder="Bill Date" id="bill_date">
            </div>
            <div class="form-group mb-2">
            <label for="card_type" class="mb-2">Card Type</label>
            <input type="text" class="form-control" name="card_type" placeholder="Card Type" id="card_type">
            </div>
            <div class="form-group mb-2">
            <label for="card_no" class="mb-2">Card No</label>
            <input type="text" class="form-control" name="card_no" placeholder="Card No" id="card_no">
            </div>
            <div class="form-group mb-2">
            <label for="delivary_date" class="mb-2">Delivery Date</label>
            <input type="text" class="form-control" name="delivary_date" placeholder="Delivery Date" id="delivary_date">
            </div>


            <div class="form-group text-center mt-2">
                <button class="btn btn-success">submit</button>
            </div>

            </form>
        </div>
    </div>
</div>


@endsection
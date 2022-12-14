@extends('backend.master')

@section('content')
<a href="{{url('feedbacklist')}}" class="btn btn-info">back</a>
<h1 class="text-center p-2">Add Product form</h1>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-lg-5 bg-warning text-white py-2">
            <form action="" method="post">
            @csrf
            <div class="form-group mb-2">
            <label for="cust_id" class="mb-2">Customer ID</label>
            <input type="text" class="form-control" name="product_name" placeholder="Plase Enter Customer ID" id="cust_id">
            </div>
            <div class="form-group mb-2">
            <label for="pro_id" class="mb-2">Product ID</label>
            <input type="text" class="form-control" name="product id" placeholder="Plase Enter Product ID" id="pro_id">
            </div>
            <div class="form-group mb-2">
            <label for="rating" class="mb-2">Rating</label>
            <input type="text" class="form-control" name="stock_status" placeholder="Plese Rating" id="rating">
            </div>
            <div class="form-group text-center mt-2">
                <button class="btn btn-success">submit</button>
            </div>

            </form>
        </div>
    </div>
</div>


@endsection
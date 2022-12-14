@extends('backend.master')

@section('content')
<h1 class="text-center p-2">Add Purchase Information</h1>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-lg-5 bg-secondary text-white py-2">
            <form action="" method="post">
            @csrf
            <div class="form-group mb-2">
            <label for="quantity" class="mb-2">Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="Plase Enter product name" id="quantity">
            </div>
            <div class="form-group mb-2">
            <label for="price" class="mb-2">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Plase Enter Product Warenty" id="price">
            </div>
            <div class="form-group mb-2">
            <label for="discount" class="mb-2">Discount</label>
            <input type="text" class="form-control" name="discount" placeholder="stock_status" id="discount">
            </div>
            <div class="form-group mb-2">
            <label for="status" class="mb-2">Status</label>
            <input type="text" class="form-control" name="status" placeholder="" id="status">
            </div>


            <div class="form-group text-center mt-2">
                <button class="btn btn-success">submit</button>
            </div>

            </form>
        </div>
    </div>
</div>


@endsection
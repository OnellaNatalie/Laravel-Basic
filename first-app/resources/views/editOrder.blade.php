@extends('layouts.app')
@section('content')
<div class="row m-5">
    <p class="text-xl-start fs-2">Edit Order</p>
<form method="POST" action="{{ url('/order/store') }}">
  @csrf

  <div class="mb-3 col-sm-4">
    <label for="item" class="form-label">Order Item</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter the Item name" required>
    
  </div>
  <div class="mb-3 col-sm-4">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="description" placeholder="Enter the Description">
  </div>
   <div class="mb-3 col-sm-2">
    <label class="form-label">Items Amount</label>
    <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter the Amount of Item" required>
  </div>
   <div class="mb-3 col-sm-2">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="price" id ="price" placeholder="Enter the Price" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Order</button>

</form>
</div>

@endsection
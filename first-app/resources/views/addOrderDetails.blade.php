
@extends('layouts.app')
@section('content')
<div class="row m-5">
    <p class="text-xl-start fs-2">Add Order</p>
<form>
  <div class="mb-3 col-sm-4">
    <label for="item" class="form-label">Order Item</label>
    <input type="text" class="form-control" id="orderItem" placeholder="Item name">
    
  </div>
  <div class="mb-3 col-sm-4">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="orderItemDescription" placeholder="Description">
  </div>
   <div class="mb-3 col-sm-2">
    <label for="Amount" class="form-label">Items Amount</label>
    <input type="text" class="form-control" id="oderItemsAmount" placeholder="Amount of Item">
  </div>
   <div class="mb-3 col-sm-2">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="orderItemPrice" placeholder="Price of the Item">
  </div>
  
  <button type="submit" class="btn btn-primary">Order</button>
</form>
</div>

@endsection
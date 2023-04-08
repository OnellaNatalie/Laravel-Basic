@extends('layouts.app')
@section('content')
<div class="row m-5">
    <p class="text-xl-start fs-2">Edit Order</p>
<form method="POST" action="{{ url('update') }}">
  {{ csrf_field() }}
    <div class="mb-3 col-sm-4">
    <label for="item" class="form-label">Invoice ID</label>
    <input type="text" class="form-control" name="id" id="id" value="{{ $order[0]->id }}" >
    
  </div>
  <div class="mb-3 col-sm-4">
    <label class="form-label">Order Item</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ $order[0]->name }}">
  </div>
  <div class="mb-3 col-sm-4">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="description" value="{{ $order[0]->description }}">
  </div>
   <div class="mb-3 col-sm-2">
    <label class="form-label">Items Amount</label>
    <input type="text" class="form-control" name="amount" id="amount" value="{{ $order[0]->amount }}">
  </div>
   <div class="mb-3 col-sm-2">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="price" id ="price" value="{{ $order[0]->price }}">
  </div>
  {{-- <a href="={{$orderEdit[0]->id}}" --}}
  <button type="submit" class="btn btn-primary">Update</button>
  {{-- </a> --}}
</form>
</div>

@endsection
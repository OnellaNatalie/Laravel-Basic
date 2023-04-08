@extends('layouts.app')
@section('content')
{{-- @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif --}}
   <p class="text-xl-start fs-2 container">View Order</p>
<div class="table-responsive card w-75 container">

  <table class="table">
   <thead class="card-header">
    <th>
     
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Amount</th>
      <th scope="col">Price</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
	</tr>
</th>
  <tbody>
    @foreach ($order as $order)
        
   
    <tr>
      
      <th scope="row" class="thead-light col-3">{{ $order->id }}</th>
      <td>{{ $order->name }}</td>
      <td>{{ $order->description }}</td>
      <td>{{ $order->amount }}</td>
      <td>{{ $order->price }}</td>
      <td>
        <ul class="nav nav-pills">
          <li class="nav-item">
          <a href="/edit?id={{$order->id}}"
          class="nav-link active">Edit
          </a>
        </li>
        </ul>
      
      </td>

      <td>
         <ul class="nav nav-pills">
          <li class="nav-item">
        <a href="/delete?id={{$order->id}}"
          class="nav-link active">Delete
          </a>
        </li>
        </ul>
      </td>
    </tr>
 
   @endforeach
  </tbody>
  </table>
</div>
  
@endsection
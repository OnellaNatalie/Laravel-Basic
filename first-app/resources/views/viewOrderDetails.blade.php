@extends('layouts.app')
@section('content')

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
	</tr>
</th>
  <tbody>
    @foreach ($orderView as $orders)
        
   
    <tr>
      
      <th scope="row" class="thead-light col-3">{{ $orders->id }}</th>
      <td>{{ $orders->name }}</td>
      <td>{{ $orders->description }}</td>
      <td>{{ $orders->amount }}</td>
      <td>{{ $orders->price }}</td>
      <td>
        <a href="/order/edit?id={{$orders->id}}"
        <button>Edit</button>
        </a></td>
    </tr>

   @endforeach
  </tbody>
  </table>
</div>
  
@endsection
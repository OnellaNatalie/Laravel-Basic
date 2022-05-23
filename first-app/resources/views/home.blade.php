@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Order Details add and view --}}
<div class="row m-5">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Order Details</h5>
        <p class="card-text"></p>
        <a href="{{ url('/addOrderDetails')}}" class="btn btn-primary">Order</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">View Order Details</h5>
        <p class="card-text"></p>
        <a href="{{ url('/order/show')}}" class="btn btn-primary">VIew</a>
      </div>
    </div>
  </div>
</div>
@endsection

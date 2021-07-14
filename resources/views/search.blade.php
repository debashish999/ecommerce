@extends('layouts.app')

@section('content')

<h2>result of the Products</h2>

<div class="col-sm-4">
    <a href="">Filter</a>




</div>

<div class="col-sm-4">
@foreach($products as $product)
  <div class="card">
    <a href="detail/{{ $product->id }}">
    <img class="card-img-top"  id="cardImage" src="/storage/{{ $product->gallery }}" >
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
      <p class="card-text">{{ $product->description }}</p>
      <p class="card-text"><small class="text-muted">${{$product->price}}</small></p>
      </a>
    </div>
  </div>
  @endforeach

</div>



@endsection
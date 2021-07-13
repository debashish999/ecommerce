@extends('layouts.app')

@section('content')
<div class="card-columns">
    @foreach($products as $product)
  <div class="card">
    <img class="card-img-top"  id="cardImage" src="/storage/{{ $product->gallery }}" >
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
      <p class="card-text">{{ $product->description }}</p>
      <p class="card-text"><small class="text-muted">${{$product->price}}</small></p>
    </div>
  </div>
  @endforeach
</div>





@endsection
<style>
#cardImage{
    width:50%;
}


</style>
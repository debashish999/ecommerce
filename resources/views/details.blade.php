@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-sm-6">
    <img  src= /storage/{{ $product->gallery}} />
</div>
<div class="col-sm-6">
        <h3>{{ $product->name }}</h3>
        <h3>{{ $product->description }}</h3>
        <h3>{{ $product->category }}</h3>
        <h3>Price: {{ $product->price }}</h3>
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-success">Buy Now</button>
        </div>

       


</div>





</div>
@endsection
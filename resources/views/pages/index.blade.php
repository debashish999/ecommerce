@extends('layouts.app')


@section('content')
<img src="/storage/{{ $logo }}" alt="logo" id="logo">

<img src="/storage/{{ $poster }}" alt="poster" id="poster">


<main role="main" class="inner cover">
        <h1 class="cover-heading"></h1>
        <p class="lead" id="head">As reliable as your family <br>to secure your life</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary" style="margin-left:20%">Learn more</a>
        </p>
      </main>
<div style="margin-top:500px;"></div>
@endsection


<style>
#head{
    color:white;
    margin-left:20%;
    font-size:3em;

}
#logo{
    position: absolute;
    width:10%;
    margin-top:-11%;
    z-index: 1;
}
#poster{
    position: absolute;
    height:600px;
    width:107.5%;
    margin-left:-20%;
    margin-top:-3.5%;
    z-index: -1;
}

body{
    overflow:auto;
}

</style>
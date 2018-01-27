@extends('layouts.app2')
@section('title', ' Skirts')



@section('content')

<div class="row mt-5">

    <div class="col-md-12 mt-3">
        <h2 class="text-center"><strong>WELCOME TO OUR ECOMMERCE</strong></h2>
        <p class="text-center"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut <br> labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation </strong></p>
    </div>

   <div class="col-md-12 mt-5">
       <h4 class="text-center"> SKIRTS PRODUCTS</h4>
       <hr class="mx-auto d-block" width="10%" style="border: 1.5px solid #ec0990;">
   </div>

@foreach($products as $product)

    <div class="col-md-3 mt-5">
       <div class="view hm-zoom">
           <a href="{{route('skirts.show', $product->slug)}}"><img src="/img/{{$product->slug}}.jpg" class="img-fluid" height="60"></a>
       </div><!-- end of zoom-->
       <div class="text-center"><a href="{{route('skirts.show', $product->slug)}}">{{$product->name}} </a></div>
       <p class="text-center"> {{$product->details}}</p>
       <p class="text-center">GHS {{$product->price}}</p>  
    </div><!-- end of col -->

@endforeach


</div><!-- end of row -->
@endsection
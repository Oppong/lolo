@extends('layouts.app2')
@section('title', $product->name)



@section('content')

<div class="row mt-5">

   <div class="col-md-12 mt-5">
       <h4 class="text-center"> PRODUCTS</h4>
       <hr class="mx-auto d-block" width="10%" style="border: 1.5px solid #ec0990;">
   </div>


    <div class="col-md-4 mt-5">
       <div class="view hm-zoom">
           <a href=""><img src="/img/{{$product->slug}}.jpg" class="img-fluid"></a>
       </div><!-- end of zoom-->
    </div><!-- end of col -->

     <div class="col-md-8 mt-5">
       <div class="text-center"><a href="">{{$product->name}} </a></div>
       <p class="text-center"> {{$product->details}}</p>
       <p class="text-center"> {{$product->description}}</p>
       <p class="text-center">GHS {{$product->price}}</p>  


      <form action="{{route('cart.store')}}" method="POST">
     
      {{csrf_field()}}

      <input type="hidden" name="id" value="{{$product->id}}">
      <input type="hidden" name="name" value="{{$product->name}}">
      <input type="hidden" name="price" value="{{$product->price}}">

      <div class="text-center"> <button class="btn btn-pink btn-sm">ADD TO CART</button></div>

      

   </form>
    </div><!-- end of col -->



  @include('partials.might')

</div><!-- end of row -->
@endsection
@extends('layouts.app')
@section('title', ' |Homepage')



@section('content')

  <div class="row mt-5">

    <div class="col-md-12 mt-5 mb-5">
        <h2 class="text-center">WELCOME TO OUR ECOMMERCE</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut <br> labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation</p>
    </div>
 
   </div><!-- end of row -->

@endsection


@section('cont')

<div class="container mt-5">
  <div class="row">
     <div class="col-md-6 mt-5 pt-5 pb-5">
            <div class="row">
              <div class="col-sm-6 pb-5">
                  <div class="text-center pb-2"><i class="fa fa-dashboard fa-2x"></i></div>
                  <h4 class="text-center">Unique Design</h4>
                  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
              </div>

              <div class="col-sm-6 pb-5">
                  <div class="text-center pb-2"><i class="fa fa-dashboard fa-2x"></i></div>
                  <h4 class="text-center">Unique Design</h4>
                  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
              </div>

              <div class="col-sm-6 pb-5">
                  <div class="text-center pb-2"><i class="fa fa-dashboard fa-2x"></i></div>
                  <h4 class="text-center">Unique Design</h4>
                  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
              </div>

              <div class="col-sm-6">
                  <div class="text-center pb-2"><i class="fa fa-dashboard fa-2x"></i></div>
                  <h4 class="text-center">Unique Design</h4>
                  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
              </div>
              
        </div>
     </div>        
<div class="col-md-6 mt-3  pt-5 pb-5">
        <h2 class="text-center pt-5"> Our Products </h2>
        <hr class="mx-auto d-block" width="10%" style="border: 1.5px solid #ec0990;">
        <h5 class="text-center"> Just a look woow </h5>
        <p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut <br> labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation <br> labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation</p>
        <div class="text-center pb-5"><button class="btn btn-pink btn-sm"> READMORE &raquo;</button></div>
    </div>

  </div><!--end of row -->
 </div>
@endsection


@section('mid')

  <div class="row">

   <div class="col-md-12 mt-5">
       <h4 class="text-center"> FEATURED PRODUCTS</h4>
       <hr class="mx-auto d-block" width="10%" style="border: 1.5px solid #ec0990;">
   </div>

@foreach($products as $product)
    <div class="col-md-3 mt-5">
       <div class="view hm-zoom">
           <a href="{{route('skirts.show', $product->slug)}}"><img src="/img/{{$product->slug}}.jpg" class="img-fluid" height="60"></a>
       </div><!-- end of zoom-->
       <div class="text-center"><a href="{{route('skirts.show', $product->slug)}}">{{$product->name}} </a></div>
       <p class="text-center">{{$product->details}}</p>
       <p class="text-center">GHS {{$product->price}}</p>
    </div><!-- end of col -->

@endforeach

 </div><!-- row -->
@endsection


@section('mid2')


<div class="mt-5">
    <h2 class="text-center text-white pt-5 ">Our Beautiful Products So Nice</h2>
     <p class="text-center text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut  <br> labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation</p>

    <div class="text-center"><button class="btn btn-pink btn-sm"> SKIRTS</button></div>
   
</div> 

@endsection



@section('mid3')

  <div class="row">

   <div class="col-md-12 mt-5">
       <h4 class="text-center"> NEW ARRIVALS </h4>
       <hr class="mx-auto d-block" width="10%" style="border: 1.5px solid #ec0990;">
   </div>

@foreach($products as $product)
    <div class="col-md-3 mt-5">
       <div class="view hm-zoom">
           <a href="{{route('skirts.show', $product->slug)}}"><img src="/img/{{$product->slug}}.jpg" class="img-fluid" height="60"></a>
       </div><!-- end of zoom-->
       <div class="text-center"><a href="{{route('skirts.show', $product->slug)}}">{{$product->name}} </a></div>
       <p class="text-center">{{$product->details}}</p>
       <p class="text-center">GHS {{$product->price}}</p>
    </div><!-- end of col -->

@endforeach
<!-- gallery -->

     <div class="col-md-12 mt-5">
       <h4 class="text-center"> Gallery </h4>
       <hr class="mx-auto d-block" width="10%" style="border: 1.5px solid #ec0990;">
   </div>

   <div class="col-6 col-md-3 mb-3">
      <div class="view hm-zoom">
        <img src="/img/g1.jpeg" class="img-fluid">
      </div>
   </div><!-- col -->
    <div class="col-6 col-md-3">
      <div class="view hm-zoom">
        <img src="/img/g2.jpg" class="img-fluid">
      </div>
   </div><!-- col -->
    <div class="col-6 col-md-3 mb-3">
      <div class="view hm-zoom">
        <img src="/img/g3.jpg" class="img-fluid">
      </div>
   </div><!-- col -->
    <div class="col-6 col-md-3">
      <div class="view hm-zoom">
        <img src="/img/g4.jpg" class="img-fluid">
      </div>
   </div><!-- col -->

 </div><!-- row -->
@endsection



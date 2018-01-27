
<div class="row mt-5">

	<div class="col-md-12">
		
		<h2 class="text-center"> Might Also like </h2>

	</div>

@foreach( $mights as $might)

    <div class="col-md-3 mt-5">
       <div class="view hm-zoom">
           <a href="{{route('skirts.show', $might->slug)}}"><img src="/img/{{$might->slug}}.jpg" class="img-fluid" height="60"></a>
       </div><!-- end of zoom-->
       <div class="text-center"><a href="{{route('skirts.show', $might->slug)}}" >{{$might->name}} </a></div>
       <p class="text-center"> {{$might->details}}</p>
       <p class="text-center">{{$might->price}}.00</p>
    </div><!-- end of col -->

@endforeach


</div><!-- end of row -->
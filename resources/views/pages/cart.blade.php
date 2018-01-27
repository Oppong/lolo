@extends('layouts.app2')
@section('title', ' Carts')


@section('content')


  
  <div class="col-md-12 mt-5">
       <h4 class="text-center"> YOUR SHOPPING CART</h4>
       <hr class="mx-auto d-block" width="10%" style="border: 1.5px solid #ec0990;">
   </div>

@include('partials.success')

        @if(count($errors) > 0 )

            <div class="alert alert-danger">
              
                <ul>
                  
                  @foreach($errors as $error)

                      <li>{{$error}}</li>

                  @endforeach

                </ul>

            </div>


        @endif

@if(Cart::count() > 0)

    <h4><span class="badge badge-pink pt-2 pb-2 pl-2 pr-2">{{ Cart::count()}} Product (s) added to cart</span> </h4>

@foreach(Cart::content() as $item)

   <table class="table">
   	
   		<thead>
   			<th> Product Image</th>
   			<th> Product Name</th>
   			<th> Product Details</th>
   			<th> Remove/Wishlist</th>
        <th>quantity</th>
   			<th> Product price</th>
   		</thead>
   		<tbody>
   			<tr>
   				<td><a href="{{route('skirts.show', $item->model->slug)}}"><img src="/img/{{$item->model->slug}}.jpg" class="img-fluid" width="100"></a></td>
   				<td><a href="{{route('skirts.show', $item->model->slug)}}">{{$item->model->name}}</a></td>
   				<td>{{$item->model->details}}</td>
   				


          <td> <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
            
              {{csrf_field()}}

              {{method_field('DELETE')}}

                <button class="btn btn-red btn-sm"><i class="fa fa-trash-o fa-2"></i></button>

          </form></td>

          <td>
            <select class="quantity" data-id="{{$item->rowId}}">

              @for ($i = 1; $i < 5 + 1 ; $i++ )

                   <option {{$item->qty == $i ? 'selected' : ''}}>{{$i}}</option>  
              @endfor 
            </select>

          </td>

   				<td>GHS{{$item->model->price}}.00</td>
   			</tr>
   		</tbody>


   </table><!-- end of cart table -->

@endforeach


 @else

      <h4 class="text-center">No products in cart</h4>
      <a href="/"><button class="btn btn-green btn-sm">CONTINUE SHOPPING</button></a>

   @endif 


<div class="row">
  <div class="col-md-6">
      <p class="text-center"> Your products subtotal {{ Cart::subtotal() }}</p>
      <p class="text-center"> Tax on products {{ Cart::tax()}}</p>
      <hr>
      <p class="text-center"> Total cost on products {{ Cart::total()}}</p>
      <hr>
  </div>

  <div class="col-md-6">
      <h2>Free Shipping</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure .</p>
  </div>

   <div class="text-center mt-3 col-md-6"><a href="{{route('checkout.index')}}"><button class="btn btn-pink btn-sm">PROCEED TO CHECKOUT</button></a></div>
    <div class="text-center mt-3 col-md-6"> <a href="/"><button class="btn btn-green btn-sm">CONTINUE SHOPPING</button></a></div>


  </div><!-- end of row --> 	


  


@include('partials.might')

@endsection


@section('extjs')

    <script src="{{asset('js/app/js')}}"></script>

    <script>
      
      const classname = document.querySelectorAll('.quantity')

      Array.from(classname).forEach(function(element) {

          element.addEventListener('change', function() {

            const id = element.getAttribute('data-id')

            axios.patch(`/cart/${id}`, {
             
                quantity: this.value 

             })
            .then(function (response) {
              //console.log(response);
              window.location.href = '{{route('cart.index')}}'

            })
            .catch(function (error) {
              console.log(error);
            });


          });
      });

    </script>

@endsection
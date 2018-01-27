@extends('layouts.app2')
@section('title', ' |Checkouts')



@section('content')



	<h2 class=" text-center mt-5"> Checkout</h2>

@include('partials.success')


	<div class="row">
		
		<div class="col-md-6">
			
			<h4> Your Order </h4>

		@foreach(Cart::content() as $item)

			<table class="table">

  				<tr>
  					<th scope="col" ><img src="/img/{{$item->model->slug}}.jpg" class="img-fluid" style="max-height: 50px;"></th>
  					<th scope="col"><strong>{{$item->model->name}}</strong></th>
  					<th scope="col"><strong>{{$item->model->details}} </strong></th>
  					<th scope="col"><strong>{{$item->model->price}} </strong></th>
  					<th scope="col"><strong>{{$item->qty}} </strong></th>

  				</tr>

  			</table>

  		@endforeach

  			 <p class="text-center"> Sub Total on ordered Items <strong> {{Cart::subtotal()}}</strong></p>
  	         <p class="text-center"> Tax on the ordered Items <strong> {{Cart::tax()}}</strong></p>
  	         <hr>
  	         <p class="text-center"> Total amount of Ordered Items <strong> {{Cart::total()}} </strong></p>
  	         <hr

  	         <a href="/shirts"><button class="btn btn-blue btn-sm"> Continue Shopping</button></a>

		</div><!-- end of col -->


 @if(count($errors) > 0 )

            <div class="alert alert-danger">
              
                <ul>
                  
                  @foreach($errors as $error)

                      <li>{{$error}}</li>

                  @endforeach

                </ul>

            </div>


        @endif


<div class="col-md-6">

<form action="{{route('checkout.store')}}" method="post" id="payment-form">

    {{csrf_field()}}

    <div class="form-group">

      <h4 class="text-center">Biling Address</h4>

        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" required>
      </div>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" required>
      </div> 

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}" required>
      </div>


      <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" id="city" class="form-control" value="{{old('city')}}" required>
      </div>

      <div class="form-group">
        <label for="province">province</label>
        <input type="text" name="province" id="province" class="form-control" value="{{old('province')}}" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}" required>
      </div>

      <div class="form-group">
        <label for="postalcode">Postal Code</label>
        <input type="text" name="postalcode" id="postalcode" class="form-control" value="{{old('postalcode')}}" required>
      </div>

       <h4 class="text-center">Payment Details</h4>

        <div class="form-group">
        <label for="card_name">Card Holder Name</label>
        <input type="text" name="name" id="card_name" class="form-control">
      </div>


     <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- a Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors -->
    <div id="card-errors" role="alert"></div>
    <br>

  <button class="btn btn-blue btn-sm" id="complete-order">Submit Payment</button>
</form>

</div><!-- end of col-->

		
	</div><!-- end of row -->


@endsection


@section('extjs')

		<script>
			
      // Create a Stripe client
var stripe = Stripe('pk_test_lmH4eo9wunIMeBEHSMR2JZSW');

// Create an instance of Elements
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    lineHeight: '18px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

//disabled button after submitting
  document.getElementById('complete-order').disabled = true;

  var options = {

    name:document.getElementById('card_name').value,
    address:document.getElementById('address').value,
    city:document.getElementById('city').value,
    province:document.getElementById('province').value,
    postalcode:document.getElementById('postalcode').value,
    phone:document.getElementById('phone').value,

  }

  stripe.createToken(card, options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;

      // Enable the submit button 

      document.getElementById('complete-order').disabled = false;


    } else {
      // Send the token to your server
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {

  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

    
  // Submit the form
  form.submit();
}

		</script>

@endsection
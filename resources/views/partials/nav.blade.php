<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ShopLucy @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.css')}}">
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- <link href="http://fonts.googleapis.com/css?family=Josefin+Sans+Std+Light"  
 rel="stylesheet" type="text/css" />-->

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<!-- main nav -->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="/" style="color: black;" > 
     <h2><strong>SHOPLUCY</strong></h2>
   </a>
  <!-- <i class="fa fa-twitter nav-link" style="color: #2199d8;"></i>
   <i class="fa fa-facebook nav-link" style="color: #2199d8;"></i>
   <i class="fa fa-whatsapp prefix nav-link" style="color: #00913e;"></i> -->

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-navicon" style="color: black;"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" >
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/" style="color: black;" ><small><strong>HOME </strong></small> <span class="sr-only">(current)</span></a>
 
 <a class="nav-item nav-link" href="/about" style="color: black;"><small><strong>ABOUT</strong></small></a>

 <a class="nav-item nav-link" href="/skirts" style="color: black;"><small><strong>SKIRTS</strong></small></a>

 <a class="nav-item nav-link" href="/tops" style="color: black;"><small><strong>TOPS</strong></small></a>

 <a class="nav-item nav-link" href="/skirts" style="color: black;"><small><strong>BEACHWEAR</strong></small></a>

 <a class="nav-item nav-link" href="/skirts" style="color: black;"><small><strong>SHOE</strong></small></a>

 <a class="nav-item nav-link" href="/skirts" style="color: black;"><small><strong>DRESSESS</strong></small></a>



 <a class="nav-item nav-link" href="/cart" style="color: black;"><small><strong>   CART 

      <span class="badge badge-success">{{Cart::instance('default')->count()}}</span> <i class="fa fa-cart-plus" aria-hidden="true"></i> </a>



   @guest
          <a class="nav-link" href="{{ route('login') }} " style="color: black;"><small><strong>LOGIN</strong></small></a>
          <a class="nav-link" href="{{ route('register') }}" style="color: black;"><small><strong>REGISTER</strong></small></a>
   @else   
<div class="dropdown">
  <a href="" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     {{ Auth::user()->name }} <span class="caret"></span>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
     <li>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>
    </li>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
@endguest

    </div>
  </div>
</nav>

<!-- end of navigation -->






   





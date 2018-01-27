@include('partials.nav')
@include('partials.banner')


    
        
                      
	<div class="container">
        @yield('content')
    </div>

   <div class="container-fluid" style=" background-color: #fafafa;">
      @yield('cont')
   </div>

   <div class="container">
        @yield('mid')
    </div>

   <div class="container">
        @yield('mid3')
    </div>

<div class="container-fluid" style=" background-color: #333;">
   @include('partials.footer')
</div>

  @yield('extjs')
    <!-- Scripts -->
     <script src="{{asset('/js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/mdb.min.js')}}"></script>
    <script src="{{asset('/js/shop.js')}}"></script>

</body>
</html>

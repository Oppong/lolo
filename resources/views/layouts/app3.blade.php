@include('partials.nav')

	<div class="container">
        @yield('content')
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

<div class="row mt-4"> 

@if(session()->has('success_message'))

	<div class="alert alert-success">
		
		{{session()->get('success_message')}}

	</div>

@endif

</div>
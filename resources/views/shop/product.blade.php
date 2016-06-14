@extends('layouts.shop')

@section('title')
	Product Name
@endsection



@section('style')
	<style type="text/css">
		.border{
			border:1px solid;
			padding: 0;
		}
		.padding{
			padding: 10px;
		}
		.mySlides {display:none}
	</style>
@endsection


@section('content')


<div class="row">

                  
				<div align="">
					@include('includes.details')
     		  		@include('includes.description')
  	    	  		@include('includes.releted')
				</div>

</div>
  




   <script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		     dots[i].className = dots[i].className.replace(" w3-border-red", "");
		  }
		  x[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " w3-border-red";
		}
	</script>




@endsection


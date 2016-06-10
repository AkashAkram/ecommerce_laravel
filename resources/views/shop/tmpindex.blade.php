@extends('layouts.shop')

@section('title')
	Home
@endsection

@section('content')
		
				
                       
<div class="row">
	
                <div class="col-md-12">
                                        
	                                               <!-- Slider -->
	              	@include('includes.tmpslider')
	              		
	        		<div class="clear"></div>

        		</div>

</div>

		            @include('includes.tmpnew')
	              	@include('includes.tmpfeatured')


@endsection
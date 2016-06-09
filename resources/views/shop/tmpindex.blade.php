@extends('layouts.shop')

@section('title')
	Home
@endsection

@section('content')
		
				<div class="col-md-3">
                    @include('includes.category')
                </div>
                       

                <div class="col-md-9">
                    
                
			       <div class="content_top">
			       	 	<span><a href="../">Home</a> \ </span>
			       </div>      
			       <div class="clear"></div>      
	                                               <!-- Slider -->
	              	@include('includes.tmpslider')
	                        <br>
	              	@include('includes.tmpnew')
	              	@include('includes.tmpfeatured')


	        		<div class="clear"></div>

        		</div>

        

@endsection
@extends('layouts.shop')

@section('title')
	Home
@endsection

@section('content')
		
		<div class="header_bottom_right">                   
             @include('includes.slider')
        </div>

        <div class="clear"></div>


        <div class="main">
        	<div class="content">
        		<div class="col-md-10 col-md-offset-1">
           
                @include('includes.new')           
                @include('includes.featured')

       			 </div>

        	</div>
        </div>

@endsection
@extends('layouts.shop')

@section('title')
	Product Name
@endsection

@section('content')
		
		    <div class="header_bottom_right">                   
                                               <!-- Slider -->
              @include('includes.slider')
              <br>
              @include('includes.new')
              @include('includes.featured')

        </div>

        <div class="clear"></div>



@endsection
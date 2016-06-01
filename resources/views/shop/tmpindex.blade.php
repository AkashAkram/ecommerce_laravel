@extends('layouts.shop')

@section('title')
	Category Name
@endsection

@section('content')
		
		    <div class="header_bottom_right">                   
                                               <!-- Slider -->
              @include('includes.slider')
                        <br>
              @include('includes.tmpnew')
              @include('includes.tmpfeatured')

        </div>

        <div class="clear"></div>

        

@endsection
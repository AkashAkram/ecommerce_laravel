@extends('layouts.shop')

@section('title')
  {{$category_tree[$len]->category}}
@endsection

@section('content')
        <div class="col-md-3">
            @include('includes.category')
        </div>

        <div class="col-md-9">
          <div class="content_top">
            <span>
              <a href="../">Home</a> \ 
            </span>
              @foreach($category_tree as $tree)
                <span><a href="../category_id/{{ $tree->id}}">{{ $tree->category }}</a> \ </span>
              @endforeach                    <!-- Slider -->
   
          </div>              
                @include('includes.slider')
                    <br>
                @include('includes.new')
                @include('includes.featured')
             
          <div class="clear"></div>

        </div>
    			       
        

@endsection
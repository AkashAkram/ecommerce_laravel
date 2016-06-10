@extends('layouts.shop')

@section('title')
  {{$category_tree[$len]->category}}
@endsection

@section('content')
      <div class="row">
        @if(count($sub)>0)
        <div class="col-md-3">
            @include('includes.category')
        </div>
      @endif
      @if(count($sub)>0)
        <div class="col-md-9">
      @else
        <div class="col-md-12">
      @endif
          <div class="content_top">
            <span>
              <a href="../">Home</a> \ 
            </span>
              @foreach($category_tree as $tree)
                <span><a href="../category_id/{{ $tree->id}}">{{ $tree->category }}</a> \ </span>
              @endforeach                    <!-- Slider -->
   
          </div>              
                @include('includes.slider')
  
          <div class="clear"></div>

        </div>

        

      </div>
                @include('includes.new')
                      
                @include('includes.featured')
@endsection
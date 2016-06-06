@extends('layouts.shop')

@section('title')
  {{$category_tree[0]->category}}
@endsection

@section('content')
    
              @foreach($category_tree as $tree)
                  <span><a href="../category_id/{{ $tree->id}}">{{ $tree->category }}</a> \ </span>
              @endforeach                    <!-- Slider -->

              @include('includes.slider')
                        <br>
              @include('includes.new')
              @include('includes.featured')


        <div class="clear"></div>

        

@endsection
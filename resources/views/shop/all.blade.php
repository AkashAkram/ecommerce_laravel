@extends('layouts.shop')

@section('title')
	All in  {!! $category_tree[$len]->category !!}
@endsection


@section('content')

					<div class="content_top">
                        <div class="heading">
                            <h4> Full collection of {!! $category_tree[$len]->category !!}</h4>

                            <span>
                              <a href="../">Home</a> \ 
                            </span>
                              @foreach($category_tree as $tree)
                                <span><a href="../category_id/{{ $tree->id }}">{{ $tree->category }}</a> \ </span>
                              @endforeach
                        </div>
                        
                        <div class="clear"></div>
                    </div>


                    <div class="row" align="center">
                        @foreach($products as $n)
                            <div class="panel-grid" align="">
                                    
                                    <div class="panel-grid-title">
                                        <a href="../product_id/{{$n->id}}"><img src="../images/{{ $n->default_image }}" alt="" />
                                    {{ substr($n->product_name,0,20) }}...
                                        </a>
                                    </div>
                                        <div class="price-details">
                                            
                                            <div class="rupees">
                                            ${{ $n->price }}
                                            </div>
                                        
                                            <div class="add-cart">                              
                                                <h4><a href="../product_id/{{$n->id}}">See details</a></h4>    
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                             
                            </div>
                        @endforeach
                    </div>




@endsection
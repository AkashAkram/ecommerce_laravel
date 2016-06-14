                    <div class="content_top">
                        <div class="heading">
                            <h3>New Products</h3>
                        </div>
                        <div class="see">
                            <p>
                                <a href="../all_in_category/{!! $category_tree[$len]->id !!}">See all Products</a>
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="row panel-wrap">
                        @foreach($n_product as $n)
                            <div class="panel-grid" align="center">
                                    
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

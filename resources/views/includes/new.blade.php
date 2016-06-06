


                     <div class="content_top">
                        <div class="heading">
                            <h3>New Products</h3>
                        </div>
                        <div class="see">
                            <p><a href="#">See all Products</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="panel-wrap row" align="center">

                        @foreach($n_product as $n)
                            <div class="panel-grid">
                                    <a href=""><img src="../images/{{ $n->default_image }}" alt="" />
                                    {{ substr($n->product_name,0,50) }}...
                                    </a>
                                    
                                        <div class="price-details">
                                            <div class="price-number">
                                            <span class="rupees">${{ $n->price }}</span>
                                            </div>
                                            <div class="add-cart">                              
                                                <h4><a href="preview.html">Add to Cart</a></h4>    
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                             
                            </div>
                        @endforeach
                    </div>





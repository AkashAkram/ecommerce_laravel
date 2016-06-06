


                     <div class="content_top">
                        <div class="heading">
                            <h3>Featured Products</h3>
                        </div>
                        <div class="see">
                            <p><a href="#">See all Products</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="panel-wrap row" align="center">

                        @foreach($f_product as $f)
                            <div class="panel-grid">
                                    <a href=""><img src="../images/{{ $f->default_image }}" alt="" />
                                    {{ substr($f->product_name,0,50) }}...
                                    </a>
                                    
                                        <div class="price-details">
                                            <div class="price-number">
                                                <span class="rupees">${{ $f->price }}</span>
                                            </div>
                                            <div class="add-cart">                              
                                                <h4><a href="preview.html">Add to Cart</a></h4>    
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                             
                            </div>
                        @endforeach
                    </div>





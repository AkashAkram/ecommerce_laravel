


 <div class="content_bottom">
                        <div class="heading">
                            <h3>Featured Products</h3>
                        </div>
                        <div class="see">
                            <p><a href="#">See all Products</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="section group">

                        @foreach($f_product as $n)
                            <div class="grid_1_of_4 images_1_of_4 ">
                                    <a href=""><img src="../images/{{ $n->default_image }}" alt="" /></a>
                                    <h2>{{ substr($n->product_name,0,50) }}...</h2>
                                        <div class="price-details">
                                            <div class="price-number">
                                                <p><span class="rupees">{{ $n->price }}</span></p>
                                            </div>
                                            <div class="add-cart">                              
                                                <h4><a href="preview.html">Add to Cart</a></h4>    
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                             
                            </div>
                        @endforeach
                    </div>





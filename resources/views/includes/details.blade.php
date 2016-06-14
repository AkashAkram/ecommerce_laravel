				


				<div class="col-md-1"></div>
				<div class="col-md-4 ">				

					<div class="w3-content" style="max-width:1200px">
					@foreach($product_images as $img)
						  <img class="mySlides" src="../images/{!! $img->image_name !!}" style="width:100%">
					@endforeach
						  
						  <div class="w3-row-padding w3-section">
							    <div class="w3-col s4">
							      <img class="demo w3-border w3-hover-shadow" src="../images/{!! $product_images[0]->image_name !!}" style="width:100%" onclick="currentDiv(1)">
							    </div>
							    <div class="w3-col s4">
							      <img class="demo w3-border w3-hover-shadow" src="../images/{!! $product_images[1]->image_name !!}" style="width:100%" onclick="currentDiv(2)">
							    </div>
							    <div class="w3-col s4">
							      <img class="demo w3-border w3-hover-shadow" src="../images/{!! $product_images[2]->image_name !!}" style="width:100%" onclick="currentDiv(3)">
							    </div>
						  </div>
					</div>

						  
				</div>






					<div class="col-md-6 ">
					
						<h2> {{ $product->product_name }}  </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>					
						<div class="price">
							<p>Price: <span>${{$product->price}}</span></p>
						</div>
						<div class="available">
							<p>Available Options :</p>
						<ul>
							<li>Color:
								<select>
								<option>Silver</option>
								<option>Black</option>
								<option>Dark Black</option>
								<option>Red</option>
							</select></li>
							<li>Size:<select>
								<option>Large</option>
								<option>Medium</option>
								<option>small</option>
								<option>Large</option>
								<option>small</option>
							</select></li>
							<li>Quality:<select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select></li>
						</ul>
						</div>
						<div class="share-desc">
							<div class="share">
								<p>Share Product :</p>
								<ul>
							    	<li><a href="#"><img src="../images/facebook.png" alt="" /></a></li>
							    	<li><a href="#"><img src="../images/twitter.png" alt="" /></a></li>					    
					    		</ul>
							</div>
							<div class="button"><span><a href="#">Add to Cart</a></span></div>					
							<div class="clear"></div>
						</div>
						 <div class="wish-list">
						 	<ul>
						 		<li class="wish"><a href="#">Add to Wishlist</a></li>
						 	    <li class="compare"><a href="#">Add to Compare</a></li>
						 	</ul>
						 </div>

					</div>


			<div class="clear"></div>



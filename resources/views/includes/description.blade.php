
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Description</li>
					<li>Specification</li>
					<li>Product Reviews</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
					{!! $product->description !!}
					</div>

				 <div class="product-tags">
					{!! $product->product_spec !!}
			    </div>	

				<div class="review">
					<h4>Product Rating: </h4>
					 <ul>
					 	<li>Price :<a href="#"><img src="../images/price-rating.png" alt="" /></a></li>
					 	<li>Value :<a href="#"><img src="../images/value-rating.png" alt="" /></a></li>
					 	<li>Quality :<a href="#"><img src="../images/quality-rating.png" alt="" /></a></li>
					 </ul>
					 <br>
					 <H4>User Reviews for this product: </H4><br><br>

					 @foreach($reviews as $review)
					 	<article>
					 		<h2 class="red">{!! $review->nickname !!}</h2>
					 		<h4>{!! $review->summary !!}</h4>
					 		"{!! $review->details !!}"<br><br>
					 	</article>
					 @endforeach

				  <div class="your-review">
				  	 <h3>How Do You Rate This Product?</h3>
				  	  <p>Write Your Own Review?</p>
				  	  <form action="../product_id/{!! $product->id !!}/review" method="post">
				  	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
					    	<div>
						    	<span><label>Nickname<span class="red">*</span></label></span>
						    	<span><input type="text" name="nickname"></span>
						    </div>
						    <div><span><label>Summary of Your Review<span class="red"></span></label></span>
						    	<span><input type="text" name="summary"></span>
						    </div>						
						    <div>
						    	<span><label>Review<span class="red">*</span></label></span>
						    	<span><textarea name="details"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="SUBMIT REVIEW"></span>
						  </div>
					    </form>
				  	 </div>				
				</div>
			</div>
		 </div>
	 </div>




	<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>

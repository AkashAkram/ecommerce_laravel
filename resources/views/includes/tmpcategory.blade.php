                 
                <div class="categories">
                  <ul class="navp nav-ills nav-stacked">
                    <h3>Categories</h3>
                      @foreach($categories as $cat)
                        @if( $cat->parent_id == 0 )
                          	<li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" 
                              href="../category_id/{{ $cat->id }}">{{ $cat->category }}<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                @foreach($categories as $subcat1)
                                  @if( $cat->id == $subcat1->parent_id )
                                    <li class="divider">
    				                          <a href="../category_id/{{ $subcat1->id }}">{{ $subcat1->category }}</a>
				                            </li>
				                          @endif 	
				                        @endforeach
	                        	    </ul>
                     		   </li>
                        @endif
                      @endforeach
                  </ul>
                </div>                  

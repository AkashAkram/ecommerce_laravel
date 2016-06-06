
                                 
                <div class="categories">
                  <ul class="base">
                    <h3>Categories</h3>
                      @foreach($categories as $cat)
                        @if( $cat->parent_id == 0 )
                            <li class="baselist">
                              <a class="" data-toggle="" 
                              href="../category_id/{{ $cat->id }}">{{ $cat->category }}<b class="caret"></b></a>
                                <ul class="sub1">
                                @foreach($categories as $subcat1)
                                  @if( $cat->id == $subcat1->parent_id )
                                    <li class="sublist1">
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

                                 
                <div class="categories">
                  <ul class="base">
                  
                    <h3>{{$category_tree[0]->category}}</h3>
                  
                      @foreach($sub as $cat)
                        
                            <li class="baselist">
                              <a class="" data-toggle="" 
                              href="../category_id/{{ $cat->id }}">{{ $cat->category }}</a>
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
                       
                      @endforeach
                  </ul>
                </div>                  
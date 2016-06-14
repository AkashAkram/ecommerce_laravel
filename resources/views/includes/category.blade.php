
                                 
                <div class="categories">
                  <ul class="base">
                  
                    <h3>{{$category_tree[0]->category}}</h3>
                  
                      @foreach($sub as $cat)
                        
                            <li class="baselist">
                              <a class="" data-toggle="" 
                              href="../category_id/{{ $cat->id }}">{{ $cat->category }}</a>
                           </li>
                       
                      @endforeach
                  </ul>
                </div>                  
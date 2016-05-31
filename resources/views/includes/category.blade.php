                 
                <div class="categories">
                  <ul>
                    <h3>Categories</h3>
                      @foreach($categories as $cat)
                        <li><a href="">{{ $cat->name }}</a></li>
                      @endforeach
                  </ul>
                </div>                  
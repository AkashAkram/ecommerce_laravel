
            <div class="headertop_desc">

                <div class="call">
                    <p>
                    <span>Need help?</span> call us <span class="number">1-22-3456789</span>
                    </span>
                    </p> 
                </div>
        



                    <div class="account_desc">
                        <ul>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>



                    <div class="clear"></div>
            </div>



            <div class="header_top">
                <div class="logo">
                    <a href="../">Electro Mart</a>
                </div>
                <div class="cart">
                   <p>Welcome to our Online Store! <span>Cart:</span>
                   <div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
                    <ul class="dropdown">
                            <li>you have no items in your Shopping cart</li>
                            <li><a href="">Item-1</a></li>
                            <li><a href="">Item-2</a></li>
                            <li><a href="">Item-3</a></li>
                    </ul>
                   </div>
                   </p>
              </div>
              
            <div class="clear"></div>


            </div>



            <div class="header_bottom margin-bottom-10">
                <div class="menu">
                    <ul class="mymenu">
    
                        @foreach($categories as $cat)
                        @if( $cat->parent_id == 0 )
                        <li><a class="" href="../category_id/{{ $cat->id }}">{{ $cat->category }}<b class="caret"></b></a>
                        </li>
                        @endif
                        @endforeach
                        <li>

                    </ul>
                </div>
                    <div class="search_box">
                        <form>
                            <input type="text" class="" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                        </form>
                    </div>
                        </li>
                     
                
                <div class="clear"></div>
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('.mymenu li a').click(function(){
                        $('.mymenu li a').removeClass("active");
                        $(this).addClass("active");
                    });
                });
            </script>
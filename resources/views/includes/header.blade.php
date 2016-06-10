
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
                    <a href="../">Amar E-Commerce Site</a>
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
                    <ul>
                        <li><a class="active" href="../">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                         
                    </ul>
                </div>
                <div class="search_box">
                        <form>
                            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                        </form>
                    </div>
                <div class="clear"></div>
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('a').click(function(){
                        $('a').removeClass("active");
                        $(this).addClass("active");
                    });
                });
            </script>
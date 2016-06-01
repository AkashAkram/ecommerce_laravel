                         <div class="">                        
                             <div id="">
                                <div id="">


                                <div class="container">
   <div id="content-slider">
      <div id="slider">  <!-- Slider container -->
         <div id="mask" align="center">  <!-- Mask -->

         <ul >
         @for($i=0;$i < 5;$i++)
         @if($i==0)
         <li id="first" class="firstanimation">  <!-- ID for tooltip and class for animation -->
         @elseif($i==1)
         <li id="second" class="secondanimation">
         @elseif($i==2)
         <li id="third" class="thirdanimation">
         @elseif($i==3)
         <li id="fourth" class="fourthanimation">
         @elseif($i==4)
         <li id="fifth" class="fifthanimation">
         
         @endif
         <a href="#"> <img src="../images/feature-pic4.jpg" width="380" height="320" alt="Cougar"/> </a>
         <div class="tooltip"> <h1></h1> </div>
         </li>
         @endfor


         </ul>

         </div>  <!-- End Mask -->
         <div class="progress-bar"></div>  <!-- Progress Bar -->
      </div>  <!-- End Slider Container -->
   </div>
</div>
                                  
                                
                                                                                  
                             </div>     
                        </div>
                     <div class="clear"></div>                         
                 </div>
                                                 

   <div id="content-slider">
      <div id="slider" align="center">  <!-- Slider container -->
         <div id="mask">  <!-- Mask -->

         <ul >
         @for($i=0;$i < 5;$i++)
         @if($i==0)
         <li id="first" class="firstanimation">  <!-- ID for tooltip and class for animation -->
            <a href="#"><img src="../images/feature-pic1.jpg" width="380" height="320" alt="Cougar"/> </a>
            <div class="tooltip"> <h1></h1> </div>
         </li>
         @elseif($i==1)
         <li id="second" class="secondanimation">
            <a href="#"><img src="../images/feature-pic2.jpg" width="380" height="320" alt="Cougar"/> </a>
         <div class="tooltip"> <h1></h1> </div>
         </li>
         @elseif($i==2)
         <li id="third" class="thirdanimation">
            <a href="#"><img src="../images/feature-pic3.jpg" width="380" height="320" alt="Cougar"/> </a>
         <div class="tooltip"> <h1></h1> </div>
         </li>
         @elseif($i==3)
         <li id="fourth" class="fourthanimation">
            <a href="#"><img src="../images/feature-pic4.jpg" width="380" height="320" alt="Cougar"/> </a>
         <div class="tooltip"> <h1></h1> </div>
         </li>
         @elseif($i==4)
         <li id="fifth" class="fifthanimation">
            <a href="#"><img src="../images/new-pic1.jpg" width="380" height="320" alt="Cougar"/> </a>
         <div class="tooltip"> <h1></h1> </div>
         </li>
         
         @endif
         
         @endfor


         </ul>

         </div>  <!-- End Mask -->
         <div class="akash-progress-bar"></div>  <!-- Progress Bar -->
      </div>  <!-- End Slider Container -->
   </div>
                                  
         
                     <div class="clear"></div>                         

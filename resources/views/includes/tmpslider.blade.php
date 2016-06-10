                                                 

   <div id="">
      <div id="" align="center">  <!-- Slider container -->

      <div class="" style="width:100%; height:250px">
  <img class="mySlides" src="../images/feature-pic1.jpg" height="100%">
  <img class="mySlides" src="../images/feature-pic2.jpg" height="100%">
  <img class="mySlides" src="../images/feature-pic3.jpg" height="100%">
</div>



         <div class="akash-progress-bar"></div>  <!-- Progress Bar -->
      </div>  <!-- End Slider Container -->
   </div>
                                  
         
  <div class="clear"></div>                         


<script type="text/javascript">
   
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}


</script>
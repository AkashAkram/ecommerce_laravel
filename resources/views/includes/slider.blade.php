                                                 
  <!-- Slider container -->
<div align="center">
  
      <div align="center" style="width:100%; height:250px">
        @for($i=0;$i < 4;$i++)
        <img class="mySlides" src="../images/new-pic1.jpg" height="100%">
        @endfor
      </div>



         <div class="akash-progress-bar"></div>  <!-- Progress Bar -->
       <!-- End Slider Container -->

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
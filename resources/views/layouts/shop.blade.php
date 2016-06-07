<!DOCTYPE HTML>
<head>
<title>@yield('title') :: E-Commerce Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/slider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/akash.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"
    
    @yield('style')

 
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript" src="../js/startstop-slider.js"></script>

</head>

<body>
    <div class="wrap">        
        @include('includes.header') 
        <div class="row">
            
             
                <div class="col-md-3">
                    @include('includes.category')
                </div>
                       

                <div class="col-md-9">
                    @yield('content')
                </div>
                
            
        </div>   
    </div>

               <div class="footer">
                    @include('includes.footer')
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {          
                        $().UItoTop({ easingType: 'easeOutQuart' });                    
                    });
                </script>
                <a href="#" id="toTop"><span id="toTopHover"> </span></a>
    
</body>
</html>


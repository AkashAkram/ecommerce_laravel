<!DOCTYPE HTML>
<!DOCTYPE HTML>
<head>
<title>@yield('title') :: E-Commerce Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="../csss/global.css" rel="stylesheet" media="all">
    <link href="../css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>

    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/slider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/akash.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    @yield('style')

    <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript" src="../js/easyResponsiveTabs.js"></script>
    <script type="text/javascript" src="../js/dropdown.js"></script>
    <script type="text/javascript" src="../js/myslider.js"></script>

    


</head>

<body>
   
    <div class="wrap">        
        <div class="header">
            @include('includes.header')
        </div> 
                    
            @yield('content')
                       
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


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NAU BOOK MART</title>
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/datepicker.css" rel="stylesheet">
        <link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">      
    </head>
    <body>
    	<!-- 
    	Main Menu Module
    	-->
        <?php include ("moduls/mainmenu.php"); ?>
        <div id="mynav" class="row">
                <?php include("moduls/carouselIndex.php"); ?>
            <div class="col-md-1 col-lg-1 hidden-sm test"></div>    <!-- leftPadding -->
            <div id="content" class="col-sm-10 col-xs-10 col-md-10 "> <!-- content -->
                <div class="row" style="text-align:center;color:#2c3e50;padding-bottom:25px">
                    <div class="col-md-4  col-lg-4 col-xs-4"> <!-- second part -->
                        <h1>Fast</h1>
                        <img src="img/mi2.png"><br><br>
                        <p style="width:200px;margin:auto"><b>Find your texbook without even looking to syllabus</b></p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4"> <!-- first part -->
                        <h1>Convenient</h1>
                        <img src="img/mi1.png"><br><br>
                        <p style="width:200px;margin:auto"><b>Convenient</b></p>
                    </div>
                    <div class="col-md-4  col-lg-4 col-xs-4">	<!-- third part -->
                        <h1>Reliable</h1>
                        <img src="img/mi3.png"><br><br>
                        <p style="width:200px;margin:auto"><b>Reliable</b></p>
                    </div>
                </div>

                <div class="row" style="margin-bottom:50px;">
                    
                    <div class="col-lg-1 col-xs-1 col-md-1"></div>
                    <div class="col-md-4 col-lg-4 hidden-xs hidden-sm text-center" style="margin-top:20px;">
                        <div class="bg-warning">
                          NAU BOOKMART — marketplace for NAU<br> students where they  <br> can sell new or used textbooks that are required for NAU courses.
                        </div>
                        
                        <script type="text/javascript">(function() {
                          if (window.pluso)if (typeof window.pluso.start == "function") return;
                          if (window.ifpluso==undefined) { window.ifpluso = 1;
                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                            var h=d[g]('body')[0];
                            h.appendChild(s);
                          }})();
                          </script>
                        <div class="pull-left pluso" data-background="transparent" data-options="big,square,line,horizontal,counter,theme=04" data-services="vkontakte,facebook,twitter,email"></div>
                    </div>
                </div>                

                <!-- ........................................    footer   ........................................-->
                <!-- <a href="#top">TOP</a> -->
            </div>  <!-- content -->
            <div class="col-md-1 col-lg-1 hidden-sm "> <!-- rightPadding -->
            </div>  <!-- rightPadding -->
        </div>
        <!-- ....................................... Modal ....................... -->
        <?php include ("moduls/footer.php");?>
<?php 
//    include ("moduls/modalsCreateTask.php");
    include ("moduls/modalsLoginForm.php");
    include ("moduls/modalsRegistrationForm.php");
    include ("moduls/javascript.php");
?>
<script type="text/javascript">
    $("li").removeClass("active");
    $("a[href='/']").parent().addClass("active");
</script>
</body>
</html>
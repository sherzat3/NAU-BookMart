<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NAU BookMart</title>
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/datepicker.css" rel="stylesheet">
        <link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style type="text/css">
            @import url(http://fonts.googleapis.com/css?family=Cuprum:400,700,400italic,700italic&subset=latin,cyrillic);
        </style>      
    </head>
    <body>
    	<!-- 
    	Модуль главного меню
    	-->
        <?php 
        	include ("moduls/mainmenu.php");
        ?>
        <div id="mynav" class="row">
            <div class="col-md-1 test">	<!-- leftPadding -->
            </div>	<!-- leftPadding -->
            <div id="content" class="col-md-10 test" style="margin-top:0px"> <!-- content -->
                <div style="font-family:'Cuprum'">
                    <h1 class="text-muted">NAU</h1><br>
            	   <h1 class="text-primary">Sherzat, Alisher, Suienish, Sohrab, Hasan, Temirlan</h1><br>
                    <br><br><br>
                </div>
                <!-- ........................................    footer   ........................................-->
               	<?php 
               	include ("moduls/footer.php");
               	?>
                <a href="#top">TOP</a>
            </div>	<!-- content -->
            <div class="col-md-1 test"> <!-- rightPadding -->
            </div>	<!-- rightPadding -->
        </div>
        <!-- ....................................... Modal ....................... -->
        <?php 

        include ("moduls/modalsCreateTask.php");
 	
        include ("moduls/modalsLoginForm.php");
 		
        include ("moduls/modalsRegistrationForm.php");

        include ("moduls/javascript.php");

        ?>
<script type="text/javascript">
    $("li").removeClass("active");
    $("a[href='contacts.php']").parent().addClass("active");
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>NAU Bookmart</title>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/datepicker.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
   <?php 

        include ("moduls/mainmenu.php");

      ?>
	  
	<?php
						include ("db.php");
						
						$user_id = $_COOKIE["id"];
		
						$query = 	"SELECT tbl_posts.title, tbl_posts.description, tbl_users.email, tbl_users.phonenumber 
									FROM tbl_posts
									INNER JOIN tbl_users
									ON tbl_posts.user_id=tbl_users.id
									WHERE tbl_posts.user_id=$user_id";
									
						#$query = "SELECT * FROM tbl_posts";
						$result = mysql_query($query);
	?>
	
	  
	<div id="mynav" class="row">
		<div class="col-md-1 test">	</div>	<!-- leftPadding -->
		<div id="content" class="col-md-10 col-sm-10 col-xs-10 " style=""> <!-- content -->
			<div class="row" style="padding-bottom:60px">
			<div class="col-md-12">
					<br />
					<br />
					<br />
					<br />
					
					<?php
						 while ($row = mysql_fetch_assoc($result)){
							echo "<h1>Title: {$row['title']}</h1><br/>";
							echo "Description: {$row['description']}<br/>";
							echo "Contact email: {$row['email']}<br/>";
							echo "Contact phone: {$row['phonenumber']}<br/>";
							echo "<br/><br/>";
						}
					?>
	      	</div>
	      	</div>
			<!-- <br><br><a href="#top">TOP</a> -->
		</div>	<!-- content -->

		<div class="col-md-1"> </div>	<!-- rightPadding -->
	</div>
	<?php include ("moduls/footer.php");?>
	
	
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/app.js"></script>
<script type="text/javascript">
    $("a[href='createtask.php']").parent().addClass("active");
</script>

</body>
</html>
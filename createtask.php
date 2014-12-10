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
	<script>
		function showAlert() { 
			alert ("You've successfully created new post");
		}
	</script>
</head>
<body>
   <?php 

        include ("moduls/mainmenu.php");

      ?>
	<form action = "" method = "post" >
	<div id="mynav" class="row">
		<div class="col-md-1 test">	</div>	<!-- leftPadding -->
		<div id="content" class="col-md-10 col-sm-10 col-xs-10 " style=""> <!-- content -->
			<div class="row" style="padding-bottom:60px">
			<div class="col-md-12">
				<form id="createForm" class="form-horizontal" role="form" method="POST" action="moduls/fortasks/createtasktobd.php" style="padding-left:10px;padding-right:10px">
	      			<h2>Create post</h2>
	      			<br>
	      			<div class="form-group">
	      				<label for="breifInfo" class="col-sm-2 control-label">Title of textbook</label>
	      				<div class="col-sm-10">
	      					<input id="breifInfo" name="title" type="text" class="form-control" maxlength="154" placeholder="Enter the title of textbook">
	      				</div>
	      			</div>
	      			
	      			<div class="form-group"  > <!-- description -->
		      			<label for="inputDescription" class="col-sm-2 control-label">Description</label>
	    				<div class="col-sm-10">
	    				  <textarea class="form-control" name="description" rows="3" id="inputDescription" required placeholder="Please type the detailed description"></textarea>
	    				</div>
		      		</div> <!-- description -->

		      		
				<input type="radio" name="submit" id="submit" value="true" checked style="display:none">
	    			<div class="modal-footer">
	    			  <button type="submit" class="btn btn-primary" value="true">Create</button>
	    			</div>
	      		</form>
	      	</div>
	      	</div>
			<!-- <br><br><a href="#top">TOP</a> -->
		</div>	<!-- content -->

		<div class="col-md-1"> </div>	<!-- rightPadding -->
	</div>
	</form>
	<?php include ("moduls/footer.php");?>
	
	<?php
		include ("db.php");
		
		if(!empty($_POST)) {
			$title = $_POST["title"];
			$description = $_POST["description"];
			$user_id = $_COOKIE["id"];
			
			mysqli_query($connection, "INSERT INTO tbl_posts(title, description, user_id) 
									VALUES('$title', '$description', $user_id)") or die( mysql_error());
									
			echo '<script type="text/javascript"> showAlert(); </script>';
		}
		
		
	?>
	
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/app.js"></script>
<script type="text/javascript">
    $("li").removeClass("active");
    $("a[href='createtask.php']").parent().addClass("active");
</script>

</body>
</html>
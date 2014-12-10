<?php 
include '../../db.php';

$query=mysql_query("SELECT * FROM tbl_users WHERE user_hash='" . mysql_real_escape_string($_COOKIE['hash']) . "' LIMIT 1") or die( mysql_error());
$data = mysql_fetch_assoc($query);

?>
<h2 style="margin-left:-50px;margin-bottom:35px">Settings</h2>
<div class="row">
	<div class="col-md-12" style="margin-left:-50px; border-bottom: 2px solid gray;">
		<form id="changeInfo" class="form-horizontal" role="form" style="width:480px" method="POST" >
		  <div class="form-group">
		    <label for="setName" class="col-sm-2 control-label">First Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="firstname" placeholder="First name" value=<?php echo '"'.$data['name'].'"'?> >
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="setLastName" class="col-sm-2 control-label">Last name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="lastname" placeholder="Last name" value=<?php echo '"'.$data['surname'].'"'?>>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="setPhone" class="col-sm-2 control-label">Phone number</label>
		    <div class="col-sm-10">
		      <input type="tel" class="form-control" name="phone" placeholder="Phone number" value=<?php echo '"'.$data['phonenumber'].'"'?>>
		    </div>
		  </div>
    	  
		  
		  <div class="form-group">
		    <div class="col-sm-offset-5 col-sm-10">
		      <button type="submit" class="btn btn-info">Save changes</button>
		    </div>
		  </div>
		</form>
	</div>	
</div>
<div class="col-md-12" style="margin-left:-50px;margin-top:35px">
	<form id="changePassword" class="form-horizontal" role="form" style="width:480px">
		<div class="form-group" style="margin-bottom:35px;">
		  <label for="currentPassword" class="col-sm-4 control-label">Current password</label>
		  <div class="col-sm-8">
		    <input type="password" class="form-control" name="currentPassword" placeholder="Enter your current password" value="">
		  </div>
		</div>		

		<div class="form-group">
		  <label for="newPassword" class="col-sm-4 control-label">New password</label>
		  <div class="col-sm-8">
		    <input type="password" class="form-control" name="newPassword" placeholder="Enter new password" value="">
		  </div>
		</div>		
		<div class="form-group">
		  <label for="newPassword2" class="col-sm-4 control-label">Repeat new password</label>
		  <div class="col-sm-8">
		    <input type="password" class="form-control" name="newPassword2" placeholder="Repeat your new password" value="">
		  </div>
		</div>		
		<div class="form-group">
		  <div class="col-sm-offset-5 col-sm-10">
		    <button type="submit" class="btn btn-info">Change password</button>
		  </div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$("#changeInfo").submit(function(event){
		event.preventDefault();
		var url = "moduls/fromcabinet/settingsdb.php";
		$.ajax({
			type: "POST",
			url: url,
			data : "submit=true&" + $(this).serialize(),
			success: function(data){
				alert("Information was successfully updated");
			},
			error: function(data){
				alert(data);
			}
		});
		return false;
	});
	$("#changePassword").submit(function(event){
		event.preventDefault();
		var url = "moduls/fromcabinet/settingsdb.php";
		var pass1 = $("input[name='newPassword']").val();
		var pass2 = $("input[name='newPassword2']").val();
		if(pass1 !== pass2){
			alert("Password do not match");
			return false;
		}
		$.ajax({
			type: "POST",
			url: url,
			data : "aiu=true&" + $(this).serialize(),
			success: function(data){
				alert(data);
			},
			error: function(data){
				alert(data);
			}
		});
		return false;
	});
</script>

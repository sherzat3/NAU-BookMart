<?php
	include '../../db.php';

$query=mysql_query("SELECT * FROM tbl_users WHERE user_hash='" . mysql_real_escape_string($_COOKIE['hash']) . "' LIMIT 1") or die( mysql_error());
$data = mysql_fetch_assoc($query);

        $profilename = $data['name'];
        $profilesurname = $data['surname'];
        $email = $data['email'];
        $timetoreg = $data['timetoreg'];
        $phone = $data['phonenumber'];


echo <<<YAHOO
      <h2 style="margin-left:-50px">Profile</h2><br>
					<div class="form-horizontal">
						<div class="form-group">
  						  <label for="" class="text-muted col-sm-2 control-label">First name</label>
  						  <div class="col-sm-10">
  						  	<label class="text-primary control-label">$profilename</label>
  						    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
  						  </div>
  						</div>
					</div>

					<div class="form-horizontal">
						<div class="form-group">
  						  <label for="" class="text-muted col-sm-2 control-label">Last name</label>
  						  <div class="col-sm-10">
  						  	<label class="text-primary control-label">$profilesurname</label>
  						    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
  						  </div>
  						</div>
					</div>

          <div class="form-horizontal">
            <div class="form-group">
                <label for="" class="text-muted col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                  <label class="text-primary control-label">+$phone</label>
                  <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
                </div>
              </div>
          </div>

					<div class="form-horizontal">
						<div class="form-group">
  						  <label for="" class="text-muted col-sm-2 control-label">Registration date</label>
  						  <div class="col-sm-10">
  						  	<label class="text-primary control-label">$timetoreg</label>
  						    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
  						  </div>
  						</div>
					</div>
          
          <br><br>
           
YAHOO;
?>
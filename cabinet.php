<?php 
    include 'db.php';
    $query=mysql_query("SELECT * FROM tbl_users WHERE user_hash='" . mysql_real_escape_string($_COOKIE['hash']) . "' LIMIT 1") or die( mysql_error());
        
    $data = mysql_fetch_assoc($query);
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>NAU BOOKMART</title>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/datepicker.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
.foot_menu {text-align:right;
}
.foot_menu li {
	display:inline-block;
	padding:0 16px 0  0!important;
	border:0 !important;
	margin:0 !important;
}
.foot_menu li:last-child {padding:0 !important;
}
.foot_menu li a {
	text-transform:uppercase;
	color:#444444 !important;
	font-size:14px;
	font-family: 'Open Sans', sans-serif;
	font-weight:800;
	font-style:normal !important;
}
.foot_menu li a:hover, .foot_menu li a.current {
	color:#5f5f5f !important;
	text-decoration:none;
}
.clear {
	height:0;
	clear:both;
	font-size:0;
}
#avatar{
    cursor: pointer;
}
</style>
</head>
<body>
     <?php 
        if(!isset($_COOKIE['hash'])){

            header('Location: http://naubookmart.com/login.php');

        }
   include 'db.php';
        include ("moduls/mainmenu.php");

      ?>

	<div id="mynav" class="row">
		<div class="col-md-1 test"></div>	<!-- leftPadding -->

		<div id="content" class="col-md-10 col-xs-12 col-lg-10 col-sm-12 test"> <!-- content -->
			<div class="row" style="padding-bottom:60px">
				<div class="col-md-2 col-xs-3 col-md-2 col-sm-3"><br>
					<div class="sidebar-nav">
    				  <div class="navbar navbar-default" role="navigation">
    				    <div class="navbar-header">
    				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
    				        <span class="sr-only">Toggle navigation</span>
    				        <span class="icon-bar"></span>
    				        <span class="icon-bar"></span>
    				        <span class="icon-bar"></span>
    				      </button>
    				    </div>
    				    <div class="navbar-collapse collapse sidebar-navbar-collapse">
    				      <ul class="nav navbar-nav">
                            <div id="avatar" style="position:relative">
                                <img src="img/loader.gif" style="display:none;position:absolute;margin-left:45%;margin-top:45%">
                            </div>
    				        <li id="profileBtn" class="menuBtns active"><a href="#">Profile</a></li>
    				        <li id="settingsBtn" class="menuBtns"><a href="#">Setings</a></li>
    				      </ul>
    				    </div><!--/.nav-collapse -->
    				  </div>
    				</div>
				</div>
                <div id="mainContent" class="col-md-10 col-lg-10 col-xs-9 col-sm-9" style="padding-top:20px;padding-left:100px"></div>
            </div>
            <!-- <hr> -->
            <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
            <!-- <a href="#top">TOP</a> -->
    
        </div>  <!-- content -->

        <div class="col-md-1 col-sm-1 col-lg-1 test"> <!-- rightPadding -->
        </div>  <!-- rightPadding -->

    </div>

<?php include ("moduls/footer.php");?>
		<!-- Modal -->
	<?php 

        include ("moduls/modalsCreateTask.php");
  

        include ("moduls/modalsLoginForm.php");

    
        include ("moduls/modalsRegistrationForm.php");


        include ("moduls/javascript.php");



        ?>
<script src="js/numb.min.js"></script>
<script type="text/javascript">
$("#setPhone").mask("+1 (999) 999-9999");
</script>
<script type="text/javascript">

 $(".menuBtns").click(function(){
    var item =  $(this).attr('id');
    $(".menuBtns").removeClass("active");
    $(this).addClass("active");
    switch(item){
        case 'profileBtn':  loadPage("profile");
                            break;
        case 'settingsBtn': loadPage("settings");
                            break;
        default:break;
    }
 });   
function loadPage(file){
    $("#mainContent").html("<h3>Loading...</h3>");
    $.ajax({
        type: 'POST',
        url: ('moduls/fromcabinet/'+file + '.php'),
        encoding: "UTF-8",processData: false,contentType: false,
        success: function(xhr, textStatus, error) {
            $("#mainContent").hide();
            $("#mainContent").html(xhr);
            $("#mainContent").fadeIn('fast');
        },
    });
}
window.onload = function()
 {
    var loc = document.location.href;
    var pos = loc.lastIndexOf('#');
    var path = "";
    $("#profileBtn").addClass("active");
    loadPage("profile");
    if( (loc.length-1 != pos) && (pos != -1) ){
         path = loc.substr(pos+1);
          $(".menuBtns").removeClass("active");
    }
    switch(path){
        case "profile": $("#profileBtn").addClass("active"); loadPage("profile");break;
        case "settings": $("#settingsBtn").addClass("active"); loadPage("settings");break;
        default: $("#profileBtn").addClass("active");break;
    } 
}
    $("li").removeClass("active");
    $(".dropdown").addClass("active");
</script>
</body>
</html>
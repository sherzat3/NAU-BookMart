<?php 

include './db.php';

if(isset($_REQUEST['exit'])) {
        setcookie('id', '', time() - 60*60*24*30, '/'); 
        setcookie('hash', '', time() - 60*60*24*30, '/');
        header('Location: index.php'); exit();

}
if(isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
    $query=mysql_query("SELECT * FROM tbl_users WHERE user_hash='" . mysql_real_escape_string($_COOKIE['hash']) . "' LIMIT 1") or die( mysql_error());
    $data = mysql_fetch_assoc($query);
    $profilename = $data['name'];
    $profilesurname = $data['surname'];
    $email = $data['email'];
    $timetoreg = $data['timetoreg'];

    print <<<END
<form id="ttl" action="index.php" method="post" style="display:none"><input id="tts" type='submit' name='exit' value='Log out'/></form>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Change navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand"  href="/" alt="naubookmart" style="background:transparent !important;margin-top:-5px">
        <img src="img/log.png" height="30px" vspace="0" hspace="0" alt="">
      </a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav" >
        <li class="active"><a href="index.php">Main menu</a></li>
        <li><a href="createtask.php">Create post</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="myposts.php">My posts</a></li>
      </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div style="width:30px;height:30px;float:left">
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$profilename <b class="caret"></b>
                </a>
              <ul class="dropdown-menu">
                <li><a href="cabinet.php">Profile</a></li>
                <li><a href="cabinet.php#settings">Settings</a></li>
                <li><a id="exit" href="#">Log out</a></li>
              </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
END;
}else{
print <<<END
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Change navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand"  href="index.php" alt="naubookmart" style="background:transparent !important;margin-top:-5px">
        <img src="img/log.png" height="30px" vspace="0" hspace="0">
      </a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
        <ul class="nav navbar-nav" >
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="postslist.php">Posts</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contacts.php">Contacts</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#loginModal" data-toggle="modal" data-target="#loginModal">Log in</a></li>
            <li><a href="#registerModal" data-toggle="modal" data-target="#registerModal">Register</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
END;
}
?>
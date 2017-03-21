<!DOCTYPE html>
<html lang="en">
<head>
<title>NJ DCPP Legal Assistance - <?php echo @$title;?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php
  $admin_css = array(
      'css/bootstrap.min',
      'css/bootstrap-responsive.min',
      'css/datepicker',
  	  'css/uniform',
  	  'css/select2',
      'css/fullcalendar',
      'css/matrix-style',
      'css/matrix-media',
      'font-awesome/css/font-awesome',
      'css/jquery.gritter.css',
      'css/bootstrap-wysihtml5',
     
  );
  add_css_file($admin_css);
  ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url('dashboard');?>">NJ DCPP</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Andy</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>      
        <li><a href="<?php echo base_url()?>login/logout"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  
    <li class=""><a title="" href="<?php echo base_url()?>login/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->

<?php //include_once('sidemenu.php');
$this->load->view('layout/sidemenu');
?>

<!--main-container-part-->
<div id="content">


<!DOCTYPE html>
<html lang="en">
<head>
<title>RV-Sites.com</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
   <h1><a href="dashboard.html">RV Site</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php include('topmenu.php');?>


<!--sidebar-menu-->

<?php include_once('sidemenu.php');?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admin.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="campsiteowners.php" class="current">Campsite Owners</a> <a href="#" class="current">Add New</a> </div>
    <h1>Campsite Owners</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                  <input type="text" name="name" id="required">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Photo</label>
                <div class="controls">
                  <input type="file" name="photo" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="text" name="email" id="email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Mobile No</label>
                <div class="controls">
                  <input type="text" name="mobile_no" id="mobile_no">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Address 1</label>
                <div class="controls">
                  <input type="text" name="address1" id="address1">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Address 2</label>
                <div class="controls">
                  <input type="text" name="address2" id="address2">
                </div>
              </div>
             
          
              <div class="form-actions">
                <input type="submit" value="Save" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2016 &copy; RV Sites</div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_validation.js"></script>
</body>
</html>

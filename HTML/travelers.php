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
</head><body>
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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Travelers</a> </div>
    <h1>Travelers</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div align="right"><a href="add_traveller.php" class="btn btn-success">Add New</a></div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Travelers</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile No</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>Michael</td>
                  <td>Michael@gmail.com </td>
                  <td>(541) 754-3010</td>
                  <td class="center">Active</td>
				  <td><i class="icon icon-search"></i> View</td>
                </tr>
				
				 <tr class="gradeX">
                  <td>Michael</td>
                  <td>Michael@gmail.com </td>
                  <td>(541) 754-3010</td>
                  <td class="center">Active</td>
				  <td><i class="icon icon-search"></i> View</td>
                </tr>
				
				 <tr class="gradeX">
                  <td>Michael</td>
                  <td>Michael@gmail.com </td>
                  <td>(541) 754-3010</td>
                  <td class="center">Active</td>
				  <td><i class="icon icon-search"></i> View</td>
                </tr>
				
				 <tr class="gradeX">
                  <td>Michael</td>
                  <td>Michael@gmail.com </td>
                  <td>(541) 754-3010</td>
                  <td class="center">Active</td>
				  <td><i class="icon icon-search"></i> View</td>
                </tr>
				
				 <tr class="gradeX">
                  <td>Michael</td>
                  <td>Michael@gmail.com </td>
                  <td>(541) 754-3010</td>
                  <td class="center">Active</td>
				  <td><i class="icon icon-search"></i> View</td>
                </tr>
				
				 <tr class="gradeX">
                  <td>Michael</td>
                  <td>Michael@gmail.com </td>
                  <td>(541) 754-3010</td>
                  <td class="center">Active</td>
				  <td><i class="icon icon-search"></i> View</td>
                </tr>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.tables.js"></script>
</body>
</html>
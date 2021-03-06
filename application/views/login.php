<!DOCTYPE html>
<html lang="en">
<head>
<title>NJ DCPP | Login</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php
  $login_css = array(
      'css/bootstrap.min',
      'css/bootstrap-responsive.min',
      'css/matrix-login',
      'font-awesome/css/font-awesome',
     
  );
  add_css_file($login_css);
  ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="loginbox">
  <form method="post" id="loginform" class="form-vertical" action="<?php echo base_url().'login/validateuser'; ?>">
    <div class="control-group normal_text">
      <h3>NJ DCPP</h3>
    </div>
    <div class="control-group">
      <div class="controls">
        <div class="main_input_box"> <span class="add-on bg_lg"><i class="icon-user"> </i></span>
          <input type="text"  id="email" name="email" required="true" />

        </div>
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <div class="main_input_box"> <span class="add-on bg_ly"><i class="icon-lock"></i></span>
          <input type="password" id="password" name="password"  />
        </div>
      </div>
    </div>

    <div class="form-actions">     
      <span class="pull-right">    
<input type="submit" name="submit" value="Login" class="btn btn-success">
    </span> </div>
  </form>

</div>
<script src="js/jquery.min.js"></script>
<script src="js/matrix.login.js"></script>

<?php
   $login_js = array(
            'js/jquery.min',
            'js/matrix.login.js',           
        );
        add_js_file($login_js);
?>
</body>
</html>

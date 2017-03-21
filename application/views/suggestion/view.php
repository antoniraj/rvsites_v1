<div id="content-header">
    <div id="breadcrumb">
     <a href="<?php echo base_url();?>dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
     <a href="<?php echo base_url();?>Parking_location/manage" class="current">Parking Locations</a>
      <a href="#" class="current"><?php echo $text;?></a>
       </div>
    <h1><?php echo $text;?></h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5><?php echo $text;?></h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                  <?php echo @$user_id;?>
                </div>
              </div> 
         
              <div class="control-group">
                <label class="control-label">Address</label>
                <div class="controls">
                 <?php echo @$description;?>
                </div>
              </div>
            
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>
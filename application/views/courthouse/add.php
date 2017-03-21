<div id="content-header">
    <div id="breadcrumb">
     <a href="<?php echo base_url();?>dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
     <a href="<?php echo base_url();?>Courthouse/manage" class="current">Location of Court House</a>
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
                  <input type="text" required name="name"  id="name" value="<?php echo @$name;?>">
                </div>
              </div> 
         
              <div class="control-group">
                <label class="control-label">Address</label>
                <div class="controls">
                  <textarea name="address" id="address" class="textarea_editor span12" rows="6" placeholder="Enter text ..."><?php echo @$address;?></textarea>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Latitude</label>
                <div class="controls">
                  <input type="text" required name="latitude"  id="latitude" value="<?php echo @$latitude;?>">
                </div>
              </div> 
               <div class="control-group">
                <label class="control-label">Longitude</label>
                <div class="controls">
                  <input type="text" required name="longitude"  id="longitude" value="<?php echo @$longitude;?>">
                </div>
              </div> 
                
          
              <div class="form-actions">
                <input type="hidden" name="id" value="<?php echo @$id;?>">              
                <input type="submit" name="btnSave" id="btnSave" value="Save" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>
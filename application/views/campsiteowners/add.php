<div id="content-header">
    <div id="breadcrumb">
     <a href="<?php echo base_url();?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
     <a href="<?php echo base_url();?>admin/campsiteowners" class="current">Campsite Owners</a>
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
                <label class="control-label">First Name</label>
                <div class="controls">
                  <input type="text"  name="firstname"  id="firstname" value="<?php echo @$data[0]->firstname;?>">
                </div>
              </div> 
              <div class="control-group">
                <label class="control-label">Last Name</label>
                <div class="controls">
                  <input type="text" name="lastname" id="lastname" value="<?php echo @$data[0]->lastname?>">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Email-Id</label>
                <div class="controls">
                  <input type="text" name="email" id="email" value="<?php echo @$data[0]->email?>">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Mobile</label>
                <div class="controls">
                  <input type="text" name="mobile" id="mobile" value="<?php echo @$data[0]->mobile?>">
                </div>
              </div>              

               <div class="control-group">
                <label class="control-label">Address</label>
                <div class="controls">                
                  <textarea name="address" id="address"><?php echo @$data[0]->address;?></textarea>
                </div>
              </div>
                     
          
              <div class="form-actions">
                <input type="hidden" name="id" value="<?php echo @$data[0]->id;?>">
                <input type="hidden" name="user_id" value="<?php echo @$data[0]->user_id;?>">
                <input type="submit" name="btnCampsiteOwners" value="Save" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>
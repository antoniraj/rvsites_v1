<div id="content-header">
    <div id="breadcrumb">
     <a href="<?php echo base_url();?>dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
     <a href="<?php echo base_url();?>Pushnotification/manage" class="current">Push Notification</a>
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
                <label class="control-label">Title</label>
                <div class="controls">
                  <input type="text" required name="title"  id="title" value="<?php echo @$title_notification;?>">
                </div>
              </div> 
         
            <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description" class="textarea_editor span12" rows="6" placeholder="Enter text ..."><?php echo $description;?></textarea>
                </div>
              </div>
                 <div class="control-group">
              <label class="control-label">Date </label>
              <div class="controls">
                <div  data-date="" class="input-append date datepicker">
                  <input name="to_sent_on" id="to_sent_on" type="text" value="<?php echo $to_sent_on;?>"  data-date-format="mm-dd-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
            </div>      
          
              <div class="form-actions">
                <input type="hidden" name="id" value="<?php echo @$id;?>">              
                <input type="submit" name="btnPushnotification" id="btnPushnotification" value="Save" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>
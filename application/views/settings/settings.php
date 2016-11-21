<div id="content-header">
    <div id="breadcrumb">
     <a href="<?php echo base_url();?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
     
      <a href="#" class="current">Settings</a>
       </div>
    <h1>Settings</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Sesstings</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Site Title</label>
                <div class="controls">
                  <input type="text" name="site_title"  id="site_title" value="<?php echo @$site_title;?>">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Logo</label>
                <div class="controls">
                  <input type="file" name="logo"  id="logo">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Meta Keywords</label>
                <div class="controls">
                  <textarea name="meta_keyword" id="meta_keyword"><?php echo @$meta_keyword;?></textarea>
                </div>
              </div>
                 <div class="control-group">
                <label class="control-label">Meta Description</label>
                <div class="controls">
                  <textarea name="meta_desc" id="meta_desc"><?php echo @$meta_desc;?></textarea>
                </div>;
              </div>
              <div class="control-group">
                <label class="control-label">Fee charged on total amount of the rental</label>
                <div class="controls">
                  <input type="text" name="fee_totalamount" id="fee_totalamount" value="<?php echo @$fee_totalamount?>">
                </div>
              </div>
                 <div class="control-group">
                <label class="control-label">PayPal Processing fee to include damage deposits</label>
                <div class="controls">
                  <input type="text" name="paypal_proc_fee" id="paypal_proc_fee" value="<?php echo @$paypal_proc_fee;?>">
                </div>;
              </div>
              <div class="control-group">
                <label class="control-label">Processing fee on all credit cards</label>
                <div class="controls">
                  <input type="text" name="cc_proc_fee" id="cc_proc_fee" value="<?php echo @$cc_proc_fee;?>">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">International processing surcharge on foreign credit cards</label>
                <div class="controls">
                  <input type="text" name="in_proc_fee" id="in_proc_fee" value="<?php echo @$in_proc_fee;?>">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Currency</label>
                <div class="controls">
                  <input type="text" name="currency_formate" id="currency_formate" value="<?php echo @$currency_formate;?>">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Payment Method</label>
                <div class="controls">
                  <input type="radio" name='payment_method' value="1" checked="checked"> Paypal
                  <input type="radio" name="payment_method" value="2"> Strip
                </div>
              </div>

               <div class="control-group">
                <label class="control-label">Campsite Creation Notification Mail</label>
                <div class="controls">                
                  <textarea name="cs_notification" id="cs_notification"><?php echo @$cs_notification;?></textarea>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Booking Notification Mail</label>
                <div class="controls">        
                  <textarea name="book_notification" id="book_notification"><?php echo @$book_notification;?></textarea>
                </div>
              </div>
             
          
              <div class="form-actions">
                <input type="hidden" name="id" value="1">
                <input type="submit" name="btnSettings" value="Save" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>
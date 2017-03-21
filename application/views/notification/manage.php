<div class="container-fluid">

      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Manage Push Notifications</h3>
          <?php 
            $message =$this->session->flashdata('message');
            if(isset($message)) {
              echo '<div class="alert alert-warning">'.$message.'</div>';
            } 
          ?>
          
        </div>

         <div align="right"><a href="<?php echo base_url()?>Pushnotification/add" class="btn btn-success">Add New</a></div>
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Push Notifications</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Status</th>                 
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($results as $key => $value) { ?>
                    <tr class="gradeX">
                      <td><?php echo $value->title;?></td>
                      <td><?php echo $value->description;?></td>
                      <td><?php echo ($value->status==1)?'Notification not send':'Notification has sent';?></td>                     
                      <td>
                        <a href="<?php echo base_url('Pushnotification/edit/'.$value->id);?>"><i class="icon-edit"></i> Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('Pushnotification/delete/'.$value->id);?>"><i class="icon-trash"></i> Delete</a>
                      </td>
                    </tr>
                <?php } ?>
               
                
              </tbody>
            </table>
          </div>
        </div>
      </div><!--panel-->
</div>

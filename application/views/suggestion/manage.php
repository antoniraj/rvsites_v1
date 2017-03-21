<div class="container-fluid">

      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Manage Suggest Information</h3>
          <?php 
            $message =$this->session->flashdata('message');
            if(isset($message)) {
              echo '<div class="alert alert-warning">'.$message.'</div>';
            } 
          ?>
          
        </div>

        
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Suggest Information</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Suggest Information</th>                                                               
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($results as $key => $value) { ?>
                    <tr class="gradeX">
                      <td><?php echo $value->user_id;?></td>
                      <td><?php echo $value->description;?></td>
                      <td>
                        <a href="<?php echo base_url('Suggestion/view/'.$value->id);?>"><i class="icon-search"></i> View</a>
                        <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('Suggestion/delete/'.$value->id);?>"><i class="icon-trash"></i> Delete</a>
                      </td>
                    </tr>
                <?php } ?>
               
                
              </tbody>
            </table>
          </div>
        </div>
      </div><!--panel-->
</div>

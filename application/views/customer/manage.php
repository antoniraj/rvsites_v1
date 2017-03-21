<div class="container-fluid">

      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Manage Customer</h3>
          <?php 
            $message =$this->session->flashdata('message');
            if(isset($message)) {
              echo '<div class="alert alert-warning">'.$message.'</div>';
            } 
          ?>
          
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Zip Code</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($results as $key => $value) { ?>
                    <tr class="gradeX">
                      <td><?php echo $value->name;?></td>
                      <td><?php echo $value->mobile;?></td>
                      <td><?php echo $value->email;?></td>
                      <td><?php echo $value->address;?></td>
                      <td><?php echo $value->zipcode;?></td>
                      <td>
                        <a href=""><i class="icon-trash"></i>Delete</a>
                      </td>
                    </tr>
                <?php } ?>
               
                
              </tbody>
            </table>
          </div>
        </div>
      </div><!--panel-->
    </div>


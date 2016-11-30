  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Campsite Owners</a> </div>
    <h1>Campsite Owners</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      <div align="right"><a href="<?php echo base_url()?>admin/campsiteowners/add" class="btn btn-success">Add New</a></div>
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Camsite Owners</h5>
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
			  	<?php foreach($owners_list as $list){?>
					 <tr class="gradeX">
					  <td><?php echo $list->firstname.' '.$list->lastname;?></td>
					  <td><?php echo $list->email;?> </td>
					  <td><?php echo $list->mobile?></td>
					  <td class="center"><?php echo $list->status;?></td>
					  <td><a href="<?php echo base_url();?>/admin/campsiteowners/edit/<?php echo $list->coid;?>"><i class="icon icon-edit"></i> Edit</a>
              &nbsp; <a href="<?php echo base_url();?>/admin/campsiteowners/delete/<?php echo $list->coid;?>"><i class="icon icon-trash"></i> Delete</a>
            </td>
					</tr>
				<?php }?>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Property</a> </div>
    <h1>Property</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      <div align="right"><a href="<?php echo base_url();?>siteowner/property/add" class="btn btn-success">Add New</a></div>
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Property</h5>
          </div>
          <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Property Name</th>
                  <th>Short Description</th>
                  <th>Meta Keyword</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
			  
			  	<?php foreach($property_list as $list){?>
						 <tr class="gradeX">
					  <td><?php echo $list->property_title;?></td>
					  <td><?php echo $list->short_description;?> </td>
					  <td><?php echo $list->meta_keywords?></td>
					  <td class="center"><?php echo $list->status;?></td>
					  <td><a href="<?php echo base_url('admin/property/view/'.$list->id); ?>"><i class="icon icon-search"></i> View</a></td>
					</tr>
				<?php }?>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

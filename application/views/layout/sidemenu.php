<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($menu=='Dashboard'){echo 'active';}?>"><a href="<?php echo base_url('dashboard');?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="<?php if($menu=='customer'){echo 'active';}?>"> <a href="<?php echo base_url('customer/manage');?>"><i class="icon icon-user"></i> <span>Customers</span></a> </li>
    <li class="<?php if($menu=='Notification'){echo 'active';}?>"> <a href="<?php echo base_url('Pushnotification/manage');?>"><i class="icon icon-user"></i> <span>Push Notification</span></a> </li>
    
    <li class="<?php if($menu=='ao'){echo 'active';}?>"><a href="<?php echo base_url('Content/attorneys_office');?>"><i class="icon icon-fullscreen"></i> <span>Attorneys Office</span></a></li>
    
    <li class="<?php if($menu=='lch'){echo 'active';}?>"><a href="<?php echo base_url('Courthouse/manage');?>"><i class="icon icon-money"></i> <span>Location of Court House</span></a></li>
    <li class="<?php if($menu=='pl'){echo 'active';}?>"><a href="<?php echo base_url('Parking_location/manage');?>"><i class="icon icon-money"></i> <span>Parking Locations</span></a></li>
    <li><a href="<?php echo base_url('Courthouse/manage');?>"><i class="icon icon-money"></i> <span>Favorites</span></a></li>
    <li class="<?php if($menu=='si'){echo 'active';}?>"><a href="<?php echo base_url('Suggestion/manage');?>"><i class="icon icon-money"></i> <span>Suggest Information</span></a></li>
   <!--  <li><a href="#"><i class="icon icon-money"></i> <span>Case Law</span></a></li>
    <li><a href="#"><i class="icon icon-money"></i> <span>Statutes</span></a></li>
    <li><a href="#"><i class="icon icon-money"></i> <span>Rules of Court</span></a></li>
    <li><a href="#"><i class="icon icon-money"></i> <span>Rules of Evidence</span></a></li>
     -->
    </li>
  </ul>
</div>
<!--sidebar-menu-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date('Y');?> &copy;. All rights reserved. </div>
</div>

<!--end-Footer-part-->

<?php
  
     $list_js = array(            
            'js/jquery.min',
            'js/jquery.ui.custom',
            'js/bootstrap.min',
            'js/bootstrap-colorpicker',
            'js/bootstrap-datepicker',
            'js/jquery.toggle.buttons',
            'js/masked',
            'js/jquery.uniform',
            'js/select2.min', 
            'js/matrix', 
            'js/matrix.form_common',
            'js/wysihtml5-0.3.0', 
            'js/jquery.peity.min', 
            'js/bootstrap-wysihtml5',                     
        );

  add_js_file($list_js);
?>

<script type="text/javascript">
 $('.textarea_editor').wysihtml5();
</script>
</body>
</html>

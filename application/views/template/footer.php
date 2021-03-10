<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>



  <script src="<?=base_url()?>assets/node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>assets/node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>assets/node_modules/admin-lte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?=base_url()?>assets/node_modules/admin-lte/dist/js/demo.js"></script>
  <script type="text/javascript">
    var base_url="<?=base_url()?>";
  </script>
  <?php
  if (is_file(APPPATH.'views/' .$addjs.".php"))
       {
      
           $this->load->view($addjs);
       }
  ?>

  </body>
  </html>

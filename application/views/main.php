<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asslab store</title>

    <link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.hh.min.css'); ?>">
  	<script src="<?php echo base_url('vendor/jquery/jquery-3.3.1.min.js'); ?>" ></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>" ></script>
  </head>
  <body>
  <?php $this->load->view('menu'); ?> 
  <!-- pindahkan ke atas div karena kalau didalam div itu sudah diatur sendiri -->
  	<div class="container">
      <br>
            <h1>WELCOME TO ASSLAB WEBSITE</h1>
            <div class="card text-white bg-success mb-3">
              <div class="card-header"><?php echo $this->uri->segment(1); ?></div>
              <!-- uri adalah sebuah class default yang terdapat pada library helper (autoload) -->
              <div class="card-body">
                <?php $this->load->view($page); ?>  
              </div>
            </div>
            
	  </div>
    
  </body>
</html>
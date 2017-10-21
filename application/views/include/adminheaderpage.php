<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<meta name="author" content="Team Reyes" />
<meta name="description" content="The description of website" />

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title;?></title>
  <link href="<?php echo base_url('assets/adminassets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/adminassets/css/simple-sidebar.css')?>" rel="stylesheet">
  
  <script src="<?php echo base_url('assets/adminassets/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminassets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>


</head>
<body>
  <div id="wrapper">
      <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url('admin')?>">
                        ADMIN
                    </a>
                </li>
                <li>
                    <a href="#">Posts</a>
                </li>
                <li>
                    <a href="#">Reported Posts</a>
                </li>
            </ul>
        </div>
</body>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
    	/* Style the top navigation bar */
	.topnav {
	  overflow: hidden;
	  background-color: #333;
	}

	/* Style the topnav links */
	.topnav a {
	  float: left;
	  display: block;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	/* Change color on hover */
	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}

    </script>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
    <!-- <link href="static/css/bootstrap.css" rel="stylesheet">    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">


	<script src="<?php echo base_url(); ?>static/js/calculate.js"></script>

<body>

<!-- <h1>admin header</h1> -->
<?php if($this->session->userdata('message')==True) :?>
              <div class="alert alert-primary" role="alert">
                <h5><?php echo $this->session->userdata('message'); ?></h5>
                <?php $this->session->unset_userdata('message'); ?>   
                <?php endif ?>
              </div>
<div class="container">
        <div class="row">
            <div class="col-md-12">
              <br>	<br>	<br>	

<div class="topnav">
  <a href="<?php echo base_url().'admin' ?>"><button class="btn btn-success">Home</button></a>

  <a href="<?php echo base_url().'admin/employee' ?>"><button class="btn btn-success">Manage Employee</button></a>

  <a href="<?php echo base_url().'admin/salary' ?>"><button class="btn btn-success">Monthly salary</button></a>

  <a href="<?php echo base_url().'admin/viewsalary' ?>"><button class="btn btn-success">View salary</button></a>

  <a href="<?php echo base_url().'admin/display' ?>"><button class="btn btn-success">Search</button></a>

  <a href="<?php echo base_url().'home/logout/' ?>"><button class="btn btn-success">Logout</button></a>

</div>
<br>	<br>	<br>	

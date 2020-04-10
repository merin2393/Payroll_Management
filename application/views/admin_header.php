<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
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

              <ul>
                <li><a class="active" href="<?php echo base_url().'admin' ?>">Home</a></li>
                <li><a href="<?php echo base_url().'admin/viewEmployee' ?>">Employee</a></li>
                <li><a href="<?php echo base_url().'admin/salary' ?>">Salary</a></li>
                <li><a href="<?php echo base_url().'admin/display' ?>">Search</a></li>
                <li style="float:right"><a href="<?php echo base_url().'home/logout/' ?>">Logout</a></li>
              </ul>







<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payroll Management</title>
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
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

</style>
<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="topnav">
              <?php if($this->session->userdata('message')==True) :?>
              <div class="alert alert-primary" role="alert">
                <h5><?php echo $this->session->userdata('message'); ?></h5>
                <?php $this->session->unset_userdata('message'); ?>   
                <?php endif ?>
              </div>

            
            </div>
        </div>

</div>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2><center>Login Form</center></h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="<?php echo base_url(); ?>static/images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-8">
          <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" >

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" >
            <button><input type="submit" name="login" value="Login" ></button>
            <!-- <button type="submit" name="login" >Login</button> -->
            
        </div>
          </div>
        </div>
        </form>
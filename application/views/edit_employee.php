<hr>
<center>
<h2>Edit Profile</h2>
<form method='post' enctype="multipart/form-data">
<?php echo form_open_multipart('admin/file_upload');?>
 <table class="table" style="width:60%"  align="center" width="300px">
 <tr>
 	<td>Employee name</td>
 	<td><div class="form-group"><input class="form-control" type="text" name="emp_name" value= "<?php echo $user[0]['emp_name'] ?>"></div></td> 
 </tr>
 <tr>
 	<td>email</td>
 	<td><div class="form-group"><input class="form-control" type="text" name="email" value= "<?php echo $user[0]['email'] ?>"></div></td>
 </tr>
 <tr>
 	<td>phone</td>
 	<td><div class="form-group"><input class="form-control" type="text" name="phone" value= "<?php echo $user[0]['phone'] ?>"></div></td> 
 </tr>
 <tr>
 	<td>job_title</td>
 	<td><div class="form-group"><input class="form-control" type="text" name="job_title" value= "<?php echo $user[0]['job_title'] ?>"></div></td>
 </tr>
 <tr>
 	<td>date_of_join</td>
 	<td><div class="form-group"><input class="form-control" type="text" name="date_of_join" value= "<?php echo $user[0]['date_of_join'] ?>"></div></td> 
 </tr>
 <tr>
 	<td>address</td>
 	<td><div class="form-group"><input class="form-control" type="text" name="address" value= "<?php echo $user[0]['address'] ?>"></div></td>
 </tr>
 	<tr>
 		<td>photo</td>
 		<td><a href="<?php echo base_url().'images/'.$user[0]['photo'] ?>" target="_blank"><img src="<?php echo base_url().'images/' .$user[0]['photo']?>" width="100"></a></td>
 		<td> <div class="form-group">
                    <input class="form-control"  type="file" name="photo" value= "<?php echo $user[0]['photo'] ?>"> 
                    <input type="hidden"  id="old"  name="old"  value="<?php echo $user[0]['photo']   ?>">
			</div></td>
 	</tr>
 	<tr>
 	<td>department</td>
 	<td><div class="form-group"><input class="form-control" type="text" name="department" value= "<?php echo $user[0]['department'] ?>"></div></td> 
 </tr>
 	<tr>
 	<td>
 		<input class="btn btn-success" type="submit" name="edit" value="Update">
 	</td></tr>
 </table>
 <?php echo form_close(); ?>
 </form>
 </center>
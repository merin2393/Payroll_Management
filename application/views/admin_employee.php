<div class="container">
<h2 align="center">Manage Employee </h2>
<h4><p align="center"></p></h4>
    	
<form method="post" enctype="multipart/form-data" >
 <?php echo form_open_multipart('admin/file_upload');?>
	<table class="table" style="width:60%"  align="center" width="300px">
		
		<tr >
			<th></th>
			<td >
				<div class="form-group">
					<input class="form-control" type="text" placeholder="emp_name" name="emp_name" required="">
				</div>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="email" name="email" required="">
				</div>
			</td>
		</tr>
			<tr>
			<th></th>
			<td>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="phone" name="phone" required="">
				</div>
			</td>
		</tr>
			<tr>
			<th></th>
			<td>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="job_title" name="job_title" required="">
				</div>
			</td>
		</tr>
			<tr>
			<th></th>
			<td>
				<div class="form-group">
					<input class="form-control" type="date" placeholder="date_of_join" name="date_of_join" required="">
				</div>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="house name" name="address" required="">
				</div>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<div class="form-group">
				<input class="form-control"  type="file" name="photo" required="">
				</div>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="department" name="department" required="">
				</div>
			</td>
		</tr>
		
		<tr>
			<th height="20" colspan="2">
				<div class="form-group">
                    <input class="btn btn-success" name="register" type="submit" class="btn btn-danger"  value="REGISTER">
			</th>
		</tr>
		
</table>
</form>
</div>
<hr>
<h2 align="center">View Employee</h2>
<table class="table table-bordered table-striped" border="1">
	<tr>
		<th>Sl No</th>
		<th>Employee name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Job Title</th>
		<th>Date of Join</th>
		<th>Address</th>
		<th>Photo</th>
		<th>Department</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php foreach ($user as $key => $user): ?>
	<tr>	
		<td><?php echo $key+1 ?></td>
		<td><?php echo $user['emp_name'] ?></td>
		<td><?php echo $user['email'] ?></td>
		<td><?php echo $user['phone'] ?></td>
		<td><?php echo $user['job_title'] ?></td>
		<td><?php echo $user['date_of_join'] ?></td>
		<td><?php echo $user['address'] ?></td>
		<td><a href="<?php echo base_url().'images/'.$user['photo'] ?>" target="_blank"><img src="<?php echo base_url().'images/' .$user['photo']?>" width="100"></a></td>
		<td><?php echo $user['department'] ?></td>
		<td><a href="<?php echo base_url().'admin/editEmployee/'.$user['emp_id'] ?>"><button class="btn btn-success">Update</button></a></td>
		<td><a href="<?php echo base_url().'admin/deleteEmployee/'.$user['emp_id'] ?>" onclick="return confirm('do you want to delete this product')"><button class="btn btn-danger">Delete</button></a></td> 

	</tr>
<?php endforeach; ?>
</table>
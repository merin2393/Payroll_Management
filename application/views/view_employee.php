<hr>
<h2 align="center">Employee Details</h2>
<a href="<?php echo base_url().'admin/employee' ?>"><button class="btn btn-success">Register Employee</button></a>
<br><br>
<table class="table table-bordered table-striped" border="1">
	<tr>
		<th>Sl No</th>
		<th>Employee name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Photo</th>
		<th>Job Title</th>
		<th>Date of Join</th>
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
		<td><?php echo $user['address'] ?></td>
		<td><a href="<?php echo base_url().'images/'.$user['photo'] ?>" target="_blank"><img src="<?php echo base_url().'images/' .$user['photo']?>" width="100"></a></td>
		<td><?php echo $user['job_title'] ?></td>
		<td><?php echo $user['date_of_join'] ?></td>
		<td><?php echo $user['department'] ?></td>
		<td><a href="<?php echo base_url().'admin/editEmployee/'.$user['emp_id'] ?>"><button class="btn btn-success">Update</button></a></td>
		<td><a href="<?php echo base_url().'admin/deleteEmployee/'.$user['emp_id'] ?>" onclick="return confirm('do you want to delete this employee')"><button class="btn btn-danger">Delete</button></a></td> 

	</tr>
<?php endforeach; ?>
</table>
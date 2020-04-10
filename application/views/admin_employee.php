<div class="container">
<h2 align="center">Employee </h2>
<h4><p align="center"></p></h4>
    	
<form method="post" enctype="multipart/form-data" >
 <?php echo form_open_multipart('admin/file_upload');?>
	<table class="table" style="width:60%"  align="center" width="300px">
		
		<tr >
			<th></th>
			<td >
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Employee name" name="emp_name" required="">
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
					<textarea class="form-control" placeholder="address" name="address" required=""></textarea>
				</div>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<div class="form-group">
				<small>Add Profile pic</small>
				<input class="form-control"  type="file" name="photo" required="">
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
					<small>Date of join</small>
					<input class="form-control" type="date" value="<?php echo date('Y-m-d') ;?>" placeholder="date_of_join" value="" name="date_of_join" required="">
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

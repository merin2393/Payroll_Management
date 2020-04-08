<h2 align="center">Monthly Salary</h2>
<div>
 <form method="post"  >
  	<?php echo validation_errors(); ?>
	<table class="table" style="width:60%"  align="center" width="50%">
	<tr>
		<th>Employee Name</th>
			<td><div class="form-group">
			<select class="form-control" name="emp_id" required="" selected="selected" >
				<option value="" disabled selected>.......select.......</option>
		<?php  foreach($employee as $key => $employee):?>              
			<option value="<?php echo $employee['emp_id']; ?>" ><?php echo $employee['emp_name'];?>
				</option>
	    <?php  endforeach ?>
		    </select></div>
		</td>
	</tr>
	<tr>
		<th>Salary Date</th>
		<td><div class="form-group">
	        <input class="form-control"  type="date" name="salary_date" required=""></div>
	    </td>
	</tr> 
	<tr>
		<th>Payment type</th>
			<td><div class="form-group">
			<select class="form-control" name="payment_type" required="" selected="selected">
				<option value="" disabled selected>.......select.......</option>     
				<option value="Monthly" >Monthly</option>
				<option value="Advanced" >Advanced</option>
				<option value="Late" >Late</option>
		    </select></div>
		</td>
	</tr>
	<tr>
		<th>Payment Mode</th>
			<td><div class="form-group">
			<select class="form-control" name="payment_mode" required="" selected="selected">
				<option value="" disabled selected>.......select.......</option>     
				<option value="bank" >bank</option>
				<option value="cash" >cash</option>
				<option value="cheque" >cheque</option>
		    </select></div>
		</td>
	</tr>
	<tr>
		<th>salary_amount</th>
		<td><div class="form-group">
		<input class="form-control" type="text" name="salary_amount" id="salary_amount" required="">
		</div></td>
	</tr> 
	<tr>
		<th>dedution</th>
		<td><div class="form-group">
			<input class="form-control" type="text" name="dedution" id="dedution" onkeyup="calculate(this)" onchange='calculate(this);'  required=""></div></td>
	</tr> 
	<tr>
		<th>net-pay</th>
		<td><div class="form-group">
			<input class="form-control" type="text" name="net-pay" id="net-pay" readonly=""></div></td>
	</tr>
		<tr>
				
			<th height="39" colspan="2"><div class="form-group">
                    <input class="btn btn-success" name="salary" value="Add" type="submit" class="btn btn-danger" >
		</tr> 
 	</table>
 </form> 
</div>

<script type="text/javascript">

	
</script>
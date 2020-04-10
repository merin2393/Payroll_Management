<br>	
<h2 align="center">Monthly Salary</h2>
<a href="<?php echo base_url().'admin/viewsalary' ?>"><button class="btn btn-success">View Salary Details</button></a>
<br><br>
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
	        <input class="form-control"  type="text" name="salary_date" value="<?php echo date('d-m-Y') ;?>" readonly=""></div>
	    </td>
	    
	</tr> 
	<tr>
		<th>Salary Month</th>
	    <td><div class="form-group">
	        <input class="form-control"  type="month" name="salary_month"  required=""></div>
	    </td>
	</tr>
	<tr>
		<th>Payment type</th>
			<td><div class="form-group">
			<input type="radio" id="Monthly" name="payment_type" value="Monthly">
  			<label for="Monthly">Monthly</label>
  			<input type="radio" id="Advanced" name="payment_type" value="Advanced">
  			<label for="Advanced">Advanced</label>
  			<input type="radio" id="Late" name="payment_type" value="Late">
  			<label for="Late">Late</label>
			</div>
		</td>
	</tr>
	<tr>
		<th>Payment Mode</th>
			<td><div class="form-group">
			<input type="radio" id="bank" name="payment_mode" value="bank">
  			<label for="bank">bank</label>
  			<input type="radio" id="cash" name="payment_mode" value="cash">
  			<label for="cash">cash</label>
  			<input type="radio" id="cheque" name="payment_mode" value="cheque">
  			<label for="cheque">cheque</label>
			</div>
		</td>
	</tr>
	<tr>
		<th>Salary amount</th>
		<td><div class="form-group">
		<input class="form-control" type="text" name="salary_amount" id="salary_amount" required="">
		</div></td>
	</tr> 
	<tr>
		<th>Dedution</th>
		<td><div class="form-group">
			<input class="form-control" type="text" name="dedution" id="dedution" onkeyup="calculate(this)" onchange='calculate(this);'  required=""></div></td>
	</tr> 
	<tr>
		<th>Net-pay</th>
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


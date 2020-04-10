<br>
<h2 align="center">Edit Salary Details</h2>
<br><br>
<form method="post"  >
  	<?php echo validation_errors(); ?>
	<table class="table" style="width:60%"  align="center" width="50%">
	<tr>
		<th>Employee Name</th>
			<td><div class="form-group">
			<input class="form-control" type="hidden" name="emp_id" value= "<?php echo $user[0]['emp_id'] ?>" readonly="">
			<input class="form-control" type="text" name="emp_name" value= "<?php echo $user[0]['emp_name'] ?>" readonly="">
			</div>
		</td>
	</tr>
	<tr>
		<th>Salary Date</th>
		<td><div class="form-group">
	        <input class="form-control"  type="type" name="salary_date" value="<?php echo $user[0]['salary_date'] ?>" readonly=""></div>
	    </td>
	</tr>
	<tr>
		<th>Salary Month</th>
	    <td><div class="form-group">
	        <input class="form-control"  type="type" name="salary_month" value="<?php echo $user[0]['salary_month']."-".$user[0]['salary_year'] ?>" readonly=""></div>
	    </td>
	</tr> 
	<tr>
		<th>Payment type</th>
			<td><div class="form-group">
			<?php if($user[0]['payment_type']=='Monthly') :?>
			<input type="radio" id="Monthly" name="payment_type"  value="<?php echo $user[0]['payment_type'] ?>" checked="">
  			<label for="Monthly">Monthly</label>
  			<input type="radio" id="Advanced" name="payment_type" value="Advanced">
  			<label for="Advanced">Advanced</label>
  			<input type="radio" id="Late" name="payment_type" value="Late">
  			<label for="Late">Late</label>
  			<?php elseif ($user[0]['payment_type']=='Advanced') :?>
  			<input type="radio" id="Monthly" name="payment_type" value="Monthly"  >
  			<label for="Monthly">Monthly</label>
  			<input type="radio" id="Advanced" name="payment_type" value="<?php echo $user[0]['payment_type'] ?>" checked="">
  			<label for="Advanced">Advanced</label>
  			<input type="radio" id="Late" name="payment_type" value="Late">
  			<label for="Late">Late</label>
  			<?php else :?>
  			<input type="radio" id="Monthly" name="payment_type" value="Monthly"  >
  			<label for="Monthly">Monthly</label>
  			<input type="radio" id="Advanced" name="payment_type" value="Advanced" >
  			<label for="Advanced">Advanced</label>
  			<input type="radio" id="Late" name="payment_type" value="<?php echo $user[0]['payment_type'] ?>" checked="">
  			<label for="Late">Late</label>
  			<?php endif ?>
			</div>
		</td>
	</tr>
	<tr>
		<th>Payment Mode</th>
			<td><div class="form-group">
			<?php if($user[0]['payment_mode']=='bank') :?>
			<input type="radio" id="bank" name="payment_mode"  value="<?php echo $user[0]['payment_mode'] ?>" checked="">
  			<label for="bank">bank</label>
  			<input type="radio" id="cash" name="payment_mode" value="cash">
  			<label for="cash">cash</label>
  			<input type="radio" id="Late" name="payment_mode" value="cheque">
  			<label for="cheque">Late</label>
  			<?php elseif ($user[0]['payment_mode']=='cash') :?>
  			<input type="radio" id="bank" name="payment_mode" value="bank"  >
  			<label for="bank">bank</label>
  			<input type="radio" id="cash" name="payment_mode" value="<?php echo $user[0]['payment_mode'] ?>" checked="">
  			<label for="cash">cash</label>
  			<input type="radio" id="cheque" name="payment_mode" value="cheque">
  			<label for="cheque">cheque</label>
  			<?php else :?>
  			<input type="radio" id="bank" name="payment_mode" value="bank"  >
  			<label for="bank">bank</label>
  			<input type="radio" id="cash" name="payment_mode" value="cash" >
  			<label for="cash">cash</label>
  			<input type="radio" id="cheque" name="payment_mode" value="<?php echo $user[0]['payment_mode'] ?>" checked="">
  			<label for="cheque">cheque</label>
  			<?php endif ?>		
			</div>
		</td>
	</tr>
	<tr>
		<th>Salary amount</th>
		<td><div class="form-group">
		<input class="form-control" type="text" name="salary_amount" id="salary_amount" value="<?php echo $user[0]['salary_amount'] ?>" required="">
		</div></td>
	</tr> 
	<tr>
		<th>Dedution</th>
		<td><div class="form-group">
			<input class="form-control" type="text" name="dedution" value="<?php echo $user[0]['dedution'] ?>"  id="dedution" onkeyup="calculate(this)" onchange='calculate(this);'  required=""></div></td>
	</tr> 
	<tr>
		<th>Net-pay</th>
		<td><div class="form-group">
			<input class="form-control" type="text" name="net-pay" value="<?php echo $user[0]['net_pay'] ?>" id="net-pay" readonly=""></div></td>
	</tr>
		<tr>
				
			<th height="39" colspan="2"><div class="form-group">
                    <input class="btn btn-success" name="edit" value="Edit" type="submit" class="btn btn-danger" >
		</tr> 
 	</table>
 </form> 
<h2 align="center">View salary</h2>
<!-- <form method="post" >
	<input type="text" name="search">
	<input type="submit" name="search">
	<br><br><br>
</form> -->
<table class="table table-bordered table-striped" border="1">
	<tr>
		<th>Sl No</th>
		<th>Employee name</th>
		<th>Salary Date</th>
		<th>Payment Type</th>
		<th>Payment Mode</th>
		<th>Salary Amount</th>
		<th>Dedution</th>
		<th>Net-pay</th>
	</tr>
<?php foreach ($salary as $key => $salary): ?>
	<tr>	
		<td><?php echo $key+1 ?></td>
		<td><?php echo $salary['emp_name'] ?></td>
		<td><?php echo $salary['salary_date'] ?></td>
		<td><?php echo $salary['payment_type'] ?></td>
		<td><?php echo $salary['payment_mode'] ?></td>
		<td><?php echo $salary['salary_amount'] ?></td>
		<td><?php echo $salary['dedution'] ?></td>
		<td><?php echo $salary['net_pay'] ?></td>


	</tr>
<?php endforeach; ?>
</table>
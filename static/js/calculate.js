function calculate(obj){
	console.log("cal");
	var salary_amount = document.getElementById('salary_amount').value;
	var dedution = document.getElementById('dedution').value;
	console.log(dedution);
	var amt = salary_amount-dedution;
	document.getElementById('net-pay').value = amt;

}
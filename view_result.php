<!DOCTYPE html>
<html>
<head>
	<title>View Result</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>

<script>
	var reg1;
	var marks = 0;
	var re_appear;
	var id;
</script>

<?php
	include("header.html");
	include("connect.php");
?>


<form method="post" class="vr_form" id="fetchResult">
<div>
	<label for="sem">Semester</label>
	<select name="sem" id="sem">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
	</select>
</div>

<div>
	<label for="branch">Branch</label>
	<select name="branch" id="branch">
	<option>CSE</option>
	<option>ECE</option>
	<option>EE</option>
	<option>ME</option>
	<option>AUTO</option>
	<option>CIVIL</option>
	</select>
</div>

<div>
	<label for="month">Examination</label>
	<select name="month" id="month" class="exam">
	<option>May</option>
	<option>Nov</option>
	</select>

	<?php
		echo '<select name="year" id="year" class="exam">';
		echo $current_year = date("Y");
		$min_year = 2000;
		for ($current_year = date("Y"); $current_year >= $min_year; $current_year--) 
		{
			echo '<option>'.$current_year.'</option>';
		}
		echo '</select>';
	?>
<div>
	<!-- <input type="submit" name="fetchResult" class="submit" value="View Result" onclick="fetchResult()"></div> -->
<button type="submit" class="submit" onclick="fetchResult()">View Result</button>
</div>
</div>
</form>

<div id="fetchResultTable"></div>

<script>

$("#fetchResult").on("submit", function(e) {
    e['originalEvent'].preventDefault();


});


function fetchResult() {
	$.ajax({
		url : "data-manipulation.php",
		type : "post",
		data : {
			sem: $("#sem").val(),
			branch: $("#branch").val(),
			month: $("#month").val(),
			year: $("#year").val(),
			fetchResult: true
		},
		success: function(response) {
			// console.log(response);
			let result = `<table class="result_table" border=1> <tr class='result_tr' style='border-bottom: solid 1px #fff;'>
				<td class='reg_td'>Registration Number</td>
				<td class='marks_td'>Marks Obtained</td>
				<td class='max_marks_td'>Maximum Marks</td>
				<td class='rep_td' colspan=2>Re-appears</td>
			</tr> 
			${response} </table>`;
			document.querySelector('#fetchResultTable').innerHTML = result;
		} 
	});
}



function checker(){


	let code = [];
	 $.ajax({
		url : "data-manipulation.php",
		type : "post",
		data : {
			sem: $("#sem").val(),
			branch: $("#branch").val(),
			month: $("#month").val(),
			year: $("#year").val(),
			code_query: true
		},  
		success: (response) => {
			code = JSON.parse(response);
			// console.log(JSON.parse(response));
		}
	});

	let test = document.querySelectorAll("button");

	for(let key of test)
		key.addEventListener('click', () => { 
			let str = key.id; 
			id = str.slice(4,5);

			reg1 = $('#reg' + id).text();

			$('#marks' + id).html('<input type="number" class="edit_marks" id="marks'+id+'" name="marks'+id+'" autofocus>');

			$('#rep' + id).html("");

		for (c in code) {

			// console.log('<td><input type="checkbox" id="code1" name="code[]">'+ code[c] +'</td>');
			$('#rep' + id).append('<td class="indiv_rep"><input type="checkbox" class="edit_rep_td" id="code1" value="'+code[c]+'"name="codes">'+ code[c] + '</td>');

		}
		$('#save' + id).html('<input type="button" class="'+id+'" id="save" value="Save" onclick="misc(this)">');
		var marks = $('#marks' + id).val();
		console.log(marks);
	});
}	

function misc(el) {
	
	// console.log("before response"+sem, branch, month, year, reg1, marks);

	let code_array = new Array();

	$('input[name="codes"]:checked').each(function () {
		code_array.push(this.value);
	});

	var re_appear = "";
	re_appear = code_array.join();
	// console.log(marks);

	$.ajax({
		url: "data-manipulation.php",
		type: "post",
		data: {
			sem: $("#sem").val(),
			branch: $("#branch").val(),
			month: $("#month").val(),
			year: $("#year").val(),
			reg: reg1,
			marks,
			re_appear,
			save: true
		},
		success: function(response) {
			console.log("after response");
			console.log(response);
			// console.log("response" + reg1, sem, marks, month, year, branch);
		}
	});
}
</script>

</body>
</html>

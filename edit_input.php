<?php

	$id = $_GET["id"];

	$doctor_name = $_GET["doctor_name"];

	$patient_name = $_GET["patient_name"];

    $date=$_GET["date"];

?>



<h1>Update Record here</h1>



<form method=get action=edit_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	doctor_name: <input type=text name=doctor_name value='<?php echo $doctor_name; ?>'>

	<p>

	patient_name: <input type=text name=patient_name value='<?php echo $patient_name; ?>'>

	<p>

    date: <input type=date name=date value='<?php echo $date; ?>'>

	<p>


	<input type=submit value=edit>

</form>
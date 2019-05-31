<?php

	if($_POST["name"] ==""){
		echo "Dont corect Name";
	}
	
	echo "<br />";
	
	if ($_POST["Email"] =="") {
		echo "Dont corect Email";
		echo "<br />";
	}

	if ($_POST["message"] == ""){
		echo "Dont correct message";
	}

	else {
		header("Location:Test.php");
	}

 


?>
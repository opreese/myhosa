<html>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
<body>
<a href="index.html">Home</a><br>
<br>
hosa search results<br>
<?php
$myfile = fopen("hosa.txt", "r");
while (($hosanumber = fgets($myfile)) !== false) {
	$dtz = fgets($myfile);
	$hosa70 = fgets($myfile);
	$hosa14 = fgets($myfile);
	$hosa11 = fgets($myfile);
	$hosa8 = fgets($myfile);
	$hosa10 = fgets($myfile);
	$hosa34 = fgets($myfile);
	$est_empty_hosa70 = fgets($myfile);
	$est_empty_hosa14 = fgets($myfile);
	$est_empty_hosa11 = fgets($myfile);
	$est_loaded_hosa70 = fgets($myfile);
	$est_loaded_hosa14 = fgets($myfile);
	est_loaded_hosa11 = fgets($myfile);
	$current_location = fgets($myfile);
	$current_status = fgets($myfile);
	$notes = fgets($myfile);
	if (trim($hosanumber, "\n") == $_POST["get_hosa_num"]) {
		$hosa_number_found = true;
		echo "hosa number ";
		echo $hosanumber;
		echo "<br>";
		echo "Hosa submitted: ";
		echo $dtz;
		echo "hos available are:";
		echo "<br>";
		echo "70=";
		echo $hosa70;
		echo " ";
		echo "14=";
		echo $hosa14;
		echo " 11=";
		echo $hosa11;
		echo " 8=";
		echo $hosa8;
		echo "<br>";
		echo "pending break hours are:";
		echo "<br>";
		echo "10=";
		echo $hosa10;
		echo " 34=";
		echo $hosa34;
		echo "<br>";
		echo "Estimated Hosa when Empty<br>";
		echo "70=";
		echo $est_empty_hosa70;
		echo " 14=";
		echo $est_empty_hosa14;
		echo " 11=";
		echo $est_empty_hosa11;
		echo "<br>";
		echo "Estimated Hosa when Loaded<br>";
		echo "70=";
		echo $est_loaded_hosa70;
		echo " 14=";
		echo $est_loaded_hosa14;
		echo " 11=";
		echo $est_loaded_hosa11;
		echo "<br>";
		echo "current_location: ";
		echo $current_location;
		echo "<br>";
		echo "current_status: ";
		echo $current_status;
		echo "<br>";
		echo "notes: ";
		echo $notes;
		break;
		}
	}
fclose($myfile);
if ($hosa_number_found != true) {
	echo "hosa number not found";
	}
?>
</body>
</html>
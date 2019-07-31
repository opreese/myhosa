<?php
function distance($lat1, $lon1, $lat2, $lon2) {

    $pi80 = M_PI / 180;
    $lat1 *= $pi80;
    $lon1 *= $pi80;
    $lat2 *= $pi80;
    $lon2 *= $pi80;

    $r = 6372.797; // mean radius of Earth in km
    $dlat = $lat2 - $lat1;
    $dlon = $lon2 - $lon1;
    $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $dist = $r * $c * 0.621371;
    return $dist;
}
$myfilename = "z".substr($_POST["dest_zip"],0,1).".txt";
$myfile = fopen($myfilename, "r");
while (($zipcode = fgets($myfile)) !== false) {
	$zlat = fgets($myfile);
	$zlng = fgets($myfile);
	if (trim($zipcode, "\n") == $_POST["dest_zip"]) {
		$zipcode_found = true;
		break;
		}
	}
fclose($myfile);

if ($zipcode_found == true) {
	echo distance($zlat, $zlng, $_POST["loc_lat"], $_POST["loc_lng"]);
echo "<br>";
echo "dest zip<br>";
echo $_POST["dest_zip"];
echo "<br>";
echo "zlat<br>";
echo $zlat;
echo "<br>";
echo "zlng<br>";
echo $zlng;
echo "<br>";
echo "loc_lat<br>";
echo $_POST["loc_lat"];
echo "<br>";
echo "loc_lng<br>";
echo $_POST["loc_lng"];
echo $myfilename;

	}

?>

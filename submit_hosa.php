<html>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
<body>
<?php
$notesbr=implode(PHP_EOL,$_POST["notes"]);
$myfile = fopen("hosanumber.txt", "r");
$hosanumber = fgets($myfile);
fclose($myfile);
$hosanumber += 1;
$myfile = fopen("hosanumber.txt", "w");
fwrite($myfile, $hosanumber);
fclose($myfile);
$myfile = fopen("hosa.txt", "a");
fwrite($myfile, $hosanumber.PHP_EOL);
fwrite($myfile, $_POST["dtz"].PHP_EOL);
fwrite($myfile, $_POST["hosa70"].PHP_EOL);
fwrite($myfile, $_POST["hosa14"].PHP_EOL);
fwrite($myfile, $_POST["hosa11"].PHP_EOL);
fwrite($myfile,$_POST["hosa10"].PHP_EOL);
fwrite($myfile,$_POST["hosa34"].PHP_EOL);
fwrite($myfile,$_POST["odh1"].PHP_EOL);
fwrite($myfile,$_POST["odh2"].PHP_EOL);
fwrite($myfile,$_POST["odh3"].PHP_EOL);
fwrite($myfile,$_POST["odh4"].PHP_EOL);
fwrite($myfile,$_POST["odh5"].PHP_EOL);
fwrite($myfile,$_POST["odh6"].PHP_EOL);
fwrite($myfile,$_POST["odh7"].PHP_EOL);
fwrite($myfile, $_POST["est_empty_hosa70"].PHP_EOL);
fwrite($myfile, $_POST["est_empty_hosa14"].PHP_EOL);
fwrite($myfile, $_POST["est_empty_hosa11"].PHP_EOL);
fwrite($myfile, $_POST["est_loaded_hosa70"].PHP_EOL);
fwrite($myfile, $_POST["est_loaded_hosa14"].PHP_EOL);
fwrite($myfile, $_POST["est_loaded_hosa11"].PHP_EOL);
fwrite($myfile, $_POST["current_location"].PHP_EOL);
fwrite($myfile, $_POST["current_status"].PHP_EOL);
fwrite($myfile, $_POST["notes"].PHP_EOL);
fclose($myfile);
?> 
<a href="index.html">MyHOSA.com</a><br><br>
Thanks. Your hosa number is <?php echo $hosanumber; ?>
</body>
</html>
 
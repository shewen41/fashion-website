<?php
echo"Please display". "<br >";

$file = fopen("bumshort.txt", "r") or exit("Unable to open file");
while(!feof($file))
	{
	echo fgets($file)."<br />";
	}
fclose($file);




?>
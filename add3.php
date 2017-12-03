<?php
//header('Content-Type: application/json');
//header('Content-Type: text/html;charset=utf-8');

$myfile = fopen("data.json", "r") or die("Unable to open file!");
$ls1 = fread($myfile,filesize("data.json"));
fclose($myfile);

$ls2 = json_decode($ls1,true);

echo count($ls2);

for($i = 0;$i<count($ls2);$i++){
	$ls2[$i]["synopsis"] = "";
	$ls2[$i]["img"] = "";
	$ls2[$i]["qrc"] = "";
}
//
$file = fopen("data.json","w");
fwrite($file,json_encode($ls2));
fclose($file);

?>
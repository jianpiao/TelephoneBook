<?php
//header('Content-Type: application/json');
//header('Content-Type: text/html;charset=utf-8');

if(isset($_POST["user_data"]) && isset($_POST["password"])){
	if($_POST["password"] === 'wokecp2017.'){
		$data = json_decode($_POST['user_data']);
		if(count($data)>0){
			$file = fopen("data.json","w");
			fwrite($file,json_encode($data));
			fclose($file);
		}
		echo json_encode(array("success" => 1));
		exit;
	}
	echo 1;
}
echo json_encode(array("success" => 0));
?>
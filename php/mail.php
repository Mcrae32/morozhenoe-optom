<?php
$_POST["name"] = $_POST["name"]!="" ? $_POST["name"] : $_REQUEST["name"];
$_POST["phone"] = $_POST["phone"]!="" ? $_POST["phone"] : $_REQUEST["phone"];

if(isset($_POST['name'])) {
	$name = $_POST['name']; 
	if ($name == '') {
		unset($name);
	}
}

if (isset($_POST['phone'])) {
	$phone = $_POST['phone']; 
	if ($phone == '') {
		unset($phone);
	}
}

if (isset($name) && isset($phone)){

	if($_POST["form_type"]==1){
		$address = "klimova@iceberry.ru, FedorovAM@iceberry.ru";
	}else{
		$address = "TolstovaPE@iceberry.ru, ShalaevaEI@iceberry.ru";
	}
	
	
	$sub = "������ �� �������� ������";
	$mes = "Imya: $name \nTelefon: $phone";
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8");
	if ($send == 'true'){
		echo "������ �������!";
	}else{
		echo "������, ������ �� ����������!";
	}
}else{
	echo "�� ��������� �� ��� ����, ����������, ��������� ����� � ��������� ����������� ����.";
}
?>
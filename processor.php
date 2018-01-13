<?php
	include("bd/bd.php");
	$str="";
	//если существуют переменные
	if(isset($_POST["fio"], $_POST["email"], $_POST["question"])){
		$fio= ($_POST["fio"]);
		$email = ($_POST["email"]);
		$question = ($_POST["question"]);
		// вставка в базу
		$query = mysql_query("insert into feedback (fio, email, text) values ('".$fio."','".$email."','".$question."')");
		if ($query == 'true') {
			$str = "Ваш вопрсоc успешно отправлен!";
		} else {
			$str = "Возникла ошибка!".mysql_error();
		}
	}else{
		echo "Не введены данные. Попробуйте еще раз.";
		exit;
	}
	echo $str;
?>
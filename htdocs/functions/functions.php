<?php
	require_once "connect.php";

	function getData($request){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `$request` ORDER BY `id` DESC");
		closeDB();
		return resultToArray ($result);
	}

	function resultToArray($result){
		$array = array();
		while (($row = $result->fetch_assoc()) != null)
			$array[] = $row;
		return $array;
	}

	function checkReg($name, $login, $pass){
		$mysqli = getData('users');
		$textErr = "";

		for ($i=0; $i < count($mysqli); $i++) { 
			if ($mysqli[$i]['login'] == $login) {
				$textErr = "Этот логин уже занят";
				print_r($textErr);
				exit;
			}
		}
		if ($name == "") $textErr = "Введите имя";
		elseif ($login == "") $textErr = "Введите логин";
		elseif ($pass == "") $textErr = "Введите пароль";
		elseif (strlen($name) <= 2 || strlen($name) > 30) $textErr = "Имя должно быть больше 2, но меньше 30 символов";
		elseif (strlen($login) <= 4 || strlen($login) > 30) $textErr = "Логин должен быть больше 4, но меньше 30 символов";
		elseif (strlen($pass) <= 2 || strlen($pass) > 30) $textErr = "Пароль должнен быть больше 6, но меньше 30 символов";
		return $textErr;
	}

	function checkLogIn($login, $pass){
		$mysqli = getData('users');
		$textErr = "";

		if ($login == "") $textErr = "Введите логин";
		elseif ($pass == "") $textErr = "Введите пароль";

		for ($i=0; $i < count($mysqli); $i++) { 
			if ($mysqli[$i]['login'] == $login) {
				if ($mysqli[$i]['password'] == $pass){
					setcookie('name', $mysqli[$i]['name'], time() + 3600, "/");
					setcookie('id', $mysqli[$i]['id'], time() + 3600, "/");
					return $textErr;
				}
				else {
					break;
				}
			}
		}
		$textErr = "Пользователь не найден";
		return $textErr;
	}
?>
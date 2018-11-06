<?php

	class Usuario
	{
		public function login()
		{
			$usuEmail = $_POST['usuEmail'];
			$usuPass = $_POST['usuPass'];
			$link = Conexion::conectar();
			$sql = "SELECT usuNombre, usuPass
					FROM usuarios
					WHERE usuEmail = :usuEmail
					AND usuPass = :usuPass";
			$stmt = $link->prepare($sql);
			$stmt->bindParam(':usuEmail', $usuEmail , PDO::PARAM_STR);
			$stmt->bindParam(':usuPass', $usuPass , PDO::PARAM_STR);
			$stmt->execute();
			if($stmt -> rowCount()==0)
			{
				header('location: formLogin.php?error=1');
			}
			else
			{
				//te logeaste bien
				### rutina de AUTENTICATION
				session_start();
				$_SESSION['login'] = 1;
				//redireccion
				header('location: admin.php?error=1');
				//
			}
		}

		public function logout()
		{
			session_start();
			session_unset();
			session_destroy();
			header('refresh: 3; url = formLogin.php');
		}	
	}
?>
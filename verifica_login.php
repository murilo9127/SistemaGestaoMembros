<?php


session_start();
if(!$_SESSION['usuario']) {
	header('Location: indexLogin.php');

	exit();

}

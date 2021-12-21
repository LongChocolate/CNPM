<?php
	session_start();
	require_once('function.php');
	if (!isset($_SESSION['users'])) {
		header('Location: login.php');
		exit();
	}
	
	if (isset($_GET['controller']))
	{
		$controller = $_GET['controller'];
		if (isset($_GET['action']))
		{
			$action = $_GET['action'];
			$class = $_GET['class'];
		}
		else
		{
			$action = 'index';
			$class = $_GET['class'];
		}
	}
	else
	{
		$controller = strtolower(convert_vi_to_en($_SESSION['loai']));
		$action = 'index';
		if($controller == 'quanli')
		{
			$class = 'nhanvien';
		}
		if($controller == 'nhanvienbanhang')
		{
			$class = 'sanpham';
		}
	}
	require_once('route.php');
?>


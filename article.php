<?php
	require_once("database.php"); //база данных
	require_once("models/articles.php"); //Функции для работы со статьями в блоге 
	
	$link = db_connect();
	$article = articles_get($link, $_GET['id']);
	
	include("views/article.php");
	

?>
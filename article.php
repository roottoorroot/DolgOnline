<?php
	require_once("database.php"); //база данных
	require_once("models/articles.php"); //Функции для работы со статьями в блоге 
	
	$article = article_get($_GET['id'])
	
	include("view/article.php");
	

?>
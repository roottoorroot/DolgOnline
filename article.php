<?php
	require_once("database.php"); //���� ������
	require_once("models/articles.php"); //������� ��� ������ �� �������� � ����� 
	
	$article = article_get($_GET['id'])
	
	include("view/article.php");
	

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My blog</title>
		<Link rel = "stylesheet" href = "style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	</head>
	<body>
		<div class = "container">
			<h1> Первый блог </h1>
			<a href="admin"> Панель администратора </a>
			<div>
				<?php foreach($articles as $a): ?>
				<div class = "article"> 
					<h3> <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a> </h3>
					<em>Последнее изменение: <?=$a['date']?></em>
					<p><?=$a['content']?></p>
				</div>
				<?php endforeach ?>
				<footer>
					<p> Первый блог</br>
					Copyright &copy; 2015 </p>
				</footer>
			</div>	
		</div>
	</body>
</html>
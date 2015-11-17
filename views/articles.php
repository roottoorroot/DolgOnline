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
			<div>
				<?php foreach($articles as $a): ?>
				<div class = "article"> 
					<h3> <a href="article.php?id=<?=$a['id']?>"><?=$article['title']?></a> </h3>
					<em>Опубликовано: <?=$article['date']?></em>
					<p>Статья1</p>
				</div>
				<?php endforeach ?>
				<footer>
					<p> <?=$article['content']?></br>
					Copyright &copy; 2015 </p>
				</footer>
			</div>	
		</div>
	</body>
</html>
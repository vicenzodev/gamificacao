<?php include('src/config.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gamificação</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="sytle/style.css">
</head>
<body>
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'atividades';//Carregamento da url na variável de mesmo nome
		include('src/pages/header.php');
		if(file_exists('src/pages/'.$url.'.php')){
			include('src/pages/'.$url.'.php');//Página encontrada e incluída no site
		}else{
			include('src/pages/404.php');//Página não encontrada
		}
		include('src/pages/footer.php');
	?>
</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
 <title>Шаблон верстки страницы из 3 колонок</title>
	<style type="text/css">
		* { margin:0px; padding:0px; }
		html { height:100%; }
		body { min-height:100%; position:relative; min-width:800px; }
		* html body { height:100%; }
		#header { background:#9393FF; height:70px; width:100%; }

		#content { width:100%; padding-bottom:60px; width:expression(document.body.clientWidth > 800 ? "100%" : "800px"); overflow:hidden; }

		#container1 { width:100%; float:left; margin-right:-180px; }
		#container2 { background:#000000; margin-right:180px; }
		#container3 { width:100%; float:right; margin-left:-200px; }

		#left { background:#AEAE00; width:200px; float:left; }
		#center { background:#D86927; margin-left:200px; }
		#right { background:#C0C0C0; float:right; width:180px; }

		#min_width { width:800px; }

		#footer { position:absolute; bottom:0px; background:#8F9EB1; width:100%; height:60px; }

 </style>
</head>
<body>
	<div id="header">Заголовок страницы</div>

	<div id="content">
		<div id="container1">
			<div id="container2">
				<div id="container3">
					<div id="center">Центральная колонка</div>
				</div>
				<div id="left">Левая колонка</div>
			</div>
		</div>

		<div id="right">Правая колонка</div>

	</div>

	<div id="footer">Копирайт</div>
</body>
</html>




<!DOCTYPE HTML PUBLIC " – //W3C//DTD HTML 4.01 Transitional//EN"
 "http://www.w3.org/TR/html4/loose.dtd">
 <html >
 <head>
	<title>Страница Web </title>
 </head>
 <body> 
	<div name="hat">
		<h1>Шапка</h1>
	</div>
	<div name="main_menu">
		<h1>Главное меню</h1>
	</div>
	<div name="main">
		<h1>Основной раздел</h1>
	</div>
	<p> 
	<?php
		echo "Это базовый документ PHP---------------------";
	?>
	
	
	
	
 </body>
 </html>
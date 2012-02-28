<!DOCTYPE html> 
<html> 
	<head> 
	<title>CyberStore - всё для киборгов</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header" data-position="fixed" data-theme="c">
		<table width="100%">
			<tr>
				<td rowspan="2" style="width:30%;"><img src="logo.gif"></td>
				<td valign="top" align="right" style="padding:5px;">
					<a href="#" data-role="button" data-inline="true">Корзина</a>
					<a href="#" data-role="button" data-inline="true">Вход</a>
				</td>
			</tr>
			<tr>
				<td style="padding:5px;" valign="bottom">
					<div data-role="navbar">
						<ul>
							<li><a href="#">Главная</a></li>
							<li><a href="#">Новости</a></li>
							<li><a href="#">Каталог</a></li>
							<li><a href="#">Помощь</a></li>
						</ul>
					</div>
				</td>
		</table>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Hello world</p>		
	</div><!-- /content -->
	
	<div data-role="footer" data-position="fixed" data-theme="c">
		copyright
	</div>

</div><!-- /page -->

</body>
</html>
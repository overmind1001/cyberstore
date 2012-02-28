<!DOCTYPE html> 
<html> 
	<head> 
	<title>CyberStore - всё для киборгов</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<style>
		.ui-page
		{
			background:white;
		}
		.ui-content
		{
			background:#eee;
		}
		body
		{
			height:100%;
			min-height:100%;
		}
		#mainpage
		{
			height:100%;
			min-height:100%;
		}
		#wrapper 
		{
			background:white;
			height:auto !important;
			margin-bottom:0;
			margin-left:auto;
			margin-right:auto;
			margin-top:0;
			min-height:100%;
			width:900px;
		}
		</style>
</head> 
<body> 

<div id="wrapper">
<div id="mainpage">

	<div data-role="header" data-theme="c">
		<table padding="0" margin="0" border="0" width="100%">
			<tr>
				<td rowspan="2" style="width:30%;"><img src="logo.gif"></td>
				<td valign="top" align="right">
					<a href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 руб.</a>
					<a href="#" data-role="button" data-inline="true">Вход</a>
				</td>
			</tr>
			<tr>
				<td valign="bottom">
					<div data-role="navbar">
						<ul>
							<li><a href="index.php">Главная</a></li>
							<li><a href="#">Новости</a></li>
							<li><a href="#" class="ui-btn-active">Каталог</a></li>
							<li><a href="#">Помощь</a></li>
						</ul>
					</div>
				</td>
		</table>
	</div><!-- /header -->

	<div data-role="content">
					<div id="catalog">
						<table>
							<!--tr>
								<td>
								</td>
								<td>
									<div style="text-align:center;"> 
										<div data-role="controlgroup" data-type="horizontal" class="localnav">
											<a href="#" data-role="button" data-inline="true" class="ui-btn-active">1</a>
											<a href="#" data-role="button" data-inline="true">2</a>
											<a href="#" data-role="button" data-inline="true">3</a>
										</div>
									</div>
								</td>
							</tr-->
							<tr>
								<td style="width:10%; vertical-align:top;">
									<div data-role="collapsible-set" data-theme="c" data-content-theme="d">

										<div data-role="collapsible" data-collapsed="false">
										<h3>Категория 1</h3>
										<ul data-role="listview">
											<li data-theme="b"><a href="#">Подкатегория 1</a></li>
											<li><a href="#">Подкатегория 2</a></li>
											<li><a href="#">Подкатегория 3</a></li>
											<li><a href="#">Подкатегория 4</a></li>
											<li><a href="#">Подкатегория 5</a></li>
										</ul>
										</div>
										
										<div data-role="collapsible">
										<h3>Категория 2</h3>
										<ul data-role="listview">
											<li><a href="#">Подкатегория 1</a></li>
											<li><a href="#">Подкатегория 2</a></li>
											<li><a href="#">Подкатегория 3</a></li>
											<li><a href="#">Подкатегория 4</a></li>
											<li><a href="#">Подкатегория 5</a></li>
										</ul>
										</div>
										
										<div data-role="collapsible">
										<h3>Категория 3</h3>
										<ul data-role="listview">
											<li><a href="#">Подкатегория 1</a></li>
											<li><a href="#">Подкатегория 2</a></li>
											<li><a href="#">Подкатегория 3</a></li>
											<li><a href="#">Подкатегория 4</a></li>
											<li><a href="#">Подкатегория 5</a></li>
										</ul>
										</div>

									</div>
								</td>
								<td style="padding-left:10px; padding-top:6px;">
									<div class="ui-grid-b">
										<div class="ui-block-a">
											<div class="ui-bar ui-bar-c" style="height:200px">
												Товар 1
											</div>
										</div>
										<div class="ui-block-b">
											<div class="ui-bar ui-bar-c" style="height:200px">
												Товар 2
											</div>
										</div>
										<div class="ui-block-c">
											<div class="ui-bar ui-bar-c" style="height:200px">
												Товар 3
											</div>
										</div>
										<div class="ui-block-a">
											<div class="ui-bar ui-bar-c" style="height:200px">
												Товар 4
											</div>
										</div>
										<div class="ui-block-b">
											<div class="ui-bar ui-bar-c" style="height:200px">
												Товар 5
											</div>
										</div>
										<div class="ui-block-c">
											<div class="ui-bar ui-bar-c" style="height:200px">
												Товар 6
											</div>
										</div>
									</div><!-- /grid-b -->
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<div style="text-align:center;"> 
										<div data-role="controlgroup" data-type="horizontal" class="localnav">
											<a href="#" data-role="button" data-inline="true" class="ui-btn-active">1</a>
											<a href="#" data-role="button" data-inline="true">2</a>
											<a href="#" data-role="button" data-inline="true">3</a>
										</div>
									</div></td>
							</tr>
						</table>
					</div>
		
	</div><!-- /content -->
	
	<!--div data-role="footer" data-position="fixed" data-theme="c">
		copyright
	</div-->

</div><!-- /page -->
</div><!-- /wrapper-->
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CyberStore - все для киборгов</title>
	<link rel="stylesheet" type="text/css" href="./..//style.css">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="our_header">
                        <!--?php include "./..//logo.php";?-->
						<div id="logo">
							<img src="./..//logo.gif">
						</div>
                        <?php include "./..//top_menu.php";?>
		</div>
		<div id="middle">
			<div id="container">
				<div id="our_content" data-role="content">
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
				</div>
			
			</div>
                        <?php include "./..//sideLeft.php";
                        printSideLeft("catalog")?>
		</div>
	</div>
        <?php include "./..//footer.php";?>
</body>
</html>
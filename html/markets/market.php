<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome BookStore</title>
<link href = "/css/market.css?ver=0" rel = "stylesheet">
</style>
</head>

<body>
		<!-- menu bar-->
	<div id = "included">
			<br><br>
			<? include $_SERVER['DOCUMENT_ROOT'].'/html/header.php'; ?>
	</div>

	<div id = "container">
			<div id = "header">
				<h2>Market<h2>
			</div>
			<div id = "categorie1-container">
				<div id = "categorie1-header">
  				<h3>CATEGORIE1</h3>
				</div>
				<div id = "embed1">
					<div>
			      <?
			        echo "<a href = 'kategories/professors.php?id=$_GET[id]' target = 'kategorie-list'>PROFESSORS</a>";
			      ?>
			    </div>
			    <div>
			      <?
			        echo "<a href = 'kategories/lectures.php?id=$_GET[id]' target = 'kategorie-list'>LECTURES</a>";
			      ?>
			    </div>
				</div>
			</div>
			<div id = "categorie2-container">
				<div id = "categorie2-header">
					<h3>CATEGORIE2</h3>
				</div>
				<div id = "embed2">
					<?
			      echo "<embed type='text/html' src = 'kategories/professors.php?id=$_GET[id]' id = 'kategorie-list' name = 'kategorie-list'>";
			    ?>
				</div>
			</div>
			<div id = "menu">
				<div>
					<a href = "trade/trade.php">GO</a>
				</div>
			</div>
	</div>

</body>


</html>

<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html lang="es-ES" dir="ltr">
	<head>
		<title>Buscar - index</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Evolution 11.0.2.14 - www.websitex5.com" />
		<meta name="viewport" content="width=960" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?14"></script>
		<script type="text/javascript" src="res/x5engine.js?14"></script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Buscar - index</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Salta el menu principal">Vaya al Contenido</a>
			<a id="imGoToMenu"></a><p class="imHidden">Menu Principal:</p>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>INICIO</span>
							</span>
						</a>
					</li><li id="imMnMnNode5">
						<span class="imMnMnFirstBg">
							<span class="imMnMnTxt"><span class="imMnMnImg"></span>LECTURAS</span>
						</span>
					</li><li id="imMnMnNode7">
						<span class="imMnMnFirstBg">
							<span class="imMnMnTxt"><span class="imMnMnImg"></span>ACTIVIDADES</span>
						</span>
					</li><li id="imMnMnNode8">
						<span class="imMnMnFirstBg">
							<span class="imMnMnTxt"><span class="imMnMnImg"></span>AUTORES</span>
						</span>
					</li><li id="imMnMnNode6">
						<span class="imMnMnFirstBg">
							<span class="imMnMnTxt"><span class="imMnMnImg"></span>MULTIMEDIA</span>
						</span>
					</li>
				</ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Resultados de búsqueda</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>
				  
				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Lea esta página de nuevo">Regreso al contenido</a> | <a href="#imGoToMenu" title="Lea este sitio de nuevo">Regreso al menu principal</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Para utilizar este sitio tienes que habilitar JavaScript</div></noscript>
	</body>
</html>

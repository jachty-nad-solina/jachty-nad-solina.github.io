<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
		<title>Jachty Solina</title>

		<script>
			function resp() {
			    var x = document.getElementById("navigation");
			    if (x.className === "topnav") {
			        x.className += " responsive";
			    } else {
			        x.className = "topnav";
			    }
			}
		</script>

		
	</head>

	<body>
	
		<div class="header">
			<header>
				<a href="o-nas.php"><h1>jachty<span>solina</span></h1>
				<p>wynajem jachtów - Solina</p></a>
			</header>

			<nav>
				<ul class="topnav" id="navigation">
					<li class="icon">
						<a href="javascript:void(0);" style="font-size:15px;" onclick="resp()"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</li>
					<li><a href="o-nas.php">o nas</a></li>
					<li><a href="oferta.php">oferta</a></li>
					<li><a href="galeria.php">galeria</a></li>
					<li><a href="cennik.php">cennik</a></li>
					<li><a href="kontakt.php">kontakt</a></li>
					
				</ul>
			</nav>
		</div>

	

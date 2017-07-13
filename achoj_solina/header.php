<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
		<title>Ahoj Solina! - Czarter jachtów - Tango 780s i Antila 24 </title>

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

	<body >
	
		<div class="header">
			<header>
				<a href="o-nas.php"><h1>ahoj<span>solina</span></h1>
				<p>wynajem jachtów - Solina</p></a>
				<!-- <img src="velero.jpg" height="100" width="100" > -->
			</header>
			<nav>
				<ul class="topnav" id="navigation">
					<li class="icon">
						<a href="javascript:void(0);" style="font-size:15px;" onclick="resp()"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</li>
					<li><a href="o-nas.php">o nas</a></li>
					<li><a href="oferta.php">nasze jachty</a></li>
					<li><a href="galeria.php">galeria</a></li>
					<li><a href="cennik.php">cennik</a></li>
					<li><a href="kontakt.php">kontakt</a></li>
					
				</ul>
			</nav>
			
		</div>
<?php
	try{
		$pdo = new PDO('mysql:host=mysql.hostinger.pl;port=3306;dbname=u122842002_count','u122842002_grzeg','nowehaslo');
		//$pdo = new PDO('mysql:host=mysql.cba.pl;port=3306;dbname=butywsklepie','butywsklepie','sklepzbutami');
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo -> exec("SET NAMES 'utf8'");


		$stmtG = $pdo->prepare("SELECT * FROM counter");
		$stmtG->execute();

		$row = $stmtG->fetchAll(PDO::FETCH_ASSOC);
		$count = $row[0]["count"];
		//echo "print_r:<br>";
		//print_r($row);
		//print_r($row[0]);
		//print_r($row[0]["count"]);
		//echo "<br>echo:<br>";
		//echo $count;
		$countUpdated = $count+1;
		//echo "<br>count++:<br>";
		//echo $countUpdated;
		$stmtU = $pdo->prepare("UPDATE counter SET count = :countUpdated WHERE count = :count");
		$stmtU->bindValue(':countUpdated', $countUpdated, PDO::PARAM_INT);
		$stmtU->bindValue(':count', $count, PDO::PARAM_INT);
		$stmtU->execute();
	}
	catch(PDOException $e){
		echo 'Połączenie nie mogło zostać utworzone: '.$e->getMessage();
		//exit;
	}

?>
<?php
	/*
	$fileName = "counter.html";
	if(file_exists($fileName)) {
		$file=fopen($fileName, "r");
		flock($file, 1);
	    $count=fgets($file, 100); 
		flock($file, 3);
		fclose($file);
		$count++;
	}
	else{
		$count=1;
	}
	$file=fopen($fileName, "w");
	flock($file, 2);
	fwrite($file, $count);
	flock($file, 3);
	fclose($file);
	*/
?>

	

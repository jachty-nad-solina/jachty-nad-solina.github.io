

		<footer>
			<p>
				zajrzyj też: 
				<a href="https://www.facebook.com/JachtAnia/" target="_blank">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
				</a>
			</p>
<?php
	try{
		$pdo = new PDO('mysql:host=mysql.hostinger.pl;port=3306;dbname=u122842002_count','u122842002_grzeg','nowehaslo');
		//$pdo = new PDO('mysql:host=mysql.cba.pl;port=3306;dbname=butywsklepie','butywsklepie','sklepzbutami');
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo -> exec("SET NAMES 'utf8'");


		$stmtG = $pdo->prepare("SELECT count FROM counter");
		$stmtG->execute();

		$row = $stmtG->fetchAll(PDO::FETCH_ASSOC);
		$count = $row[0]["count"];
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
		$file=fopen("$fileName", "r");
		flock($file, 1);
	    $count=fgets($file, 100); 
		flock($file, 3);
		fclose($file);
	}
	else{
		$count=1;
	}
	*/
?>
			<small>odwiedzin: <?php echo $count; ?></small>
			<small>© 2017 Wszelkie prawa zastrzeżone</small>
			<!-- <a id="freepik" href="http://www.freepik.com">graphics designed by Freepik</a> -->
		</footer>
	</body>

</html>
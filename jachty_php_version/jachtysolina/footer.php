

		<footer>
			<p>
				zajrzyj też: 
				<a href="https://www.facebook.com/JachtAnia/" target="_blank">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
				</a>
			</p>
<?php
	if(file_exists("counter.n")) {
		$file=fopen("counter.n", "r");
		flock($file, 1);
	    $count=fgets($file, 100); 
		flock($file, 3);
		fclose($file);
	}
	else{
		$count=1;
	}
?>
			<small>odwiedzin: <?php echo $count; ?></small>
			<small>© 2017 Daniel Stefanik</small>
		</footer>
	</body>

</html>
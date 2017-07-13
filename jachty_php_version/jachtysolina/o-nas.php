<?php 
	include("header.php");
?>
<?php
	if(file_exists("counter.n")) {
		$file=fopen("counter.n", "r");
		flock($file, 1);
	    $count=fgets($file, 100); 
		flock($file, 3);
		fclose($file);
		$count++;
	}
	else{
		$count=1;
	}
	$file=fopen("counter.n", "w");
	flock($file, 2);
	fwrite($file, $count);
	flock($file, 3);
	fclose($file);
?>
	<article id="aboutUs">
		<section class="mainSection">
			<h2>o nas</h2>

			<p>Oferuję Ci czarter jachtów na Zalewie Solińskim, jednym z najpiękniejszych zalewów w Polsce. Zachęcam do podziwiania tego wyjątkowego zakątka Bieszczad z jachtu <span>Tango 780 Sport</span> oraz 
			<span>Antila 24.</span></p>
	 		<p>Tango 780 Sport oraz Antila 24 to wygodne i przestronne konstrukcje przy równocześnie jednej z największych szybkości żeglowania wśród turystycznych jednostek pływających. Tango 780 Soprt to turystyczno-regatowy jacht z pełnym wyposażeniem żeglarskim i hotelowym. Antila 24 to nowoczesny 8 osobowy jacht turystyczny wyposażony we wszystko co potrzebne do spędzenia urlopu pod żaglami.</p>
	 		<p>Przestronne wnętrze to: <br> wygodne mieszkanie dla 8 osób, obszerny kambuz, oddzielona kabina WC, bardzo duża ilość bakist oraz jaskółek, duży wygodny kokpit, łatwy w obsłudze sprzęt pokładowy. Wszystko to zapewni największą satysfakcję z pływania jachtem Tango 780 Sport oraz Antilą 24.</p>
	 		<p>Zapraszamy do rezerwacji telefonicznej: <span>693 469 402</span></p>
 		</section>
 		<section class="aboutUsNav">
 			<a href="galeria.php">
 				<i class="fa fa-camera" aria-hidden="true"></i>
 				<h3> zobacz nasze jachty </h3>
 			</a>
 			<a href="kontakt.php">
 				<i class="fa fa-phone" aria-hidden="true"></i>
 				<h3>skontaktuj się z nami</h3>
 			</a>
 			<a href="cennik.php">
 				<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
 				<h3>zobacz ceny jachtów</h3>
 			</a>
 		</section>
	</article>

<?php 
	include("footer.php");
?>

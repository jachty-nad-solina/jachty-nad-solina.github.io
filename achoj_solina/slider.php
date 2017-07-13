<div class="headerGallery" >
	<div class="slider" >
		<h2>antila 24</h2>
		<div class="slides">
			<img class="mySlides" src="img/antila24/antila24-1.jpeg" style="width:100%">
			<img class="mySlides" src="img/antila24/antila24-2.jpeg" style="width:100%">
			<img class="mySlides" src="img/antila24/antila24-3.jpeg" style="width:100%">
			<img class="mySlides" src="img/antila24/antila24-4.jpeg" style="width:100%">
			<img class="mySlides" src="img/antila24/antila24-5.jpeg" style="width:100%">
			<img class="mySlides" src="img/antila24/antila24-6.jpeg" style="width:100%">
			<img class="mySlides" src="img/antila24/antila24-7.jpeg" style="width:100%">
			<img class="mySlides" src="img/antila24/antila24-8.jpeg" style="width:100%">
			<img class="mySlides" src="img/antila24/antila24-9.jpeg" style="width:100%">
		</div>
	</div>
	<div class="slider" >
		<h2>tango 780 Sport</h2>
		<div class="slides">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-1.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-2.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-3.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-4.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-5.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-6.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-7.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-8.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-9.jpeg" style="width:100%">
			<img class="mySlides2" src="img/Tango_780_Sport/Tango_780_Sport-10.jpeg" style="width:100%">
		</div>
	</div>
	<div>
		<h1>czarter jachtów <br><span>tango 780 Sport</span> <br>i <span>antila 24</span> </h1>
	</div>
</div>
		
		<script>
			var slideIndex = 0;
			carousel1();
			carousel2();
			function carousel1() {
			    var i;
			    var x = document.getElementsByClassName("mySlides");
			    for (i = 0; i < x.length; i++) {
			      x[i].style.display = "none"; 
			    }
			    slideIndex++;
			    if (slideIndex > x.length) {slideIndex = 1} 
			    x[slideIndex-1].style.display = "block"; 
			    setTimeout(carousel1, 2000); 
			}
			function carousel2() {
			    var i;
			    var x = document.getElementsByClassName("mySlides2");
			    for (i = 0; i < x.length; i++) {
			      x[i].style.display = "none"; 
			    }
			    slideIndex++;
			    if (slideIndex > x.length) {slideIndex = 1} 
			    x[slideIndex-1].style.display = "block"; 
			    setTimeout(carousel2, 2000); 
			}
		</script>
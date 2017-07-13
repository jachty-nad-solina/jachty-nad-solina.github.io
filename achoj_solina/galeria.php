<?php 
	include("header.php");

	function showMiniatures($title){
		$pathBuilder = "img/".$title."/".$title."-";
		$i=1;
		$path = $pathBuilder.$i.".jpeg";
		while(file_exists($path)){
			echo '<li><a href='.$path.' title='.$title.'><img src='.$path.'></a></li>';
			$i = $i+1;
			$path = $pathBuilder.$i.".jpeg";
		}		
	}
?>
	<div id="enlargedPicture"></div>
	<article id="gallery">
		<section class="mainSection">
			<h2>galeria</h2>
			<div class="yachts">
				<section class="yacht yacht1">
					<h3>antila24</h3>
					<div class="mainPicture">
						<div class="arrow prev"><</div>
						<!-- <a target="_blank" href="img/antila24/antila24-1.jpeg"> -->
	    					<img class="picture" src="img/antila24/antila24-1.jpeg" alt="antila24">
	  					<!-- </a> -->
	  					<div class="arrow next">></div>
 					</div>
					<ul class="miniature" >
						<?php 
							$title = "antila24";
							showMiniatures($title);
						?>
					</ul>

				</section>
				<section class="yacht yacht2">
					<h3>Tango 780 Sport</h3>
					<div class="mainPicture">
						<div class="arrow prev"><</div>
						<!-- <a target="_blank" href="img/Tango_780_Sport/Tango_780_Sport-1.jpeg"> -->
	    					<img class="picture"  src="img/Tango_780_Sport/Tango_780_Sport-1.jpeg" alt="antila24">
	  					<!-- </a> -->
	  					<div class="arrow next">></div>
 					</div>
					<ul class="miniature" >
						<?php 
							$title = "Tango_780_Sport";
							showMiniatures($title);
						?>
					</ul>
				</section>
			</div>
		</section>
	</article>
	<script>
		function showMiniatures(href, title, it) {
			pictures[it].src = href;
			pictures[it].alt = title;
		}
		function gallery(pictures, miniatures, it){
			miniatures[it].onclick = function(e) {
				e = e || window.event;
				var target = e.target || e.srcElement;
				while(target != this) {
					if (target.nodeName == 'A') {
						showMiniatures(target.href, target.title, it);
						return false;
					}
					target = target.parentNode;
				}
			}
			var imgs = miniatures[it].getElementsByTagName('img');
			for(var i=0; i<imgs.length; i++) {
				var url = imgs[i].parentNode.href;
				var img = document.createElement('img');
				img.src = url;
			}
	 	}

	 	function getPictureNumber(picture){
	 		var res = picture.src.split("-"); 
	 		return parseInt(res[res.length-1].split(".")[0]);
	 	}
	 	function getNewPictureSrc(picNumber, picture){
	 		var res = picture.src.split("-"); 
	 		var pictureSrc=res[0];
	 		for(var i=1;i<res.length-1;i++){
				pictureSrc = pictureSrc+"-"+ res[i];
	 		}
	 		return pictureSrc = pictureSrc+"-"+picNumber+".jpeg";
	 	}
	 	function changePicture(pictures, prevs, nexts, it, miniaturesNumber){

	 		prevs[it].onclick = function(e) {

	 			var picNumber = getPictureNumber(pictures[it]);
	 			if(picNumber<=1){
	 				picNumber = miniaturesNumber; 
	 			}
	 			else{
	 				picNumber = picNumber-1;
	 			}
	 			pictures[it].src = getNewPictureSrc(picNumber, pictures[it])
	 		}

	 		nexts[it].onclick = function(e){
	 			var picNumber = getPictureNumber(pictures[it]);
	 			if(picNumber>=miniaturesNumber){
	 				picNumber = 1; 
	 			}
	 			else{
	 				picNumber = picNumber+1;
	 			}
	 			pictures[it].src = getNewPictureSrc(picNumber, pictures[it])
	 		}
	 	}
	 	function enlarge(pictures, it){
	 		var large = document.getElementById('enlargedPicture');
	 		pictures[it].onclick = function(e) {
	 			
	 			large.style.display="flex";
	 			large.innerHTML = "<div><img src='"+pictures[it].src+"'><i class='fa fa-times' aria-hidden='true'></i></div>";
	 		}
	 		large.onclick = function(e){
	 			large.style.display="none";
	 		}
	 		// var exit = document.getElementsByClassName('exit');
	 		// for(var i=0; i<exit.length;i++){
		 	// 	exit[i].onclick = function(e){
		 	// 		alert();
		 	// 		large.style.display="none";
		 	// 	}
		 	// }
	 		
	 		
	 	}

		var pictures = document.getElementsByClassName('picture');
		var miniatures = document.getElementsByClassName('miniature');
	 	var prevs = document.getElementsByClassName('prev');
		var nexts = document.getElementsByClassName('next');
		

	 	for(var it=0; it<miniatures.length;it++){
	 		gallery(pictures, miniatures, it);
	 		var miniaturesList = miniatures[it].childNodes;
	 		enlarge(pictures, it);
	 		// alert(miniaturesList.length-2);
	 		changePicture(pictures, prevs, nexts, it, miniaturesList.length-2);
	 	}
	</script>

<?php 
	include("footer.php");
?>
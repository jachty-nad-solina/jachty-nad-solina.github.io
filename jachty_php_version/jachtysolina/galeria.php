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
	<article id="gallery">
		<section class="mainSection">
			<h2>galeria</h2>
			<div class="yachts">
				<section class="yacht yacht1">
					<h3>antila24</h3>
					<a target="_blank" href="img/antila24/antila24-1.jpeg">
    					<img class="picture" id="picture1" src="img/antila24/antila24-1.jpeg" alt="antila24">
  					</a>
 
					<ul class="miniature" id="miniature1">
						<?php 
							$title = "antila24";
							showMiniatures($title);
						?>
					</ul>

				</section>
				<section class="yacht yacht2">
					<h3>Tango 780 Sport</h3>
					<a target="_blank" href="img/Tango_780_Sport/Tango_780_Sport-1.jpeg">
    					<img class="picture" id="picture2" src="img/Tango_780_Sport/Tango_780_Sport-1.jpeg" alt="antila24">
  					</a>
 
					<ul class="miniature" id="miniature2">
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

		var pictures = document.getElementsByClassName('picture');
		var miniatures = document.getElementsByClassName('miniature');
	 	
	 	for(var it=0; it<miniatures.length;it++){
	 		gallery(pictures, miniatures, it);
	 	}
	</script>
	<!-- <script>// GALLERY //
		var picture2 = document.getElementById('picture2');
		var miniature2 = document.getElementById('miniature2');
	 
		miniature2.onclick = function(e) {
			e = e || window.event;
			var target = e.target || e.srcElement;
	
			while(target != this) {
	 
				if (target.nodeName == 'A') {
					showMiniatures2(target.href, target.title);
					return false;
				}
	 
				target = target.parentNode;
			}
		}
	 
		function showMiniatures2(href, title) {
			picture2.src = href;
			picture2.alt = title;
		}
	 
		var imgs = miniature2.getElementsByTagName('img');
	 
		for(var i=0; i<imgs.length; i++) {
			var url = imgs[i].parentNode.href;
			var img = document.createElement('img');
			img.src = url;
		}
	</script> -->
<?php 
	include("footer.php");
?>
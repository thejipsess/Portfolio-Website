<?php include 'header.php'; ?>

<title> Portfolio website Jip de Kok </title>
<link rel="shortcut icon" type="image/png" href="IMG/favicon.png"/>

<section id="Abstract">
	<div class="container">
	</div>
</section>

<div class="container2"> 
	<section id="PersonalInfo">
		<h3> <?php echo $lang['personal story title']; ?></h3>
		<p id="Pinfo1">
			<?php echo $lang['personal story']; ?>	
		</p>
		<button type="button" class="btn" id="showMore"><a href="PersonalInfo.php">Show more...</a></button>
	</section>

	<aside class="sideBar" id="indexSideBar">
		<h3>Links</h4>
			<ul>
				<li><a href="Portfolio.php#center">
					<h4>Thesis</h3>
						<img src="IMG/BTRthumbnail.png" alt="Thesis Thumbnail">
					</a>
				</li>

				<li><a href="Portfolio.php#modelingContainer">
					<h4>3D Modeling</h3>
						<img src="IMG/ModelingThumbnail.jpg" alt="3D Modeling Thumbnail">
					</a>
				</li>

				<li><a href="Portfolio.php#pfwContainer">
					<h4>Profielwerkstuk (Highschool end project)</h3>
						<img src="IMG/PFWthumbnail.png" alt="Profielwerkstuk Thumbnail">
					</a>
				</li>

				<li><a href="Portfolio.php#logoContainer">
					<h4>Logo Design</h3>
						<img src="IMG/LOGOthumbnail.jpg" alt="Coming soon!">
					</a>
				</li>
			</ul>
		</aside>


	</div>


<?php include 'footer.php'; ?>
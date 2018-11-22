<?php include 'header.php'; ?>


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

	<aside class="sideBar">
		<h3>Links</h4>
			<ul>
				<li><a href="Portfolio.php#thesisContainer">
					<h4>Bachelor Thesis</h3>
						<img src="IMG/BTRthumbnail.png" alt="Bachelor Thesis Thumbnail">
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

				<li><a onclick="openAlertBar('Unfortunately this section of the website is not yet included.', 'warning')">
					<h4>SoftwareDevelopment</h3>
						<img src="IMG/SWDthumbnail.png" alt="Coming soon!">
					</a>
				</li>
			</ul>
		</aside>


	</div>


<?php include 'footer.php'; ?>
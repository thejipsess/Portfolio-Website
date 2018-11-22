<?php include 'header.php'; ?>


<div class="container" id="story">
	<h2><?php echo $lang["personal info title"]; ?></h2>
	<p>
		<?php echo $lang["personal info text"]; ?>
	</p>
</div>

<aside class="sideBar" id="personalDetails">
	<h2><?php echo $lang["my details"]; ?></h2>
	<ul>
		<li>
			<?php echo $lang["name"]; ?>
		</li>
		<li>
			<?php echo $lang["age"]; ?>
		</li>
		<li>
			<?php echo $lang["gender"]; ?>
		</li>
		<li>
			<?php echo $lang["email"]; ?>
		</li>
		<li>
			<?php echo $lang["linkedin"]; ?>
		</li>
		<li>
			<?php echo $lang["github"]; ?>
		</li>
		<li>
			<?php echo $lang["highschool degree"]; ?>
		</li>
		<li>
			<?php echo $lang["university degree"]; ?>
		</li>
		<li>
			<?php echo $lang["certificate"]; ?>
		</li>
		<li>
			<?php echo $lang["languages"]; ?>
			<li>
				<?php echo $lang["software"]; ?>
			</li>
		</ul>
	</aside>


	<?php include 'footer.php'; ?>
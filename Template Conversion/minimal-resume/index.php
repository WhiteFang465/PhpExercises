
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Minimal Resume Template</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
require_once "Introduction.php";
?>

<!-- Skills and intrest section -->

<div class="sections">
    <?php
    require_once "./skill.php";
    require_once "./Interest.php";
    ?>


    </div>
	<!-- Achievements -->

	<div class="container cards">
		
		<div class="card">
			<div class="skill-level">
				<span>+</span>
				<h2>60</h2>
			</div>

			<div class="skill-meta">
				<h3>Projects</h3>
				<span>Adapting and creating solutions for customer's needs</span>
			</div>
		</div>

			
		<div class="card">
			<div class="skill-level">
				<h2>50</h2>
				<span>%</span>
			</div>

			<div class="skill-meta">
				<h3>Web</h3>
				<span>Applications development integrating third-party services and mobile client(s)</span>
			</div>
		</div>

			
		<div class="card">
			<div class="skill-level">
				<h2>30</h2>
				<span>%</span>
			</div>

			<div class="skill-meta">
				<h3>Technical solutions</h3>
				<span>Such as web services, scripts, configurations</span>
			</div>
		</div>


		<div class="card">
			<div class="skill-level">
				<h2>20</h2>
				<span>%</span>
			</div>

			<div class="skill-meta">
				<h3>Leading</h3>
				<span>Web projects and ensure the quality of delivery</span>
			</div>
		</div>

	</div>

	<!-- Timeeline -->

	<div class="container">
		<ol class="timeline">
		  <li>
		    <p class="line">Experiences</p>
		    <span class="point"></span>
		    <p class="description">
		      Lead Developer @Geronimo
		    </p>
		    <span class="date">Today - Apr. 2016</span>
		  </li>

		  <li>
		    <span class="point"></span>
		    <p class="description">
		      Freelance
		    </p>
		    <span class="date">Apr. 2016 - Sep. 2015</span>
		  </li>

		  		  <li>
		    <p class="line">Education</p>
		    <span class="point"></span>
		    <p class="description">
		      DUT "Métiers du multimédia et de l'internet"
		    </p>
		    <span class="date">2015 - 2013</span>
		  </li>

		  		  <li>
		    <span class="point"></span>
		    <p class="description">
		      Art & Design studies
		    </p>
		    <span class="date">2013 - 2008</span>
		  </li>
		</ol>

	</div>


	<br><br>


	<footer class="container">
		<span style="font-size: 16px; margin-top: ">Coded by <a href="https://newtodesign.com/">New to design </a> Designed by <a href="https://dribbble.com/shots/4342703-Minimal-resume-freebie-for-junior-self-taught-people">Nicolas Meuzard</a></span>
	</footer>


</body>
</html>
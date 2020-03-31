<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="description" content="Mark Blashki Solutions offers a range of website design and development services as well as mobile app programming and consulting.">
	<meta name="keywords" content="Programmer, Developer, mobile, app, IT, solutions, applications, systems, consulting">
	<meta name="author" content="Mark Blashki">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title>Mark Blashki Solutions | Technology Consulting and Software Solutions</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
	<script src="js/index.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/indexStyle.css">
	<!--[if IE]>
		<style type="text/css">
			/* Stop the image stopping mouse clicks but for IE*/
			.rightTriangle {
				filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="../img/rightTriangle.png", sizingMethod='scale');
				background: none !important;
			}
			</style>
	<![endif]-->
</head>
<body onload="Resize()">
	<div class="navBar shadow2">
		<div class="logo">
			<img src="img/logo.png" alt="Mark Blashki Solutions Logo">
		</div>
		<div class="hamburger">
			<img src="img/hamburgerBlue.png" alt="Menu">
		</div>
		<nav class="nav">
			<ul>
				<li><a href="#consulting">Consulting</a></li>
				<li><a href="#development">Development</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
			</ul>
		</nav>
		<div class="login">
			<a href="login.php" class="loginButton">
				<img src="./img/login.png", alt="Login Button">
				<h3 class="smallSubHeading">&nbsp Login</h3>
			</a>
		</div>
	</div>
	<div class="rightTriangle"></div>
	<section class="hero">
		<div class="heroContainer container">
			<img src="img/fullLogo.png" alt="Mark Blashki Solutions Logo">
			<div class="heroText">
				<div class="sloganContainer">
					<h1 class="subheading">Technology Consulting and Software Solutions</h1><br>
					<h2 class="subtitle">Website design and development services, mobile app programming, and consulting.</h2>
					<h4 class="mt1p">Using industry standard techniques and cutting edge technologies, Mark Blashki Solutions is ready to achive tangible results for your business.</h4>
				<div class="buttonContainer"></div>
			</div>
		</div>
	</section>
	<main>
		<section class="consulting" id="consulting">
			<div class="consultingContainer container">
				<div class="heading">
					<span><img src="img/headingMarker.png" alt="heading"></span><h1 class="">Consulting</h1>
				</div>
				<p class="text">Delivering quality advice on many different subjects to boost your business' performance.</p>
				<ul>
					<li class="text">Integrating technology with business</li>
					<li class="text">Systems migration</li>
					<li class="text">Technology implementation</li>
					<li class="text">Machine learning</li>
					<li class="text">Systems restructuring</li>
				</ul>
				<a href="#contact" class="button shadow1">
					<h3>Contact</h3>
					<img src="./img/buttonArrow.png" alt="Arrow">
				</a>
			</div>
		</section>
		<section class="softwareSolutions" id="development">
			<div class="softwareSolutionsContainer container">
				<div class="heading darkTheme">
					<span><img src="img/headingMarker.png" alt="Heading"></span><h1 class="">Design. Develop. Deploy.</h1>
				</div>
				<p class="text darkTheme">Tailored solutions to suit your business. No matter the size.</p>
				<ul>
					<li class="customApplications softwareSolutionSections">
						<h3 class="subtitle darkTheme">Custom Applications</h3>
						<img src="./img/customApplications.png" alt="Custom Applications">
						<ul>
							<li class="text darkTheme">Windows</li>
							<li class="text darkTheme">Android</li>
							<li class="text darkTheme">IOS <span class="comingSoon">(Coming soon)</span></li>
							<li class="text darkTheme">Embedded solutions</li>
						</ul>
					</li>
					<li class="websites darkTheme softwareSolutionSections">
						<h3 class="subtitle darkTheme">Websites</h3>
						<img src="./img/websites.png" alt="Websites">
						<ul>
							<li class="text darkTheme">Modern designs</li>
							<li class="text darkTheme">Range of features</li>
							<li class="text darkTheme">Back-end integration</li>
							<li class="text darkTheme">E-commerce</li>
						</ul>
					</li>
					<li class="systemsDevelopment darkTheme softwareSolutionSections">
						<h3 class="subtitle darkTheme">Systems Development</h3>
						<img src="./img/systemsDevelopment.png" alt="Systems Development">
						<ul>
							<li class="text darkTheme">Server infrastructure</li>
							<li class="text darkTheme">Database integration</li>
							<li class="text darkTheme">Storage systems</li>
							<li class="text darkTheme">Custom solutions</li>
						</ul>
					</li>
				</ul>
					<a href="#contact" class="howItWorksButton darkTheme button shadow1">
						<h3>Contact</h3>
						<img src="./img/buttonArrow.png" alt="">
					</a>
			</div>
		</section>
	</main>
	<section class="portfolio" id="portfolio">
		<div class="portfolioContainer container">
			<div class="heading">
				<span><img src="img/headingMarker.png" alt=""></span><h1 class="">Portfolio</h1>
			</div>
			<div class="portfolioGallery">
				<a class = "project shadow2" href="http://markblashki.com/portfolio/academix/">
					<img src="./img/AcademixHero.PNG" alt="Academix Website" class="shadow1">
					<h3 class="subtitle">Academix</h3>
					<p class="text">An online learning platform for high school students</p>
				</a>
				<a class = "project shadow2" href="http://markblashki.com/portfolio/milliesgarden/">
					<img src="./img/MilliesGardenHero.PNG" alt="Millies Garden Website" class="shadow1">
					<h3 class="subtitle">Millies Garden</h3>
					<p class="text">A plant gallery and order page for succulent arrangement</p>
				</a>
				<a class = "project shadow2" href="http://markblashki.com/portfolio/victoriahouse">
					<img src="./img/VictoriaHouseHero.png" alt=" Website" class="shadow1">
					<h3 class="subtitle">Victoria House</h3>
					<p class="text">Victorian style accommodation on the entrance of the Yarra Valley</p>
				</a>
				<a class = "project shadow2 hidden" href="markblashki.com/portfolio/">
					<img src="./img/.jpg" alt=" Website" class="shadow1">
					<h3 class="subtitle"></h3>
					<p class="text"></p>
				</a>
			</div>
		</div>
	</section>
	<section class="contact" id="contact">
		<div class="contactContainer container">
		<p class="text darkTheme">For more details on how Mark Blashki Solutions can help your business or for general enquiries call or email at:</p>
		<div class="contactDetailsContainer">
			<div class="contactLine phone">
				<img src="./img/phoneIconGray.png" alt="Phone Icon" class="icon">
				<h3 class="subtitle darkTheme">Mobile: <a href="tel:0490 193 446">0490 193 446</a></h3>
			</div>
			<div class="contactLine email">
				<img src="./img/mailIconGray.png" alt="Mail Icon" class="icon">
				<h3 class="subtitle darkTheme">Email: <a href="mailto:markblashki1@gmail.com?Subject=Enquiry">markblashki1@gmail.com</a></h3>
			</div>
			<div class="contactLine socialMedia hidden">
				<img src="./img/" alt="" class="icon">
				<h3 class="subtitle darkTheme"></h3>
			</div>
		</div>
	</section>
</body>
</html>

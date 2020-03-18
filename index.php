<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Mark Blashki</title>
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
			<img src="img/hamburgerBlue.png" alt="Hamburger Menu">
		</div>
		<nav class="nav">
			<ul>
				<li><a href="About">About</a></li>
				<li><a href="Services">Services</a></li>
				<li><a href="Portfolio">Portfolio</a></li>
			</ul>
		</nav>
		
	</div>
	<div class="rightTriangle"></div>
	<div class="hero">
		<div class="heroContainer container">
			<img src="img/fullLogo.png" alt="Mark Blashki Solutions Logo">
			<div class="heroText">
				<div class="sloganContainer">
					<h1 class="subheading">Technology Consulting and Software Solutions</h1>
					<h2 class="subtitle">Helping Business Through Tecnology.</h2>
				</div>
				<div class="buttonContainer">
					<a href="Portfolio" class="button shadow1">
						<h3>Services</h3>
						<img src="./img/buttonArrow.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="consulting">
		<div class="consultingContainer container">
			<div class="heading">
				<span><img src="img/headingMarker.png" alt=""></span><h1 class="">Consulting</h1>
			</div>
			<p class="text">Delivering quality advice on many different subjects to boost your business' performance.</p>
			<ul>
				<li>
					<p class="text">Integrating technology with business</p>
				</li>
				<li>
					<p class="text">Systems migration</p>
				</li>
				<li>
					<p class="text">Technology implementation</p>
				</li>
				<li>
					<p class="text">Machine learning</p>
				</li>
				<li>
					<p class="text">Systems restructuring</p>
				</li>
			</ul>
			<a href="Portfolio" class="button shadow1">
				<h3>Contact</h3>
				<img src="./img/buttonArrow.png" alt="">
			</a>
		</div>
	</div>
	<div class="softwareSolutions">
		<div class="softwareSolutionsContainer container">
			<div class="heading darkTheme">
				<span><img src="img/headingMarker.png" alt=""></span><h1 class="">Design. Develop. Deploy.</h1>
			</div>
			<p class="text darkTheme">Tailored solutions to suit your business. No matter the size.</p>
			<ul>
				<li class="customApplications softwareSolutionSections">
					<h3 class="subtitle darkTheme">Custom Applications</h3>
					<img src="./img/customApplications.png" alt="Custom Applications">
					<ul>
						<li>
							<p class="text darkTheme">Windows</p>
						</li>
						<li>
							<p class="text darkTheme">Android</p>
						</li>
						<li>
							<p class="text darkTheme">IOS <span class="comingSoon">(Coming soon)</span></p>
						</li>
						<li>
							<p class="text darkTheme">Embedded solutions</p>
						</li>
					</ul>
						<a href="./softwareSolutions" class="learnMoreButton button shadow1">
							<h3 >Learn more</h3>
							<img src="./img/buttonArrow.png" alt="">
						</a>
				</li>
				<li class="websites darkTheme softwareSolutionSections">
					<h3 class="subtitle darkTheme">Websites</h3>
					<img src="./img/websites.png" alt="Websites">
					<ul>
						<li>
							<p class="text darkTheme">Modern designs</p>
						</li>
						<li>
							<p class="text darkTheme">Range of features</p>
						</li>
						<li>
							<p class="text darkTheme">Back-end integration</p>
						</li>
						<li>
							<p class="text darkTheme">E-commerce</p>
						</li>
					</ul>
					<a href="./howItWorks" class="howItWorksButton button shadow1">
						<h3>How it works</h3>
						<img src="./img/buttonArrow.png" alt="">
					</a>
				</li>
				<li class="systemsDevelopment darkTheme softwareSolutionSections">
					<h3 class="subtitle darkTheme">Systems Development</h3>
					<img src="./img/systemsDevelopment.png" alt="Systems Development">
					<ul>
						<li>
							<p class="text darkTheme">Server infrastructure</p>
						</li>
						<li>
							<p class="text darkTheme">Database integration</p>
						</li>
						<li>
							<p class="text darkTheme">Storage systems</p>
						</li>
						<li>
							<p class="text darkTheme">Custom solutions</p>
						</li>
					</ul>
					<a href="./contact" class="contactButton button shadow1">
						<h3>Contact</h3>
						<img src="./img/buttonArrow.png" alt="">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="portfolio">
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
				<a class = "project shadow2 hidden" href="markblashki.com/portfolio/">
					<img src="./img/.jpg" alt=" Website" class="shadow1">
					<h3 class="subtitle"></h3>
					<p class="text"></p>
				</a>
				<a class = "project shadow2 hidden" href="markblashki.com/portfolio/">
					<img src="./img/.jpg" alt=" Website" class="shadow1">
					<h3 class="subtitle"></h3>
					<p class="text"></p>
				</a>
			</div>
		</div>
	</div>
	<div class="contact">
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
	</div>
</body>
</html>

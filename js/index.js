$(document).ready(function () {
	// Start by making sure that the page is rightfully resized to suit user's screen
	Resize();
	Scroll();

	// This inverts the arrow image on hover
	$(".button").hover(function () {
		$(this).addClass("buttonHovering shadow3");
		
		if ($(".buttonHovering img").css("filter") != "none") { // Fixes if the button is in darkTheme
			// $(this).removeClass("buttonHovering shadow3");
		}
		
		$(".buttonHovering img").css("filter", "invert(1)");

	}, function () {
		$(".buttonHovering img").css("filter", "none");
		$(this).removeClass("buttonHovering shadow3");
	});

	// Hamburger menu hover
	$(".hamburger img").click(function () {
		$(".nav li").toggle();
		$(".login").toggle();
	});
	
	// Project hover
	$(".project").hover(function () {
		$(this).addClass("shadow3");
	}, function(){
			$(this).removeClass("shadow3");
	});
});

$(window).resize(function () {
	Resize();
});

$(window).scroll(function () {
	Scroll();
});

function Scroll() {
	
}

function Resize(){
	$(".rightTriangle").height(
		$(".hero").outerHeight()
		+ $(".consulting").outerHeight()
		- 100
	);
}

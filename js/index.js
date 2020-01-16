$(document).ready(function () {
	// Start by making sure that the page is rightfully resized to suit user's screen
	Resize();
	Scroll();

	// This inverts the arrow image on hover
	$(".button").hover(function () {
		$(this).addClass("buttonHovering shadow3");
		$(".buttonHovering img").css("filter", "invert(1)");

	}, function () {
		$(".buttonHovering img").css("filter", "none");
		$(this).removeClass("buttonHovering shadow3");
	});

	// Hamburger menu hover
	$(".hamburger img").click(function () {
		$(".nav li").toggle();
		// $(".nav li").slideToggle(1000, "swing");
	});
});

$(window).resize(function () {
	Resize();
});

$(window).scroll(function () {
	Scroll();
});

function Scroll() {
	$(".fadeAsScroll").each(function (i) {
		var bottomOfObject = $(this).position().top + $(this).outerHeight();
		var bottomOfWindow = $(window).scrollTop() + $(window).height();
		if (bottomOfWindow > bottomOfObject) {
			$(this).animate({ "opacity": "1" }, 500);
		}
	});
}

function Resize(){
	$(".rightTriangle").height(
		$(".hero").outerHeight()
		+ $(".consulting").outerHeight()
		- 100
	);
}

function init() {
	window.addEventListener('scroll', function(e) {
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
			shrinkOn = 300;
		if (distanceY > shrinkOn) {
			$("header").addClass("smaller");
		} else {
			$("header").removeClass("smaller");
		}
	});
}

window.onload = init();
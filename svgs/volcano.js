function volcanoDraw(){
$("#volcano").load("svgs/volcano.html", function() {
	anime({
		targets: '.volcanosvg',
		viewBox: "0 0 521 501",
		easing: 'easeInOutSine',
		duration: 750,
	});
});
}
function portraitDraw(){
$("#portrait").load("svgs/portrait.html", function() {
	anime({
		targets: '#portrait .lines path',
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutSine',
		duration: 500,
		delay: function(el, i) { return i * 15 },
	});
});
}
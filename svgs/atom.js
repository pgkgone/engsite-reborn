var pred = 0;
var svgcircle = '<svg style="position:absolute" width="100%" height="100%"><circle class="svgcircle" r="0VW" style="fill:#44459a;  stroke:none;" cx="100%"></circle></svg>';
var textv = '<center><div class="themedesc" style="position: absolute;right: 5vw;z-index: 2;color: white;padding-top: 210px; transform: scale(0); width: 25%;">' +

        '    <h1 style="font-family: Kaushan Script">Study universe</h1>' +
        '    <p style="font-size: 1vw; font-family: Roboto Medium">' +
        '        The Universe is all of space and time and <br>' +
        'Further observational improvements of hundreds of billions of stars <br>' +
        'From studying the movement of galaxies, it has been discovered that the universe,<br>' +
        ' There are many competing hypotheses about the ultimate fate of the universe and about<br>' +
        '</p>' +
        '    </div></center>';
function clearAnimation(){
	$('.animablock').remove();
	$('#ground').remove();
}
function drawCircleAndText(){
	$(".animablock").append(svgcircle);
	anime({
		targets: '.svgcircle',
		r: '45VW',
	});
	$(".animablock").append(textv);
	anime({
						targets: '.themedesc',
						scale: 1,
						delay: 100,
					});
}
$("#map").load("svgs/atom.html", function(){
			$(".region1").mouseover(function() {
				if(pred != 1){
					clearAnimation();
					pred = 1;
					$(".mainblock").before('<div class="animablock"></div>');
					drawCircleAndText();
					$(".animablock").append(mars);
					$(".animablock").append(saturn);
					anime({
						targets: '.mars',
						translateY: 200, // from 100 to 250
						loop: false
					});
					anime({
						targets: '.saturn',
						translateY: 90, // from 100 to 250
						loop: false
					});
					for(var i = 0; i < 9; i++)
					{
						$(".animablock").append(StarGenerator(i, circlepos ));
					}
					for(var i = 0; i < 9; i++)
					{
						anime({
								targets: '.svgstar',
								scale: 1,
								delay: function(el, j) {
								return j * 100;
							},
						});
					}
				}
			}).mouseenter(function() {
			$(".region1").css("stroke-width", "4");
		}).mouseleave(function() {
			$(".region1").css("stroke-width", "0");
		});
		$(".region2").mouseover(function() {
			if(pred != 2){
				clearAnimation();
				pred = 2;
				$(".mainblock").before('<div class="animablock"></div>');
				drawCircleAndText();
			}
		}).mouseenter(function() {
			$(".region2").css("stroke-width", "8");
		}).mouseleave(function() {
			$(".region2").css("stroke-width", "0");
		});
		$(".region3").mouseover(function() {
			if(pred != 3){
				clearAnimation();
				pred = 3;
				$(".mainblock").before('<div class="animablock"></div>');
				$(".mainblock").append('<div id="volcano"  class="animablock" style="position: absolute; bottom: 0;width: 100%;"></div>');
				$(".mainblock").append('<div id="ground" style="position: absolute;bottom: 0;width: 0%;height: 1%;background-color: brown;"></div>');
				anime({
					targets: '#ground',
					width: "100%",
					easing: 'easeInOutSine',
					duration: 750,
				});
				drawCircleAndText();
				volcanoDraw();
			}
		}).mouseenter(function() {
			$(".region3").css("stroke-width", "8");
		}).mouseleave(function() {
			$(".region3").css("stroke-width", "0");
		});
		$(".region4").mouseover(function() {
			if(pred != 4){
				clearAnimation();
				pred = 4;
				$(".mainblock").before('<div class="animablock"></div>');
				$(".map").append('<div id="atom"  class="animablock" style="position: absolute; top: 20vh;"></div>');
				drawCircleAndText();
				atomDraw();
			}
		}).mouseenter(function() {
			$(".region4").css("stroke-width", "4");
		}).mouseleave(function() {
			$(".region4").css("stroke-width", "0");
		});
		$(".region5").mouseover(function() {
			if(pred != 5){
				clearAnimation();
				pred = 5;
				$(".mainblock").before('<div class="animablock"></div>');
				$(".map").append('<div id="portrait" class="animablock" style="position: absolute; top: 20vh;" ></div>');
				drawCircleAndText();
				portraitDraw()
			}
		}).mouseenter(function() {
			$(".region5").css("stroke-width", "8");
		}).mouseleave(function() {
			$(".region5").css("stroke-width", "0");
		});
	//redirects
	$('#unit1').click(function(){ location.href = "tests.php?title=0&part=0"; });
	$('#unit2').click(function(){ location.href = "tests.php?title=1&part=0"; });
	$('#unit3').click(function(){ location.href = "tests.php?title=2&part=0"; });
	$('#unit4').click(function(){ location.href = "tests.php?title=3&part=0"; });
	$('#unit5').click(function(){ location.href = "tests.php?title=4&part=0"; });
});
//redirects
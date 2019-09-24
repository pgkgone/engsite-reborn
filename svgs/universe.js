    var mars = '<img src="mars.png" width="150px" class="mars" style=" position: absolute; left: 25%; z-index: 2;">';
    var saturn = '<img src="saturn.png" width="150px" class="saturn" style=" position: absolute; left: 73%;  z-index: 2;">';
    var svgstar = '<svg style="position:absolute; left: 10VW; top: 10vw; " width="1VW" height="1VW"><circle class="svgcircle" r="0.5VW" style="fill:#FFFFFF;  stroke:none;" cx="0.5VW" cy="0.5VW"></circle></svg>';
    var circlepos = [
        [0.2, 15, 16],
        [0.2, 25, 18],
        [0.3, 26, 40],
        [0.5, 28, 55],
        [0.4, 39, 72],
        [0.5, 60, 78],
        [0.2, 62, 32],
        [0.3, 70, 44],
        [0.3, 85, 78],
    ];
    function StarGenerator(id, posArray){
        var starSize = posArray[id][0];
        var starPosX = 'left: ' + posArray[id][1].toString() + 'vw; ';
        var starPosY = 'top: ' + posArray[id][2].toString() + 'vh; ';
        var starClass = 'class="svgstar" ';
        var svgstar = '<svg style=" position:absolute; ' + starPosX + ' ' + starPosY +'" width="1VW" height="1VW"><circle ' + starClass + 'r="' + starSize.toString() + 'VW" style="fill:#FFFFFF;  stroke:none; transform: scale(0);" cx="0.5VW" cy="0.5VW"></circle></svg>';
        return svgstar;
    }
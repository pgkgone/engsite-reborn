var paterV=document.getElementsByClassName('main-text-only-one')[0].id;
var titleV =  parseInt(paterV/10);
var partV =paterV%10;
document.addEventListener("DOMContentLoaded", function(event) {
    var elements = document.getElementsByClassName("btn");
    var vid = document.getElementById("plyr");
    vid.src="video/"+titleV+"/part_"+(partV+1)+"/1.mp4";
    if(partV==0) {
        for (var i = 0; i < 6; i++) {
            elements[i].addEventListener('click', function () {
                var vid = document.getElementById("plyr");
                vid.src = "video/" + titleV + "/part_" + (partV + 1) + "/" + (parseInt(this.id)) + ".mp4";
                var act = document.getElementsByClassName("act");
                act[0].classList = "btn";
                this.classList = "btn act";
            }, false);
        }
    }
});

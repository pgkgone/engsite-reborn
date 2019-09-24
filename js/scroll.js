$('#cont').bind('wheel DOMMouseScroll', function(event){
    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
        var max = -10000000;
        $( ".anch" ).each(function( index) {
            if(($(this).position().top > max) && ($(this).position().top < 0)){
                max = $(this).position().top;
            }
        });
        document.getElementById("cont").scrollTop += max;
    }
    else {
        var max = 10000000;
        var divscroll = document.getElementById("cont").scrollTop;
        $( ".anch" ).each(function( index) {
            if(($(this).position().top < max) && ($(this).position().top > 100)){
                max = $(this).position().top;

            }
        });
        document.getElementById("cont").scrollTop += max;
    }
    event.preventDefault();
});
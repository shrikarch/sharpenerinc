$(document).ready(function() {
    var weedth = $(window).width();
    var heeight = $(window).height();
    console.log(weedth + "x" + heeight)
    if(weedth > 1441){
        $(".wider").removeClass("row");
        $(".wider").addClass("rowWide");
    }
});
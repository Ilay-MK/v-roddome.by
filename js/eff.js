$(document).ready(function() 
{
    $('nav').on("affixed.bs.affix", function (e) {
        $("#navbar").addClass("navbar-fixed-top");
        $("#navbar").find(".navbar-phone").removeClass("hide");
    });
    
    $('nav').on("affixed-top.bs.affix", function (e) {
        $("#navbar").removeClass("navbar-fixed-top");
        $("#navbar").find(".navbar-phone").addClass("hide");
    });
    
    $(".comand button").popover();

    $(".change-img").click(function(){
        $(".change-img").removeClass("c-i-active");
        img = $(this).attr("data-full");
        target = $(this).attr("data-target");
        $(target).attr('src', img);
        $(this).addClass("c-i-active");
    });
    
});
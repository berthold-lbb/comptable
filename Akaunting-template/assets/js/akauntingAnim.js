// header scroll toggleable class
$(document).ready(function(){
    let i=0;
    $(window).scroll(function () {
        if($(this).scrollTop() > 100){
            $("header").addClass("scrolledHeader");
        }else
        {
            $("header").removeClass("scrolledHeader");
        }
        $("div.sectionOneTextBlock").animate({
            top: "30px"
        })
    })
});
// header scroll toggleable class

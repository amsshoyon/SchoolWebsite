

//js for page loader
var myVar;

function pageloaderjs() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
document.getElementById("preloader").style.display = "none";
document.getElementById("PageToDisplay").style.display = "block";
}

//js for GO Top

var windowH = $(window).height()/2;

$(window).on('scroll',function(){
    if ($(this).scrollTop() > windowH) {
        $("#myBtn").css('display','flex');
    } else {
        $("#myBtn").css('display','none');
    }
});



$(document).ready(function() {
    $("#myBtn").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/

//navbar initialization

$(document).ready(function () {
     $("#respMenu").aceResponsiveMenu({
         resizeWidth: '768', // Set the same in Media query       
         animationSpeed: 'fast', //slow, medium, fast
         accoridonExpAll: false //Expands all the accordion menu on click
     });
});

//Wow initialization

new WOW().init();


//navbar

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 130) {
        $(".top_nav").addClass("navbar-fixed-top");
    }if (scroll < 130) {
        $(".top_nav").removeClass("navbar-fixed-top");
    }
}); 


//members


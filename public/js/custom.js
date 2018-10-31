

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

//Image preview
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

//Delete confirmation

function deleletconfig(){

	$.confirm({
	    title: 'Confirm Delete!',
	    buttons: {
	        confirm: function () {
	            $.alert('Confirme!');
	        },
	        cancel: function () {
	            $.alert('Cancele!');
	        }
	    }
	});

}


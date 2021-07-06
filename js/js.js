$(document).ready(function(){
	
  //	loading function
    
  $(".loading-overlay .lds-circle").fadeOut(1000,function(){
		$(".loading-overlay").fadeOut(500,function(){
			$("body").css("overflow","auto");
			$(this).remove();
		});
	});

    // scroll to top

	$(function(){

		var scroll= $("#scroll-up");

		$(window).scroll(function(){
		   if($(this).scrollTop()>=500){
			   scroll.show();
		   } else{
			   scroll.hide();
		   }

		});
		scroll.click(function(){
		   $("html,body").animate({scrollTop : 0},900);
		});

	});

$(function() {
	$(".btn").click(function() {
		$(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".frame").toggleClass("frame-long");
    $(".signup-inactive").toggleClass("signup-active");
    $(".signin-active").toggleClass("signin-inactive");
    $(".forgot").toggleClass("forgot-left");   
    $(this).removeClass("idle").addClass("active");
	});
});

$(function() {
	$(".btn-signup").click(function() {
  $(".nav").toggleClass("nav-up");
  $(".form-signup-left").toggleClass("form-signup-down");
  $(".success").toggleClass("success-left"); 
  $(".frame").toggleClass("frame-short");
	});
});

$(function() {
	$(".btn-signin").click(function() {
  $(".btn-animate").toggleClass("btn-animate-grow");
  $(".welcome").toggleClass("welcome-left");
  $(".cover-photo").toggleClass("cover-photo-down");
  $(".frame").toggleClass("frame-short");
  $(".profile-photo").toggleClass("profile-photo-down");
  $(".btn-goback").toggleClass("btn-goback-up");
  $(".forgot").toggleClass("forgot-fade");
	});
});

});
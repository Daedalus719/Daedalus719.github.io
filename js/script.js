function menu() {
  var a = document.getElementById("myTopNav");
  if (a.className === "topNav") {
    a.className += " responsive";
  } else {
    a.className = "topNav";
  }
}

$(document).ready(function dropedMenu(){
    $(document).on('click','.dropbtn',function(){
        $('.dropbtn').not(this).next().removeClass('show');
        $(this).next().toggleClass('show');
    });
    $(document).on('click',function(e){
        if(!$(e.target).closest('.dropbtn').length)
            $('.dropbtn').next().removeClass('show');
    });    
});


function videoshow() {
  var x = document.getElementById("video");
  var btnText = document.getElementById("btn");
  if (x.style.display === "block") {
    x.style.display = "none";
	btnText.innerHTML = "Pokaż";
	style.paddingBottom = "56.25%";
  } else {
    x.style.display = "block";
	btnText.innerHTML = "Ukryj";
  }
}

function validate(){
  var imie = document.getElementById("imie").value;
  var nazwisko = document.getElementById("nazwisko").value;
  var email = document.getElementById("email").value;
  var tresc = document.getElementById("tresc").value;
  var error_tresc = document.getElementById("error_tresc");
  
  error_tresc.style.padding = "10px";
  
  var text;
  if(imie.length < 3){
    text = "Wpisz poprawne imię";
    error_tresc.innerHTML = text;
    return false;
  }
  if(nazwisko.length < 3){
    text = "Wpisz poprawne nazwisko";
    error_tresc.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Wpisz poprawny adres Email";
    error_tresc.innerHTML = text;
    return false;
  }
  if(tresc.length <= 10){
    text = "Wpisz więcej niż 15 znaków";
    error_tresc.innerHTML = text;
    return false;
  }
  //alert("Wiadomość wysłana pomyślnie!");
  //return true;
}

var x = window.matchMedia("(max-width: 600px)")
background(x) 
x.addListener(background) 
function background(x) {
  if (x.matches) {
	 $("#dvImage").css("background-image", "url(pic/backgroundphone.jpg)") 
  } else {
var images = ["ac130.jpg", "a10aa.jpg", "b1a.jpg", "b2.jpeg", "background.jpg", "background1.jpg", "background2.jpg", "background3.jpg", "background4.jpg", "c5a.jpg", "f22_raptor.jpg", "uh60.webp"];
    $(function () {
        var i = 0;
        $("#dvImage").css("background-image", "url(pic/" + images[i] + ")");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
            $("#dvImage").fadeOut("slow", function () {
                $(this).css("background-image", "url(pic/" + images[i] + ")");
                $(this).fadeIn(5);
            });
        }, 60000);
    });
  }}




$(document).ready(function(){
  $("#ajaxbtn").click(function(){
    $("#video").load("ajax.txt", function(_responseTxt, statusTxt, xhr){
      if(statusTxt == "success")
        alert("External content loaded successfully!");
      if(statusTxt == "error")
        alert("Error: " + xhr.status + ": " + xhr.statusText);
    });
  });
});



$(document).ready(function dark() {
 
  $(".toggle-switch").on("click", function dark(event){
     $(".article, .articleh, caption, h1").toggleClass("dark");
     $(".article, .articleh, caption, h1").toggleClass("active");   
 });
});



(function($) { "use strict";

	$(document).ready(function(){"use strict";
		
		var progressPath = document.querySelector('.progress-wrap path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).scroll(updateProgress);	
		var offset = 50;
		var duration = 550;
		jQuery(window).on('scroll', function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.progress-wrap').addClass('active-progress');
			} else {
				jQuery('.progress-wrap').removeClass('active-progress');
			}
		});				
		jQuery('.progress-wrap').on('click', function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
		
		
	});
	
})(jQuery); 


setInterval(function() {
  clock();
}, 1000);

function clock()
{
  var time = new Date();
  var hours = time.getHours();
  var minutes = time.getMinutes();
  var seconds = time.getSeconds();
  
  if ($('.h').text() != ((hours < 10 ? "0" : "") + hours)){
     $('.h').text((hours < 10 ? "0" : "") + hours);
     shake($('.h'));
  }
  
  if ($('.m').text() != ((minutes < 10 ? "0" : "") + minutes)) {
    $('.m').text((minutes < 10 ? "0" : "") + minutes);
    shake($('.m'));
  }
  
  if ($('.s').text() != ((seconds < 10 ? "0" : "") + seconds)) {
    $('.s').text((seconds < 10 ? "0" : "") + seconds);
    shake($('.s'));
  }
}

$(document).load(function(){
  clock();
});

function shake(t) {
  t.addClass('shake-constant');
  setTimeout(function() {
    t.removeClass('shake-constant');
  }, 470)
}

// Get the modal
var modal = document.getElementById("Sign_modal");

// Get the button that opens the modal
var btn = document.getElementById("openForm");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




/*login form*/
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('login_container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
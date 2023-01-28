<!DOCTYPE html>
<html lang="pl" >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css'>
<title>Lotnictwo Wojskowe</title>
</head>
<body id="dvImage">
<div class="Nav" id="Nav"> 
	  
<button class="openForm" id="openForm">Zaloguj się/Zarejestruj</button>
<div id="Sign_modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>

<div class="login_container" id="login_container">
	<div class="form-container sign-up-container">
		<form class="log">
			<h4>Stwórz konto</h4>
			<span>Użyj swojego maila do rejestracji</span>
			<input type="text" placeholder="Imie" />
			<input type="text" placeholder="Nazwisko" />
			<input type="email" placeholder="E-mail" />
			<input type="password" placeholder="Hasło" />
			<button class="sign" >Zarejestruj się</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form class="log" >
			<h4>Zaloguj się</h4>
			<span>Użyj swojego konta</span>
			<input type="email" placeholder="E-mail" />
			<input type="password" placeholder="Hasło" />
			<a class="logfo" href="#">Zapomniałeś swoje hasło?</a>
			<button class="sign" >Zaloguj się</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h4>Witaj z powrotem!</h4>
				<p class="logform" >To keep connected with us please login with your personal info</p>
				<button class="sign ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h4>Hello, Friend!</h4>
				<p class="logform" >Enter your personal details and start journey with us</p>
				<button class=" sign ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div></div>
		 <div class="checkbox-wrap ">
         <input type="checkbox" class="toggle-switch">
      <div class="opts">
         <div class="opt-1"><p>light mode</p></div>
         <div class="opt-2"><p>dark mode</p></div>
      </div></div>
</div>

<div class="topNav" id="myTopNav">	
	<a href="index.html"  >Strona Główna</a>
	<div class="dropdown"> <button class="dropbtn">Myśliwce 
    </button>
			<div class="dropdown-content">
			<a href="mysliwce.html">Myśliwce</a>
			<a href="mysliwce.html#F-22_Raptor">F-22 Raptor</a>	
			<a href="mysliwce.html#YF-23_Black_Widow">YF-23 Black Widow</a>
			<a href="mysliwce.html#F-35_Lightning">F-35 Lightning</a>
			<a href="mysliwce.html#F-14_Tomcat">F-14 Tomcat</a>
			<a href="mysliwce.html#F-16_Fighting_Falcon">F-16 Fighting Falcon</a>
		</div></div>
	<div class="dropdown"><button class="dropbtn">Bombowce 
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="bombowce.html">Bombowce</a>
				<a href="bombowce.html#B-2_Spirit">B-2 Spirit </a>
				<a href="bombowce.html#B-1B_Lancer">B-1B Lancer</a>
				<a href="bombowce.html#F-117_Nighthawk">F-117 Nighthawk</a>
				<a href="bombowce.html#B-52_Stratofortress">B-52 Stratofortress</a>
			</div></div>
	<div class="dropdown"><button class="dropbtn">Śmigłowce 
    </button>
  		<div class="dropdown-content">
			<a href="smiglowce.html">Śmigłowce</a>
			<a href="smiglowce.html#AH-64_Apache">AH-64 Apache</a>
			<a href="smiglowce.html#RAH-66_Comanche">RAH-66 Comanche</a>
			<a href="smiglowce.html#UH-60_Black_Hawk">UH-60 Black Hawk</a>
			<a href="smiglowce.html#AH-56_Cheyenne">AH-56 Cheyenne</a>
			<a href="smiglowce.html#EuroCopter_Tiger">EuroCopter Tiger</a>
			<a href="smiglowce.html#Mi-28_Havoc">Mi-28 Havoc</a>
			<a href="smiglowce.html#Ka-50">Ka-50</a>
		</div></div>
	<div class="dropdown"><button class="dropbtn">Samoloty Wsparcia 
    </button>
		<div class="dropdown-content">
			<a href="samoloty_wsparcia.html">Samoloty Wsparcia</a>
			<a href="samoloty_wsparcia.html#A-10_Thunderbolt">A-10 Thunderbolt </a>
			<a href="samoloty_wsparcia.html#V-22_Osprey">V-22 Osprey </a>
			<a href="samoloty_wsparcia.html#SR-71_Blackbird">SR-71 Blackbird</a>
			<a href="samoloty_wsparcia.html#C-5_Galaxy">C-5 Galaxy</a>
			<a href="samoloty_wsparcia.html#C-130_Hercules">C-130 Hercules</a>
			<a href="samoloty_wsparcia.html#AC-130">AC-130</a>
		</div></div>
			<a class="active" href="kontakt.html"  >Kontakt</a>	

<a href="javascript:void(0);" style="font-size:16px" class="icon" onclick="menu()">&#9776;</a>
</div>
<br><br><br>
<div style="text-align:center">
<div class="clock-holder">
<div class='clock'>
  <div class='h shake shake-slow'></div>
  <div class='m shake shake-slow'></div>
  <div class='s shake shake-slow'></div>
</div></div></div>
	<br><br><br><br>
<div id="maincontent" class="maincontent">

<div class="container">
<div class="header1"><b>Formularz Kontaktowy</b></div><br>
  <div id="error_message"></div>
  <form class="contactForm" action="contact.php" method="post" name="contactForm" onsubmit = "return(validate());">
    <div class="row">
      <div class="col-25">
        <label for="imie">Imię</label>
      </div>
      <div class="col-75">
        <input type="text" id="imie" name="imie" placeholder="Podaj swoje imię..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="nazwisko">Nazwisko</label>
      </div>
      <div class="col-75">
        <input type="text" id="nazwisko" name="nazwisko" placeholder="Podaj swoje nazwisko..">
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="plec">Pleć</label>
      </div>
      <div class="col-75">
<label class="radio_btn_container">Mężczyzna
  <input type="radio" checked="checked" name="plec">
  <span class="checkmark"></span>
</label>
<label class="radio_btn_container">Kobieta
  <input type="radio" name="plec">
  <span class="checkmark"></span>
</label>
<label class="radio_btn_container">Inne
  <input type="radio" name="plec">
  <span class="checkmark"></span>
</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">E-mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Podaj swój E-mail..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label >Treść</label>
      </div>
      <div class="col-75">
        <textarea id="message" name="tresc" placeholder="Napisz coś.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label >Plik</label>
      </div>
      <div class="col-75">
	  <input type="file" id="myFile" name="filename">
	      </div>
    </div>
    <div class="row">
      <input type="submit" value="Wyślij">
    </div>
  </form>
  
  
</div>








 
								
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
	
	</div>
<div class="footer">
<form class="newsletterForm" name="newsletterForm">
  <div class="container2">
    <div id="header" class="header">Zasubskrybuj nasz newsletter</div></div>
  <div class="container2" style="background-color:#333">
    <input type="text" placeholder="Adres E-mail" name="email" required>
  </div>
  <div class="container2">
    <input type="Submit" value="Subskrybuj">
  </div>
</form>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
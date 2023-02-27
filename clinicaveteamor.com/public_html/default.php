<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Clínica Vet e Amor</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="imagem/x-icon" href="img/Logo.ico"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<!----1 parte---->

	<div class="hero">
		<nav>
			<h2 class="logo"><a id="loguinho" href="/">VET e AMOR</a></h2>
			<ul>
				<li><a href="/">HOME</a></li>
				<li><a href="php/sobre.php">SOBRE NÓS</a></li>
				<li><a href="php/cadastro.php">CADASTRE-SE</a></li>
			</ul>
			<a href="php/login.php" class="btn">Login</a>	
		</nav>

		<div class="content">
			<h1>Cuide do seu Melhor Amigo </h1> 
			
			
		</div>

		<section class="sobre">
			<div>
			<img id="foto-cachorro" src="img/gato.png" alt="cachorro" >
			</div>
		</section>
	</div>


<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0; background-color: #fde5f3fe;}
.mySlides {display: none}
img {vertical-align: middle;}



/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin-top: 26px;
  margin-left: 50px;
  margin-right: auto;
  margin-bottom: -7px;
  background-color: black;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: grey;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* isso aqui é a cor da setinha com mouse em cima On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: black;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #5e5c5c;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: white;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

#foto-dog{
    height: 600px;
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img id="foto-dog" src="img/doguinhokat.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script> 

	<!----2 parte---->
	<section class="about">
		<div id="sobremim" class="main">
			<img src="img/milene.jpeg"><!---colocar img--->
			<div class="about-text">
				<h2>Sobre Nós</h2>
				<h5>Olá<span> Tudo bem?</span></h5>
				<p>Conheça nossa clínica veterinária, aqui você encontra os melhores profissionais, que vão dar todo amor e carinho para seu PET durante a consulta. Para realizar um agendamento, faça login.</p>

				<h11><a href="php/sobre.php" class="teste">Ler mais...</a></h11>

			</div>
            
		</div>
         
        
	</section>

</body>


<footer>
	<div class="contato">
	  <h3>Contato</h3>
	  <ul>
		<a href="mailto:clinicaveteamor@gmail.com"> Email: clinicaveteamor@gmail.com</a>

		<li><br>Telefone: (11) 96338-3013</li>
	  </ul>
	</div>
  
	
  
	<div class="redes-sociais">
	  <h3>Redes Sociais</h3>
	  <ul>
		<a 	href="https://www.facebook.com/milene.florenciofaris?mibextid=LQQj4d"> 
			<button>Facebook</button> 
		<a href="https://www.instagram.com/clinicaveteamor/"> 
			<button>Instagram</button> 
		</a>
	  </ul>
	</div>
  
	<div class="endereco">
	  <h3>Endereço</h3>
	  <p><br>Avenida Dr Tancredo de Almeida Neves (Norte e Sul), 207 - Módulo 1</p>
	  <p>Cidade: Bragança Paulista - SP</p>
	  <p>CEP: 12914-160</p>
	  
	</div>
	<p><br><br><br><br><br><br>2023 Clínica Veterinária Vet e Amor <br> Desenvolvido por: <a href="https://www.instagram.com/viniiciusflorencio/?ighid=YmMyMTA2M2Y%3D"> 
		<button2>Vinicius Florencio</button2> </p>
	

	
  </footer>
</html>	
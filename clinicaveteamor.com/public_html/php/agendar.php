<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="imagem/x-icon" href="../img/Logo.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Agendamento</title>
    
    <div class="hero">
		<nav>
			<h2 class="logo"><a id="loguinho" href="indexLogado.php">VET e AMOR</a></h2>
			<ul>
				<li><a href="indexLogado.php">HOME</a></li>
				<li><a href="sobre.php">SOBRE NÓS</a></li>
				<li><a href="agendar.php">AGENDAMENTO</a></li>
			</ul>
		</nav>

		<div class="content">
			
			
	</div>
</head>
<body>
    <label id="label">Informe os dados solictados para prosseguir com seu agendamento.</label>
    <p><label for="animal">Animal: </label>
        <input type='text' placeholder="Informe o animal" id='tAnimal' required></p>
    <p><label>Data: </label>
        <input type='date' id="tData"></p>
        <p><label>Hora: </label>
        <input type="time" id="tHora" required></p>
    <button id="zap_btn" onclick="enviarMensagem()">Prosseguir no WhatsApp</button></p>

    <script>
    function enviarMensagem(){
        
    var tDia = document.querySelector('#tAnimal');
    var animal = tAnimal.value;

    var tDia = document.querySelector('#tData');
    var dia = tDia.value;

    var tHora = document.querySelector('#tHora');
    var hora = tHora.value;

        var celular = "5511947775005";
    
    var texto = "Olá! Desejo marcar um atendimento para um " + animal + " no dia " + dia + " ás " + hora + ", seria possível?";
    texto = window.encodeURIComponent(texto);
    
    window.open("https://api.whatsapp.com/send?phone=" + celular + "&text=" + texto, "_blank");
    }
    </script>
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
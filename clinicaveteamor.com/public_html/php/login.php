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

    <title>Login</title>
    
    <div class="hero">
		<nav>
			<h2 class="logo"><a id="loguinho" href="/">VET e AMOR</a></h2>
			<ul>
				<li><a href="/">HOME</a></li>
				<li><a href="sobre.php">SOBRE NÓS</a></li>
				<li><a href="cadastro.php">CADASTRE-SE</a></li>
			</ul>
		</nav>

		<div class="content">
			
			
		</div>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="metodoLogin.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input id="inputUsuario" name="email" name="text" class="input is-large" placeholder="Seu e-mail" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input id="inputSenha" name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" id="botao-entrar" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
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
<?php
    require_once('Connect.php');
    
    class Inserir{
//construtor lek
        public function cadastrar(

        Conexao $conexao,
            string $nomeDaTabela,
            string $nome,
            string $cpf,
            string $telefone,
            string $email,
            string $senha)
                  
    {   

        $nome     =    "";
        $cpf      =    "";
        $telefone =    "";
        $email    =    "";
        $senha    =    "";

        $nome       = $_POST['tNome'];
        $cpf        = $_POST['tCpf'];
        $telefone   = $_POST['tTelefone'];
        $email      = $_POST['tEmail'];
        $senha      = $_POST['tSenha'];

    
        try
        {
            $conn = $conexao->Conectar();//abre a conexao
            $sql  = "insert into $nomeDaTabela (id, nome, cpf, telefone, email, senha) 
            values ('','$nome','$cpf','$telefone','$email','$senha')";//escreve o script
            $result = mysqli_query($conn,$sql);//executa a ação acima.
            if($result){
                echo "<br><br>Cadastro realizado!";
            }

            return;//fechano
        }
        catch(Exception $erro)
        {
            echo $erro;
        }//fim do try catch
    }//fim do cadastrar
    //fim da classe
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css">
    <link rel="shortcut icon" type="imagem/x-icon" href="../img/Logo.ico"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <div class="hero">
    <nav>
        <h2 class="logo"><a id="loguinho" href="/">VET e AMOR</a></h2>
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="sobre.php">SOBRE NÓS</a></li>
            <li><a href="cadastro.php">CADASTRE-SE</a></li>
        </ul>
        <a href="login.php" class="btn">Login</a>
    </div>
    </nav>
</head>
<body>
	<!----1 parte---->
    

    <h3>Cadastre-se</h3>
    <div class="container">
        <form action="" method="POST">

            <div class="input-field">

                <input type="text" name="tNome" id="username"

                    placeholder="Digite seu nome">

                <div class="underline"></div>

            </div>

            <div class="input-field">

                <input type="text" name="tCpf" id="usercpf"

                    placeholder="Digite seu CPF">

                <div class="underline"></div>

            </div>

            <div class="input-field">

                    <input type="text"  name="tTelefone"

                        placeholder="Digite seu telefone">

                    <div class="underline"></div>

            </div>

            <div class="input-field">

                <input type="email"  name="tEmail"

                    placeholder="Digite seu e-mail ">

                <div class="underline"></div>

            </div>

            <div class="input-field">

                <input type="password" name="tSenha" id="password"

                    placeholder="Digite sua senha">

                <div class="underline"></div>

            </div>

            <br>
            
            <div id="campo">
                    <button type="submit" name="cadastro"><h10 href="--------">Enviar</h10></button>
            </div>
        
            <?php
                if(isset($_POST['cadastro'])){
                    $conexao = new Conexao();
                    $cad     = new Inserir();
                    echo $cad->cadastrar($conexao, "cliente",$_POST['tNome'],$_POST['tCpf'],$_POST['tTelefone'],$_POST['tEmail'],$_POST['tSenha']);
                    return;
                }

            ?>

        </form>
        
        
        <p><br>Já possui uma conta?</p>
            <a href="login.php">Iniciar sessão</a>
    </div>
    
</body>

<!---Rodapé-->
<footer>
    <div class="contato">
      <h1>Contato</h1>
      <ul>
        <a href="mailto:clinicaveteamor@gmail.com"> Email: clinicaveteamor@gmail.com</a>

        <li><br>Telefone: (11) 96338-3013</li>
      </ul>
    </div>
  
    
  
    <div class="redes-sociais">
      <h1>Redes Sociais</h1>
      <ul>
        <a 	href="https://www.facebook.com/milene.florenciofaris?mibextid=LQQj4d"> 
            <button>Facebook</button> 

        <a href="https://www.instagram.com/clinicaveteamor/"> 
            <button>Instagram</button> 
        </a>
      </ul>
    </div>
  
    <div class="endereco">
      <h1>Endereço</h1>
      <p>Avenida Dr Tancredo de Almeida Neves (Norte e Sul), 207 - Módulo 1</p>
      <p>Cidade: Bragança Paulista - SP</p>
      <p>CEP: 12914-160</p>
      
    </div>
    <p><br><br><br><br><br><br>2023 Clínica Veterinária Vet e Amor <br> Desenvolvido por: <a href="https://www.instagram.com/viniiciusflorencio/?ighid=YmMyMTA2M2Y%3D"> 
		<button2>Vinicius Florencio</button2> </p>
    

    
  </footer>
</html>


<?php


require_once("Connect.php");
class Consultar{
    


    
public function consultarIndividual(
    Conexao $conexao, 
    string $nomeDaTabela,
    int $id)
{
    try{
        $conn   = $conexao->conectar();
        $sql    = "select * from $nomeDaTabela where id = '$id'";
        $result = mysqli_query($conn,$sql);
        
        while($dados = mysqli_fetch_Array($result)){
            if($dados["id"] == $id){
                echo "\nCódigo: ".$dados["id"]."\nData do agendamento: ".$dados["dataAgendamento"]."\nProcedimento: ".$dados["procedimento"]."\nAnimal: ".$dados["animal"]."\nSexo do Animal: ".$dados["sexoAnimal"];
                return;//Encerrar a operacao
            }//fim do if
        }//fim do while
        echo "Código digitado não foi encontrado!";
    }
    catch(Except $erro)
    {
        echo $erro;
    } 
}//fim do método


public function consultarTudo(Conexao $conexao, string $nomeDaTabela){
    try{
        $conn   = $conexao->conectar();
        $sql    = "select * from $nomeDaTabela";
        $result = mysqli_query($conn,$sql);
        
        while($dados = mysqli_fetch_Array($result)){
          echo "\nCódigo: ".$dados["id"]."\nData do agendamento: ".$dados["dataAgendamento"]."\nProcedimento: ".$dados["procedimento"]."\nAnimal: ".$dados["animal"]."\nSexo do Animal: ".$dados["sexoAnimal"];
        }//fim do while
    }
    catch(Except $erro)
    {
        echo $erro;
    } 
}//fim do método

}//fim do consultar
?>
 <!DOCTYPE html>
 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Vet e Amor</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" type="imagem/x-icon" href="../img/Logo.ico"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
 </head>
 <body>
 <form method="POST">
    <label>Código: </label>
    <input type="number" name="id"/><br><br>

    <button>Consultar</button>
    
    
</form>
<TextArea style="width:300px;height:100px">
        <?php 
            if($_POST['id'] != 0 && $_POST['id'] >= 0){
                $conexao = new Conexao();
                $consul  = new Consultar();
                echo $consul->consultarIndividual($conexao,"agenda",$_POST['id']);
                return;
            }else
            {
                echo $consul->consultarTudo($conexao,"agenda",$_POST['id']);
            }
        ?>
    </TextArea>
        </body>
        </html>


    
 </body>
 </html>
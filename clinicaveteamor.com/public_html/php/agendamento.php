<?php
    require_once('Connect.php');
    
    class InserirAgenda{
//construtor lek
        public function cadastrarAgenda(

        Conexao $conexao,
            string $nomeDaTabela,
            string $dataAgendamento,
            string $procedimento,
            string $animal,
            string $sexoAnimal)
                  
    {   

        $dataAgendamento        =    "";
        $procedimento           =    "";
        $animal                 =    "";
        $sexoAnimal             =    "";


        $dataAgendamento       =  $_POST['tDataAgendamento'];
        $procedimento          =  $_POST['tProcedimento'];
        $animal                =  $_POST['tAnimal'];
        $sexoAnimal            =  $_POST['tSexoAnimal'];


    
        try
        {
            $conn = $conexao->Conectar();//abre a conexao
            $sql  = "insert into $nomeDaTabela (id, dataAgendamento, procedimento, animal, sexoAnimal) 
            values ('','$dataAgendamento','$procedimento','$animal','$sexoAnimal')";//escreve o script
            $result = mysqli_query($conn,$sql);//executa a ação acima.
            if($result){
                echo "<br><br>Foi inserido!";
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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>
<body>
    <form method="POST"><?php
       if($_POST['tDataAgendamento'] != "" && $_POST['tProcedimento'] != "" && $_POST['tAnimal'] != "" && $_POST['tSexoAnimal'] != ""){
        $conexao = new Conexao();
        $cadA     = new InserirAgenda();
        echo $cadA->cadastrarAgenda($conexao, "agenda",$_POST['tDataAgendamento'],$_POST['tProcedimento'],$_POST['tAnimal'],$_POST['tSexoAnimal']);
        return;
    }
        echo "Erro, preencha o campo!";
    ?>
    </form>
    <div><br><label>Data de Agendamento:</label>
    <input type="date" name="tDataAgendamento"></div>

    <div><br><label>Procedimento:</label>
    <input type="date" name="tProcedimento"> </div>

    <div><br><label>Especie do animal:</label>
    <input type="date" name="tAnimal"> </div>

   <div><br><label>Sexo do Animal:</label>
   <input type="date" name="tSexoAnimal"> </div>
</body>
</html>

<style>

html{
	background-color: #fde5f3fe;
    text-align: center;
    
    

}







</style>
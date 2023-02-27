<?php
    class Conexao{
            public function conectar(){
                try{
                    $conn = mysqli_connect('localhost','u424235430_root','Gabi0607','u424235430_vetin');
                if($conn){
                        //echo "\nConectado com sucesso!";
                    return $conn;
                }
            }catch(Except $erro){
                    echo $erro;
            }
        }//fim do conectar
    }//fim da classe

?>
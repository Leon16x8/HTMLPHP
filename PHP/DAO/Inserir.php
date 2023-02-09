<?php
      namespace Projeto\HTMLPHP\PHP\DAO;

      require_once("../DAO/Conexao.php");

      use Projeto\HTMLPHP\PHP\DAO\Conexao;
    
    class Inserir{
        public function Cadastrar(Conexao $conexao, string $nomeDaTabela, string $nome, string $telefone){
            try{
                $conn = $conexao->Conectar();//Abrindo conexao com banco
                $sql = "insert into $nomeDaTabela (codigo, nome, telefone) values ('', '$nome', '$telefone')";//Escrevi o script
                $result = mysqli_query($conn, $sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!

                if($result){
                    return "<br><br>|-----------Inserido com Sucesso-----------|";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do cad
    }//fim da class
?>


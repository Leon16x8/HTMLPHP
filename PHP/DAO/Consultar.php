<?php
      namespace Projeto\HTMLPHP\PHP\DAO;

      require_once("../DAO/Conexao.php");

      use Projeto\HTMLPHP\PHP\DAO\Conexao;

    class Consultar{
        public function consultarIndividual(Conexao $conexao, string $nomeDaTabela, int $codigo){
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_array($result)){
                    if($dados['codigo'] == $codigo){
                        echo " Codigo: " . $dados["codigo"] . " Nome: " . $dados["nome"] . " Telefone: " . $dados["telefone"];
                        return;
                    }
                }
                echo "Código digitado não foi encontrado!";
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim da função Consultar Individual

        public function consultarTudo(Conexao $conexao, string $nomeDaTabela){
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_array($result)){
                        echo " Codigo: " . $dados["codigo"] . " Nome: " . $dados["nome"] . " Telefone: " . $dados["telefone"];
                }
            }catch(Except $erro){
                echo $erro;
            }
        }
    }//fim da class consultar
?>


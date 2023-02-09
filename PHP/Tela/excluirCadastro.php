<?php
namespace Projeto\HTMLPHP\Tela;

require_once("../DAO/Conexao.php");
require_once("../DAO/Excluir.php");

use Projeto\HTMLPHP\PHP\DAO\Conexao;
use Projeto\HTMLPHP\PHP\DAO\Excluir;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <form method="post" >
        <label>Codigo: </label>
        <input type="number" name="tCodigo" required/><br><br>

        <button>Excluir</button>

        <?php
        if($_POST['tCodigo'] > 0){
            $conexao = new Conexao();
            $exc = new Excluir();
            echo $exc->excluir($conexao, "pessoa", $_POST['tCodigo']);
            return;
        }
        echo "Informe um código válido!";
        
        ?>
    </form>
    <br><a href="../Tela/inserirCadastro.php"><button>Inserir</button></a>
    <a href="../Tela/atualizarCadastro.php"><button>Atualizar</button></a>
    <a href="../Tela/consultarCadastro.php"><button>Consultar</button></a>
</body>
</html>
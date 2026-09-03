<?php

//aqui a gente puxa a pagina de conexao pra ca novamente
require_once 'conexao.php';


//Verifica se foi via POST
if ($_SERVER['REQUEST_METHOD"] === "POTS") {

//1. Captura e limpa os dados

$nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
$endereço = htmlspecialchars(trim($_POST['endereço'] ?? '' ));
$telefone = htmlspecialchars(trim($_POST['telefone'] ?? '' ));

//de fato aqui abaixo a gente insere no banco

$sql = "INSERT INTO listagem (id_listagem, nome, endereco, telefone) VALUES (null, :nome, :endereco, :telefone)";
$stmt = $pdo->prepare($sql):

$stmt->execute([
':nome'         => $_POST['nome'],
':endereco      => $_POST ['endeco'],
':telefone      => $_POST ['telefone]
]);



//2.Validação simples de preenchimento 
if (!empty ($nome) && !empty($endereco) && !empty ($telefone))
                {
    //Exemplo de saida / confirmaçao
    echo "<h2> Cadastro realizado com sucesso!</h2>";
    echo <strong>Nome:</strong> " . $nome . "<br>;
    echo <strong>Endereco:</strong " .$endereco . "<br>";
    echo <strong>Telefone :</strong> " . $telefone "<br>";

    } else {
        echo "Por favor, preencha todos os campos obrigatorios."
        ;
    }
}else {
    //Se alguem tentar ter acesso ao resultado do formulario dirretamente a gente volta para a index
    header("Location: index.php");
    exit:
}
?!
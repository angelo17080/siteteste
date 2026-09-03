<?php
////////////////////////////////////////////////
 require_once."conexao.php";
 //////////////////////////////////////////////
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagem de banco de dados</title>
</head>
<body>
    <div style="justify-content: center; text-align:left; margin-left: 30%; margin-right: 30%; background: linear-gradient (white); border: solid 2px;">
        <form action="processa.php" method="POST">
        <h1>Cadastro</h1>
        <label>Nome</label>
        <input name ="nome" placeholder="Seu nome aqui"</input><br>

        <label>Endereço</label><br>
        <input name="endereço" pleceholder="Seu endeço aqui"></input><br>

        <label>telefone</label><br>
        <input name="telefone" placeholder="Seu telefone"></input<br>
        <br>
        <input type="submit"</input>
</form>

    <?php 

        $sql = "SELECT * FROM listagem";
        $resultado = $pdo->query($sql);

        // A FUNÇÃO FETCH() PEGA UMA LINHA POR VEZ DO BANCO DE DADOS

        while ($linha = $resultado -> fetch(PDO::FETCH_ASSKC)) {
            
        echo "________________________<br>";
        echo "Nome:" . $linha [ "nome"] . "<br>";
        echo "Endereço: " . $linha ["endereço"] . "<br>";
        echo "Telefone:" . $linha ["telefone"] . "<br>";

        }
    ?>
    </div>
</body>
</html>
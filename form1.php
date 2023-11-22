<?php

if(isset($_POST["submit"]))
{
    include_once('config.php');
    $nome = $_POST["nome"];
    $cargo = $_POST["cargo"];
    $num_identificacao = $_POST["num_identificacao"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    

    $response = mysqli_query($conexao, "INSERT INTO policial(nome,cargo,num_identificacao,telefone,email) 
VALUES('$nome','$cargo','$num_identificacao','$telefone','$email')");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
        <div class="form">
            <form action="form2.php" method="post">
              <label for="nome">Nome</label>
              <input type="text" name="nome" id="nome" placeholder="Inserir Nome"><br>
              
              <label for="cargo">Cargo</label>
              <input type="text" name="cargo" id="cargo" placeholder="Inserir o cargo"><br>

              <label for="num_identificacao">Identificação</label>
              <input type="text" name="num_identificacao" id="num_identificacao" placeholder="Inserir o numero de Identificação"><br>

              <label for="telefone">Telefone</label>
              <input type="text" name="telefone" id="telefone" placeholder="Inserir o telefone"><br>

              <label for="email">E-mail</label>
              <input type="text" name="email" id="email" placeholder="Inserir E-mail"><br>

              <input type="submit" name="submit" id="submit">


            </form>
        </div>
    </main>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}
    </style>
</body>
</html>
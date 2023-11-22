<?php

if(isset($_POST["submit"]))
{
    include_once('config.php');
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $descricao = $_POST["descricao"];
    $lista_crimes = $_POST["lista_crimes"];
    

    $response = mysqli_query($conexao, "INSERT INTO criminal(nome,cpf,descricao,lista_crimes) 
VALUES('$nome','$cpf','$descricao','$lista_crimes')");
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
            <form action="" method="post">
              <label for="nome">Nome</label>
              <input type="text" name="nome" id="nome" placeholder="Inserir Nome"><br>
              
              <label for="cpf">cpf</label>
              <input type="text" name="cpf" id="cpf" placeholder="Inserir o cpf"><br>

              <label for="descricao">Descrição</label>
              <input type="text" name="descricao" id="descricao" placeholder="Descrição:"><br>

              <label for="lista_crimes">Lista de Crimes</label>
              <input type="lista_crimes" name="lista_crimes" id="lista_crimes" placeholder="Lista de crimes"><br>

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
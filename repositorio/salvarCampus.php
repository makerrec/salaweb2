<?php
    try{
        $conexao = new PDO("mysql:host=localhost; dbname=projetoweb21.1","root","");
    }catch(PDOException $e){
        die("Ocorreu um erro inesperado" . $e->getMessage());
    }

    $nome=$_POST['nome'];
    $cep = $_POST['cep'];

    try{
        $sql= "insert into campus (CEP, nomeCampus) values ('$cep','$nome')";
        $conexao->exec($sql);
        
        echo "Salvo com sucesso !!!";
    }catch(PDOExeption $e){
        die("Ocorreu um erro" . $e->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../arquivos/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <a href="../index.php" class="btn btn-outline-secondary" role="button">Voltar</a>
</body>

</html>
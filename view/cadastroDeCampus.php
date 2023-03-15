<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Campus</title>
    <script src="../arquivos/jquery/jquery-3.3.1.slim.min.js"></script>
    <link href="../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../arquivos/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Campus</h1>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row mb-3">
                <div class="col col-md-8">
                    <label class="form-label" for="idnome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="idnome">
                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idcep">CEP</label>
                    <input class="form-control" type="number" name="cep" id="idcep">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col col-md-6">
                    <label class="form-label" for="idnome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="idnome">
                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idcep">CEP</label>
                    <input class="form-control" type="number" name="cep" id="idcep">
                </div>
                <div class="col col-md-2">
                    <label class="form-label" for="idcep">CEP</label>
                    <input class="form-control" type="number" name="cep" id="idcep">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>
</body>

</html>
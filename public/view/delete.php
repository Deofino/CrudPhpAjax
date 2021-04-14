<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE PHP </title>
    <?php include_once('./components/link-css.php') ?>
    <link rel="stylesheet" href="../css/delete.css">
</head>

<body>
    <?php include_once('./components/header.php') ?>

    <main class="bg-dark d-flex justify-content-center align-items-center " style="padding: 150px 0 50px;">
        <div class="container bg-light px-3 py-4 rounded">
        <h1 class="display-3 black bold">5. Delete</h1>
            <h2 class="black">Tome cuidado agora, esta pagina está encarregada de excluir dados do banco de dados!!</h2>
            <hr>
            <div class="alert alert-success border border-success d-none shadow-regular" id="alerta_success">
                <li id="li-valid">Mensagem deletada com sucesso!</li> 
            </div>
            <div class="alert alert-danger border border-danger d-none shadow-regular" id="alerta_error">
                <li id="li-invalid">Eita, algo de errado aconteceu :C</li> 
            </div>
            <div class="content px-3 py-2 mx-auto content rounded shadow-regular border-dark table-responsive" id="content">
             
            </div>
        </div>
    </main>

    <?php include_once('./components/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/delete.js"></script>
</body>

</html>
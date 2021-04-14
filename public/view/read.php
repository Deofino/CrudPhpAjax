<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ PHP </title>
    <?php include_once('./components/link-css.php') ?>
    <link rel="stylesheet" href="../css/readC.css">
</head>

<body>
    <?php include_once('./components/header.php') ?>

    <main class="bg-dark d-flex justify-content-center align-items-center " style="padding: 150px 0 50px;">
        <div class="container bg-light px-3 py-4 rounded">
        <h1 class="display-3 black bold">3. Read</h1>
            <h2 class="black">Bem aqui vamos ver os dados que estão cadastrados. </h2>
            <hr>
            <div class="content px-3 py-2 mx-auto content rounded shadow-regular border-dark table-responsive" id="content">
             
            </div>
        </div>
    </main>

    <?php include_once('./components/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/readed.js"></script>
</body>

</html>
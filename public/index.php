<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP </title>
    <?php include_once('./view/components/link-css.php') ?>
    <link rel="stylesheet" href="./css/headerC.css">
    <link rel="stylesheet" href="./css/homeC.css">
    <link rel="stylesheet" href="./css/footerC.css">
</head>

<body>

    <header id="header" class="position-fixed top-0 bg-navbar w-100 header shadow py-3">
        <nav class="mx-auto navbar px-3">
            <a href="./index" class="a-image w-25">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="PHP" class="img-fluid logotipo">
            </a>
            <ul class="d-flex w-75  justify-content-between uls align-items-center">
                <li><a href="./view/inserted">Insert</a></li>
                <li><a href="./view/read">Read</a></li>
                <li><a href="./view/update">Update</a></li>
                <li><a href="./view/delete">Delete</a></li>
            </ul>
        </nav>
    </header>

    <main class="bg-dark d-flex justify-content-center align-items-center" style="padding: 150px 0 50px;">
        <div class="container bg-light px-5 py-4 rounded border">
            <h1 class="display-3 bold">1. HOME</h1>
            <h2 class="">Você pode acessar e realizar o CRUD completo PHP nos links na barra de navegação superior.</h2>
            <hr>
            <p><strong>Insert:</strong> A parte de inserção nada mais que é um cadastra dos dados no banco de dados do nosso sistema</p>
            <p><strong>Read:</strong> A parte de leitura quando você pega esses dados cadastrados e mostra para o cliente, usuario, ou mesmo programadores em faze de desenvolvimento ou testes</p>
            <p><strong>Update:</strong> O atualização você tem a capacidade de alterar esses dados já cadastrados, alterando valores, e até mesmo campos!</p>
            <p><strong>Delete:</strong> O exclusão de um dado... Pode ser muito perigoso tenha cuidado, esses dados podem ser importante e uma vez deletados não irão voltar nunca mais.</p>
            <hr>
            <h2 class="h2 bold">-Um sistema de CRUD simples em PHP</h2>
            <p>Um CRUD feito sobre sistema de MENSAGENS, ou seja, você vai poder inserir uma nova mensagem, ler, atualizar e deletar uma mensagem.</p>
            <h2 class="h2 bold">-Requisições AJAX</h2>
            <p>Usamos o AJAX para poder fazer esse CRUD e até mesmo validações assíncronas (não atualiza a página).</p>

        </div>
    </main>

    <footer class="container-fluid d-flex align-items-center">
        <div class="footer bg-dark rounded">
            <div class="">
                <ul class="menu">
                    <h3><a id="topo">Inicio</a></h3>
                    <li><a href="./view/inserted">Insert</a></li>
                    <li><a href="./view/read">Read</a></li>
                    <li><a href="./view/update">Update</a></li>
                    <li><a href="./view/delete">Delete</a></li>
                </ul>
            </div>

            <div class="copy">
                <p>Copyright <i class="far fa-copyright"></i> 2021</p>
                <hr>
                <p>CRUD Guilherme Delfino Narciso nº12</p>
            </div>
            <div class="redes">
                <ul class="sociais">
                    <h3>Redes sociais</h3>
                    <li><a href=""><i class="fab fa-facebook-square"></i> Facebook</a></li>
                    <li><a href=""><i class="fab fa-youtube"></i> Youtube</a></li>
                    <li><a href=""><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href=""><i class="fab fa-linkedin"></i> Linkedin</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.querySelector('#topo').addEventListener('click', (evt) => {
            window.scrollTo(0, 0);
        })
    </script>
</body>

</html>
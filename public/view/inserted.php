<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT PHP</title>
    <?php include_once('./components/link-css.php') ?>
    <link rel="stylesheet" href="../css/insertC.css">
</head>

<body>
    <?php include_once('./components/header.php') ?>

    <main class="bg-dark d-flex justify-content-center align-items-center" style="padding: 150px 0 50px;">
        <div class="container bg-light rounded px-3 py-4 border ">
            <h1 class="display-3 black bold">2. Insert</h1>
            <h2 class="black">Hora de inserir dados no nosso banco de dados. Aqui esta um formulário para você realizar esta ação.</h2>
            <hr>
            <div class="alert alert-success border border-success d-none shadow-regular" id="alerta_success">
                <li id="li-valid">Mensagem cadastrada com sucesso</li> 
            </div>
            <div class="alert alert-danger border border-danger d-none shadow-regular" id="alerta_error">
                <li id="li-invalid">Eita, algo de errado aconteceu :C</li> 
            </div>
            <form action="" id="formulario" enctype="application/x-www-form-urlencoded" class="bg-form py-4 px-3 rounded border shadow" method="post">
                <div class="form-group formulario rounded ">
                    <div class="form-item mb-3">
                        <label for="nome" class="form-label" id="txNome">Nome: </label>
                        <input type="text" class="form-control" placeholder="Ex: Joãozinho" id="nome" >
                        <div class="valid-feedback"><p class="p-valid">Adoroooo esse nome!</p></div>
                        <div class="invalid-feedback" ><p class="p-invalid" id="mnome"></p></div>
                    </div>
                    <div class="form-item mb-3">
                        <label for="sobrenome" class="form-label" id="txsobreNome">Sobrenome: </label>
                        <input type="email" class="form-control" placeholder="Ex: da Silva" id="sobrenome"  >
                        <div class="valid-feedback"><p class="p-valid">Que sobrenome bonito, você é Itália?</p></div>
                        <div class="invalid-feedback" ><p class="p-invalid" id="msobrenome"></p></div>
                    </div>
                    <div class="form-item mb-3">
                        <label for="email" class="form-label" id="txemail">E-mail: </label>
                        <input type="email" class="form-control" placeholder="Ex: joaozinho@example.com.br" id="email" >
                        <div class="valid-feedback"><p class="p-valid">Campo verificado bunitin</p></div>
                        <div class="invalid-feedback"><p class="p-invalid"  id="memail"></p></div>
                    </div>
                    <div class="form-item mb-3">
                        <label for="assunto" class="form-label" id="txassunto">Assunto: </label>
                        <input type="text" class="form-control" placeholder="Ex: Escola, trabalho" id="assunto"  >
                        <div class="valid-feedback"><p class="p-valid">Estou interessado! me conte mais sobre esse assunto</p></div>
                        <div class="invalid-feedback"><p class="p-invalid" id="massunto"></p></div>
                    </div>
                    <div class="form-item mb-3 mx-5">
                        <label for="mensagem" class="form-label" id="txmensagem">Mensagem: </label>
                        <textarea class="form-control" placeholder="Ex: Eu gostaria de notificar..." id="mensagem" rows="6"  ></textarea>
                        <div class="valid-feedback"><p class="p-valid">Obrigado pela mensagem!</p></div>
                        <div class="invalid-feedback" ><p class="p-invalid" id="mmensagem"></p></div>
                    </div>
                    <div class="form-item mb-3 shadow">
                      <input type="submit" id="button" class="btn btn-outline-primary py-3" value="Enviar mensagem">
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php include_once('./components/footer.php') ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/insert.js"></script>
</body>

</html>
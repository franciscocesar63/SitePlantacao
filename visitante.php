<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <img src="./img/logo.png" alt="Nosso Projeto" width="10%" class="rounded mx-auto d-block mt-5 mb-5">
    <div style="width: 50%;" class="container">
        <h2>SEJA BEM-VINDO À FAMÍLIA ESPERANÇA</h2>
        <p>
            Que bom que você veio!
            <br> <br>
            Nós estamos muito alegres por você estar em nosso meio. Para nós é um privilégio tê-lo (a) caminhando
            conosco.
            <br> <br>
            Queremos orar por você, por sua família e seus desafios de vida. Coloque os seus dados e seus pedidos de
            oração.<br>
            Estaremos orando por você durante os próximos 30 dias.
            <br> <br>
            <b>Queremos também lhe dar um presente. Então, não se esqueça de após o culto ir até a sala de boas-vindas
                ou
                procurar algum voluntário para receber o seu presente.</b>
            <br> <br>
            Seja muito bem-vindo (a)!<br>
            Deus te abençoe.
        </p>
        <form method="POST" action="visitante.php">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu Nome" aria-label="Nome"
                    aria-describedby="basic-addon1" required>

            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Seu Telefone"
                    aria-label="Telefone" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="email" id="email" class="form-control" placeholder="Seu E-mail"
                    aria-label="Nome" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="idade" id="idade" class="form-control" placeholder="Sua Idade"
                    aria-label="Nome" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="conheceu" id="conheceu" class="form-control"
                    placeholder="Como conheceu nossa igreja?" aria-label="Nome" aria-describedby="basic-addon1"
                    required>
            </div>
            <span>Você pertence a alguma igreja ou grupo religioso atualmente?</span><br>
            <div class="input-group mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pertenceigreja" id="pertenceigreja" value="1"
                        required>
                    <label class="form-check-label" for="inlineRadio1">SIM</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pertenceigreja" id="pertenceigreja" value="0"
                        required>
                    <label class="form-check-label" for="inlineRadio2">NÃO</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <textarea placeholder="Pelo que você quer que oremos?" class="form-control" id="pedidooracao"
                    name="pedidooracao" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
header('Access-Control-Allow-Origin: *');
include_once './backend/DBConnection.php';


if (!empty($_POST)) {
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d H:i');
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $referencia = $_POST['conheceu'];
    $pertenceigreja = $_POST['pertenceigreja'];
    $pedidooracao = $_POST['pedidooracao'];
    $datahora = $date;
    $idade = $_POST['idade'];
    $db = new DBConnection();
    $result = $db->cadastrarPedido($nome, $telefone, $email, $idade, $referencia, $pertenceigreja, $pedidooracao, $datahora);
    if ($result == "sucess") {
        echo "<script>alert('Pedido enviado! Deus abençoe.');</script>";
    }
}
// for ($i = 0; $i < 50; $i++) {
//     $db = new DBConnection();
//     $result = $db->cadastrarPedido("asdas","asdas","asdas","asdas","asdas","asdas","asdas","asdas");
// }


?>
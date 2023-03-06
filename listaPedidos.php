<!DOCTYPE html>
<html>
<header>
    <title>Listagem de Pedidos</title>
</header>
<?php
header('Access-Control-Allow-Origin: *');
include_once './backend/DBConnection.php';


if (true) {
    $db = new DBConnection();
    $users = $db->selectPedidos();
    $message = "";
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Read a JSON File</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>
    <div class="container">
        <h1>Pedidos Cadastrados</h1>
        <div class="table-container">
            <?php
            if (isset($message)) {
                echo $message;

                ?>
                <!-- <table class="table"> -->
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <tbody>
                        <thead class="thead-dark">
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Telefone</th>
                                <th>E-Mail</th>
                                <th>Pertecente a igreja</th>
                                <th>Pedidos de Oração</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td>
                                    <?= $user['nome']; ?>
                                </td>
                                <td>
                                    <?= $user['idade']; ?>
                                </td>
                                <td>
                                    <?= $user['telefone']; ?>
                                </td>
                                <td>
                                    <?= $user['email']; ?>
                                </td>
                                <td>
                                    <?= $user['pertenceigreja'] == 1 ? "SIM " : "NÃO"; ?>
                                </td>
                                <td>
                                    <?= $user['idade']; ?>
                                </td>
                                <td>
                                    <?= date('d/m/Y H:i:s', strtotime($user['datahora'])); ?>
                                </td>
                            </tr>
                        <?php }
            } else
                echo $message;
            ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                        <th>E-Mail</th>
                        <th>Pertecente a igreja</th>
                        <th>Pedidos de Oração</th>
                        <th>Data</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#dtBasicExample').DataTable({
                "paging": true // false to disable pagination (or any other option)
            });
            $('.dataTables_length').addClass('bs-select');
        });
        $(document).ready(function () {
            $('#dtBasicExample').DataTable({
                "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
            });
            $('.dataTables_length').addClass('bs-select');
        });

    </script>
</body>


</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>confirma alterar cliente - System</title>
</head>
<body>
</body>
</html>
<?php
    $code = $_POST['code'];
    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $zip = $_POST['zip'];
    
    include_once 'connection.php';
    
    $stmt = $con->prepare("update tb_client set nm_client='$name',
                                                    cd_cpf='$cpf',
                                                    nr_rg='$rg',
                                                    nr_phone='$phone',
                                                    nm_email='$email',
                                                    cd_zip='$zip'
                                                        where cd_code='$code'");
    if($stmt->execute())
    {
?>
    <h1>Alteração efetuada com sucesso!</h1>
    <input type="button" value="Voltar" onclick="javascript: location.href='queryClient.php'">
<?php
    }
    else
    {
?>
    <h1>Erro em alterar os dados!</h1>
    <input type="button" value="Voltar" onclick="javascript: location.href='queryClient.php'">
<?php
    }
?>
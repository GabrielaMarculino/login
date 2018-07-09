<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cliente cadastrado - System</title>
</head>
<body>
    
</body>
</html>
<?php
    //isset verifies whether the $ _POST [] variable exists
    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
    }
    if(isset($_POST['cpf']))
    {
        $cpf = $_POST['cpf'];
    }
    if(isset($_POST['rg']))
    {
        $rg = $_POST['rg'];
    }
    if(isset($_POST['phone']))
    {
        $phone = $_POST['phone'];
    }
    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
    }
    if(isset($_POST['zip']))
    {
        $zip = $_POST['zip'];
    }
    
    //include_once connects to the database
    include_once 'connection.php';
    
    $stmt = $con->prepare("insert into tb_client(nm_client,
                                                    cd_cpf,
                                                    nr_rg,
                                                    nr_phone,
                                                    nm_email,
                                                    cd_zip)
                                                        values('$name',
                                                                '$cpf',
                                                                '$rg',
                                                                '$phone',
                                                                '$email',
                                                                '$zip')");
    if($stmt -> execute())
    {
?>
    <h1>Cadastro de cliente efetuado com sucesso</h1>
    <input type="button" value="Voltar" onclick="javascript: location.href='clientRegister.html'">
<?php
    }
    else
    {
?>
    <h1>Erro em cadastrar os dados do cliente!</h1>
    <input type="button" value="Voltar" onclick="javascript: location.href='clientRegister.html'">
<?php
    }
?>
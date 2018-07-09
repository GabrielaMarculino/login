<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>alterar cliente - System</title>
</head>
<body>
    <header><h1>ALTERAR CLIENTE</h1></header>
</body>
</html>
<?php
    $code = $_GET['id'];
    
    include_once 'connection.php';
    
    $rs = $con->query("select * from tb_client where cd_code = $code");
    $row = $rs->fetch(PDO::FETCH_OBJ);
?>
    <form action="clientChangeConfirm.php" method="POST">
        CÓDIGO: &nbsp <input type="hidden" name="code" readonly="true" value="<?php echo $row->cd_code;?>"><br>
        NOME: &nbsp <input type="text" name="name" value="<?php echo $row->nm_client;?>">
        <br><br>
        CPF: &nbsp <input type="number" name="cpf" value="<?php echo $row->cd_cpf;?>">
        <br><br>
        RG: &nbsp <input type="number" name="rg" value="<?php echo $row->nr_rg;?>">
        <br><br>
        TELEFONE: &nbsp <input type="number" name="phone" value="<?php echo $row->nr_phone;?>">
        <br><br>
        E-MAIL: &nbsp <input type="text" name="email" value="<?php echo $row->nm_email;?>">
        <br><br>
        CEP: &nbsp <input type="number" name="zip" value="<?php echo $row->cd_zip;?>">
        <br><br>
        <h3>Confirma alteração?</h3><br>
        <input type="submit" value="Alterar">
        &nbsp <input type="button" value="Cancelar" onclick="javascript: location.href='queryClient.php'">
    </form>
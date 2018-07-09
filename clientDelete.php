<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>excluir cliente - System</title>
</head>
<body>
    <header><h1>EXCLUIR CLIENTE</h1></header>
</body>
</html>
<?php
    $code = $_GET['id'];
    
    include 'connection.php';
    
    $rs = $con->query("select * from tb_client where cd_code = '".$code."'");
    
    while($row = $rs->fetch(PDO::FETCH_OBJ))
    {
?>
    CÓDIGO: &nbsp <input type="hidden" name="code" value="<?php print $row->cd_code;?>" disabled >
    <br>
    NOME: &nbsp <input type="text" name="name" value="<?php print $row->nm_client;?>" disabled >
    <br>
    CPF: &nbsp <input type="number" name="cpf" value="<?php print $row->cd_cpf;?>" disabled >
    <br>
    RG: &nbsp <input type="number" name="rg" value="<?php print $row->nr_rg;?>" disabled >
    <br>
    TELEFONE: &nbsp <input type="number" name="phone" value="<?php print $row->nr_phone;?>" disabled >
    <br>
    E-MAIL: &nbsp <input type="text" name="email" value="<?php print $row->nm_email;?>" disabled >
    <br>
    CEP: &nbsp <input type="number" name="zip" value="<?php print $row->cd_zip;?>" disabled>
    <br><br>
    <h2>Confirma exclusão?</h2>
    <input type="button" value="Sim" onclick="javascript: location.href='clientDeleteConfirm.php?id=<?php echo $row->cd_code;?>'">
    <input type="button" value="Não" onclick="javascript: location.href='queryClient.php'">
<?php
    }
?>
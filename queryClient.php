<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>consultar cliente - System</title>
</head>
<body>
    <header><h1>RELATÓRIO DE CLIENTES</h1></header>
</body>
</html>
<?php
    include_once 'connection.php';
    
    $rs = $con->query("select * from tb_client");
    
    while($row=$rs->fetch(PDO::FETCH_OBJ))
    {
        echo "NOME: ".$row->nm_client;
        echo "<br><br>";
        echo "CPF: ".$row->cd_cpf;
        echo "<br><br>";
        echo "RG: ".$row->nr_rg;
        echo "<br><br>";
        echo "TELEFONE: ".$row->nr_phone;
        echo "<br><br>";
        echo "E-MAIL: ".$row->nm_email;
        echo "<br><br>";
        echo "CEP: ".$row->cd_zip;
        echo "<br><br>";
?>
    <input type="button" name="Alterar" value="Alterar" onclick="javascript: location.href='clientChange.php?id=<?php echo$row->cd_code;?>'">
    &nbsp <input type="button" name="Excluir" value="Excluir" onclick="javascript: location.href='clientDelete.php?id=<?php echo$row->cd_code;?>'">
    &nbsp <input type="button" value="Voltar" onclick="javascript: location.href='menu.html'">
<?php
    echo "<hr>";
    }
?>
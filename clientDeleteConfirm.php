<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>confirma excluir cliente - System</title>
</head>
<body>
</body>
</html>
<?php
    $code = $_GET['code'];
    
    include 'connection.php';
    
    $delete = $con->prepare("delete from tb_client where cd_code = '".$code."'");
    
    $delete->execute();
?>    
    <h1>Exclusão efetuada com sucesso!</h1>
    <input type="button" value="Voltar" onclick="javascript: location.href='queryClient.php'">
    
   
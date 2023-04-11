<?php 

    if(isset($_POST['nome'])){
        echo "<h1>" . $_POST['nome'] . "</h1>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body style="<?php if(isset($_POST['nome'])){echo 'background-color: #CCCCCC';}?>">
    <form name="cadastro_dados" method="POST" action="">
        Nome:<input type="text" name="nome" id="name"><br>
        <input type="submit" name="acao" id="cadastrar" value="cadastrar">
    </form>
    
</body>
</html>
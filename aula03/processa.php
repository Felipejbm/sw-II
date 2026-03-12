<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    
    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $data = date('Y');
    $anoNascmineto = $data - $idade;
    ?>

    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>
    <p>O seu ano de nascimento é: <?php echo $anoNascmineto?></p>

    <?php
    if ($idade >= 18) {
        echo "<p style='color: #90ee90; font-size: 2rem'}>Você é maior de idade</p>";
    } else{
        echo "<p style='color: #F08080; font-size: 2rem'>Você é menor de idade</p>";
    }

    echo "<p>LISTA DE CLIENTES</p>";
    echo"<ul>";
    for ($i=1; $i <= $idade; $i++) { 
        echo "<li> Cliente $i</li>";
    }
    echo"</ul>";
    
    echo "<table border = '1'>";
   
    for ($i=1; $i < $idade; $i++) { 
        echo "<tr>";
        for ($o=0; $o <= $idade ; $o++) { 
            echo "<th>Coluna $o</th>";
        }
        echo "</tr>";

        echo "  
                <tr> 
                    <td>
                        Linha $i
                    </td>
                </tr> ";
    }
    echo "</table>";

?>
</body>
</html>
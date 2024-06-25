<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Idade</title>
</head>
<body>
    


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o valor enviado pelo formulário
    $frase = $_POST['frase'];
    $qtd = $_POST['qtd'];

// Repetindo a frase usando a função str_repeat
$resultado = str_repeat($frase . "<br>", $qtd); 
echo $resultado;
    
} else {
    echo " Por favor, digite uma frase válida";
}

 
 ?>




    
</body>
</html>
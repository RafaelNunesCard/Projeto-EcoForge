<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico dos Seus lixos</title>
    <link rel="stylesheet" href="grafico.css">
    <link rel="stylesheet" href="../Pagina inicial/style.css">
</head>
<body>
    
    <?php
$servidor = "localhost";   // servidor
$usuario  = "root";        // usuário padrão no XAMPP
$senha    = "";            // senha padrão é vazia no XAMPP
$banco    = "grafico";   // nome do banco que você criou

// Criar conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}

$sql = "INSERT INTO usuarios (nome, email) VALUES ('João', 'joao@email.com')";
if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado!";
} else {
    echo "Erro: " . $conn->error;
}

$result = $conn->query("SELECT * FROM usuarios");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}


?>
  
</body>
</html>
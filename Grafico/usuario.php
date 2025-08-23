<?php 
include("conexao.php");

$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID: " . $row["id"] . "Nome: " . $row["nome"] . "Email" . $row["email"] . "<br>";
    }
} else{
    echo "Nenhum usuário encontrado";
}

$conn->close();
?>
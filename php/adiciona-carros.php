<?php
$servername='localhost';
$username='root';
$password='';
$dbname='oreman';

//Create Connection
$conn = new sqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//get values from form
$name=$_POST['name'];
$categoria=$_POST['categoria'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$endereco=$_POST['endereco'];


//Insert Values
$sql = "INSERT INTO  produtos (nome , categoria , descricao , preco , enderecoImagem) VALUES ('{$nome}','{$categoria}','{$descricao}',{$preco},'{$endereco}')";
//To check whether data is inserted properly or not
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php 



if(@$_GET['go'] == 'cadastrar'){

    include "connection.php";

    $tipo = $_POST['tipo'];
    $mercadoria = $_POST['mercadoria'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $negociacao = isset($_POST["negociacao"]) ? implode(",", $_POST["negociacao"]) : "";





 

mysql_query("INSERT INTO tbl_mercadorias (tipo,mercadoria,quantidade,preco,negociacao) VALUE ('$tipo','$mercadoria','$quantidade','$preco','$negociacao')");

if (mysql_affected_rows() == 1) {

echo "<script>alert('CADASTRADO COM SUCESSO');</script>";
header ("location:cadastro.php");
  # code...
  # code...
}
}

    




}

 ?>
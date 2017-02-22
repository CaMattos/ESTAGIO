
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Camila Mattos">
     <link rel="shortcut icon" type="image/x-icon" href="http://www.valemobi.com.br/favicon.ico"/>

    <title>Teste online- ValeMobi 2017</title>

    <!-- Functions JS -->
    <script src="functions.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/dist/css/style.css" rel="stylesheet">

    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
       <img src="_img/logo.png" class="img-responsive" alt="Responsive image" id="img-logo">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="index.php">inicio</a></li>
            <li role="presentation" class="active" ><a href="cadastro.php">Cadastro</a></li>
                 
                  <li role="presentation" ><a href="contatos.php">Contatos</a></li>
          </ul>
        </nav>

           <h3 class="text-muted">Teste-Online</h3>

      </div>


      <div class="jumbotron">

        <!-- aqui ira o php criando o form -->

            <form id="frmPerson" name="form" onsubmit="return validar()"  class="form-horizontal" method="post" action="?go=cadastrar">
                              
                <div class="form-group">
                    <label for="txtTipo" class="col-lg-2 control-label">Tipo</label>
                    <div class="col-sm-4">
                        <input   name="tipo" type="text" id="tipo" class="form-control" placeholder="Tipo" maxlength="30">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtMercadoria" class="col-lg-2 control-label">Mercadoria</label>
                    <div class="col-sm-4">
                        <input  name="mercadoria" type="text" id="mercadoria" class="form-control" placeholder="Nome da Mercadoria" maxlength="30">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtQnt" class="col-lg-2 control-label">Quantidade</label>
                    <div class="col-sm-4">
                        <input name="quantidade" onkeyup="somenteNumeros(this);" type="text" id="quantidade" class="form-control" placeholder="Quantidade" maxlength="10">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtPreco" class="col-lg-2 control-label">Preco</label>
                    <div class="col-sm-4">
                        <input  name="preco"  onkeyup="somenteNumeros(this);" type="text" id="preco" class="form-control" placeholder="Preço" maxlength="10">
                    </div>
                </div>


                <div class="form-group">
                    <label for="txtnegociacao" class="col-lg-2 control-label">Negociação</label>
                    <div class="col-sm-4">
                    <select name="negociacao[]"  class="form-control" multiple="multiple" id="negociacao">
                      <option value="C">Compra</option>
                      <option value="V">Venda</option>
                      
                    </select>
                    
                    </div>
                </div>





                <div class="form-group">
                    <div class="col-lg-offset-2 col-sm-3">
                        <input type="submit"  value="Cadastrar" id="btnSave" style="cursor:pointer" class="btn btn-success"/>
                    </div>
                </div>
            </form>


          <?php

        include_once  "dados_banco.php";

        ?>


        </div>      

      
        



          
      </div>

      

      <footer class="footer">
        <p>&copy; Teste online-2017 &nbsp; &nbsp; &nbsp;Desenvolvido por Camila Jenifer de Mattos</p>
      </footer>

    </div> <!-- /container -->


  
    
  </body>
</html>


<?php 

  
  



if(@$_GET['go'] == 'cadastrar'){

mysql_connect('localhost','root','') or die("não conectado ao banco de dados");
mysql_select_db('valemobi');

 $tipo = $_POST['tipo'];
    $mercadoria = $_POST['mercadoria'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $negociacao = isset($_POST["negociacao"]) ? implode(",", $_POST["negociacao"]) : "";





 


// Insere os dados na tabela //

mysql_query("INSERT INTO tbl_mercadorias (tipo,mercadoria,quantidade,preco,negociacao) VALUE ('$tipo','$mercadoria','$quantidade','$preco','$negociacao')");

if (mysql_affected_rows() == 1) {

echo "<script>alert('cadastro');</script>";
header ("location:cadastro.php");
  # code...
  # code...
}
}
  





 ?>




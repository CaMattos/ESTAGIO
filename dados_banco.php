<?php


   include "connection.php";


		echo "<div class='table-responsive'>"	;
         echo "<table class='table table-bordered'>"; //Criamos a tabela
         //Aqui criamos o cabeçalho da tabela.
         // A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
         echo "<tr><td>ID</td>"
              ."<td>TIPO</td>"
              ."<td>MERCADORIA</td>"
              ."<td>QUANTIDADE</td>"
              ."<td>PREÇO</td>"
              ."<td>NEGOCIAÇÂO</td>"
              ."<td> ... </td>"
              ."</tr>"; // Fechamos o cabeçalho. 
              echo "</table>";
 		echo "</div>";


?>





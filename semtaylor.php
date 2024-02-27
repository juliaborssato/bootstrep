<?php
    include_once("array.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Utilizando arrays em PHP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">Início <span class="sr-only">(atual)</span></a>
          </li>
          </li>
        </ul>
      </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Manipulação de arrays em PHP</h1>
          <p>Exibindo todos os dados cadastrados em ordem alfabética crescente pelo nome</p>
          
        </div>
      </div>

    <div class="section1">
        <h1>Ordenação de Array</h1>
    </div>
    <div class="section2">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Estilo Musical</th>
            </tr>
        </thead>
        <tbody>

            <?php
            
            foreach($array as $linha){
                echo "<tr>";
                if($linha['estilo_musical'] != "Taylor Swift"){
                    foreach($linha as $key => $dado){
                        echo "<td>$dado</td>";
                    }
                }

            }
            
            ?>




            <!--
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            </tr>
-->

        </tbody>
        </table>
    </div>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
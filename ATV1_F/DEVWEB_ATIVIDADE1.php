<?php
  include "action.php";

?>
<!doctype html>
<html lang="en">
  <head class="Backg">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda de Contatos</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS.css">
    
    </head>


    <body>
        <style>
        .mouse :hover {
            color: #48e47c;
          }
        </style>

        <h1 id="titulo" class="titulo"> Minha agenda de contatos</h1>
        <div class="alert alert-primary" role="alert">
        Este site foi criado com o intuito de registrar meus
        contatos ou visitar os já cadastrados , seja bem vindo(a).
        </div>
        <br>

        <h2>Usuários já cadastrados:</h2>

        <a href="TABELA.php"><button type="button" class="btn btn-dark">Ver Cadastrados</button></a>

        <table class="table">
            <thead class="table-dark">
                <th>Nome</th>
                <th>Número</th>
                <th>Perfil</th>
            </thead>
            <tr class="table-info">
                <td>Rodrigo Faro</td>
                <td>47 99999-9999</td>
                <td><a href="Contato_1.html"><button type="button" class="btn btn-info" class="mouse">Ver Perfil</button></a></td>
            </tr>
            <tr class="table-info">
                <td>Tiringa</td>
                <td>47 99999-9999</td>
                <td> <a href="Contato_2.html"><button type="button" class="btn btn-info">Ver Perfil</button></a></td>
            </tr>
            <tr class="table-info">
                <td>Alexandre Gaules</td>
                <td>47 99999-9999</td>
                <td><a href="Contato_3.html"><button type="button" class="btn btn-info">Ver Perfil</button></a>
                </td> 
            </tr>
            <tr class="table-info">
                <td>Palmirinha</td>
                <td>47 99999-9999</td>
                <td><a href="Contato_4.html"><button type="button" class="btn btn-info">Ver Perfil</button></a>
                </td> 
            </tr>
            <tr class="table-info">
                <td>Amanda Silva</td>
                <td>47 99999-9999</td>
                <td><a href="Contato_5.html"><button type="button" class="btn btn-info">Ver Perfil</button></a>
                </td> 
          </table>

        <table class="table lista-contatos">
            <thead>
                <tr>
                    <th>Nome</th><th>Telefone</th><th>Alterar</th><th>Excluir</th>
                    <th>Id</th><th>Nome</th><th>Sobrenome</th><th>Telefone</th><th>Alterar</th><th>Excluir</th>
                </tr>
            <tr>
                <td>João</td><td>4798989999</td><td>Alt</td><td>Exc</td>
            </tr>
            <tr>
                <td>João</td><td>4798989999</td><td>Alt</td><td>Exc</td>
            </tr>
            <tr>
                <td>João</td><td>4798989999</td><td>Alt</td><td>Exc</td>
            </tr>
            </thead>
   

        </table>

        <table  border="1px" >
        <br>
        <div class="alert alert-primary" role="alert">
            Para realizar o cadastro leia atentamente <br> para saber quais dados irá necessitar.
          </div>
        <br>
        <h3>Dados necessários</h3>
            <ol>
            <li>Nome</li>
            <li>Sexo</li>    
            <li>Data de Nascimento</li>
            <li>Email</li>
            <li>Instagram</li>     
            <li>Número para contato</li>
            <li>Uma foto</li>
            <li>Recado</li>  
            </ol>
            <div class="d-grid gap-2 col-11 mx-auto">
            <a href="FORM_CADASTRO.php"><button type="button" class="btn btn-dark" >Realizar Cadastro</button></a>
        </div>
        <div>
            ㅤ 
        </div>
        </table>
    </body>
    <footer></footer>
</html>
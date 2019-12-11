<?php

$servicos = [
    ["imagem" => "imagens/site.jpg", "titulo" => "Criar um site", "descrição" => "Descrição do serviço 1"],

    ["imagem" => "imagens/Loja_virtual.jpg", "titulo" => "Criar uma Loja Virtual", "descrição" => "Descrição do serviço 2"],

    ["imagem" => "imagens/blog.png", "titulo" => "Criar um Blog", "descrição" => "Descrição do serviço 3"]

];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                        <img src="imagens/logo.png" width="150" height="150" alt="">
                    </a>
                    <ul class="nav">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Serviços</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contato</a>
                            </li>
                    </ul>
            </nav>
        </header>  
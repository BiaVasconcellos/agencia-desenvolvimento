<?php

$servicos = [
    ["imagem" => "imagens/site.jpg", "titulo" => "Criar um site", "descrição" => "Descrição do serviço 1"],

    ["imagem" => "imagens/Loja_virtual.jpg", "titulo" => "Criar uma Loja Virtual", "descrição" => "Descrição do serviço 2"],

    ["imagem" => "imagens/blog.png", "titulo" => "Criar um Blog", "descrição" => "Descrição do serviço 3"]

];

function listarServicos (){
    global $servicos;
    foreach ($servicos as $servico) {
        echo "<div class='col-4'>
        <div class='card'>
                <img src='".$servico['imagem']."'class='card-img-top' alt='site'>
                <div class='card-body'>
                  <h5 class='card-title'>".$servico['titulo']."</h5>
                  <p class='card-text'>".$servico['descrição']."</p>
                  <a href='#' class='btn btn-primary'>Solicite um orçamento</a>
                </div>
              </div>
            </div>";
    }
}

?>


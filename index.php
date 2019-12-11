<?php

include_once ('head.php');
include_once ('funcoes.php');

?>


            <section id="banner">
                <h2>Compre nossos produtos! =)</h2>
            </section>
            <section id="servico" class="container mt-5 mb-5">
                <div class="row">

                <?php echo listarServicos(); ?>

                   
                </div>
                <section id="sobre" class="container mt-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="imagens/sobre.svg" class="img-fluid" alt="sobre">
                        </div>
                        <div class="col-6 d-flex justify-content-center flex-column">
                            <h2>A Empresa</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores recusandae ad, error rem non dolores natus iusto sit nisi atque inventore cumque, odit tenetur nemo labore quod fugiat, magnam esse!</p>
                        </div>
                    </div>
                </section>
            </section>


<?php
include_once ('footer.php');
?>
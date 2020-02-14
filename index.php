<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart System (Study)</title>

    <link rel="stylesheet" href="css/bootcss.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icons-fontawesome/css/all.css">

</head>

<body>
    <header class="container">
        <div class="content-95-900">
            <i class="fab fa-connectdevelop logo"></i>
            <h1>Escolha os cursos que deseja comprar</h1>
            <div class="clear"></div>
        </div>
    </header>

    <main>
        <h2 class="fontzero">Selecione um produto</h2>
        <section class="container">
            <div class="content-95-1000">
                <form name="" class="" id="" method="post" action="">
                    <ul class="produtos-conteudos">
                        <li class="produto-selecao">
                            <input type="checkbox" name="curso-php" class="curso-php" id="curso-php" value="Curso de PHP">
                            <label for="curso-php">
                                <div class="produtos-icons"><i class="fab fa-php icons-prod"></i></div>
                                <div class="label-txt">Curso de<br> <strong>PHP OO</strong></div>
                                <div class="label-valor">R$ 189,00</div>
                            </label>
                        </li>
                        <li class="produto-selecao">
                            <input type="checkbox" name="curso-php" class="curso-php" id="curso-jquery" value="Curso de PHP">
                            <label for="curso-jquery">
                                <div class="produtos-icons"><i class="fab fa-js icons-prod"></i></div>
                                <div class="label-txt">Curso de<br> <strong>JQuery</strong></div>
                                <div class="label-valor">R$ 189,00</div>
                            </label>
                        </li>
                        <li class="produto-selecao">
                            <input type="checkbox" name="curso-php" class="curso-php" id="curso-bootstrap" value="Curso de PHP">
                            <label for="curso-bootstrap">
                                <div class="produtos-icons"><i class="fab fa-bootstrap icons-prod"></i></div>
                                <div class="label-txt">Curso de<br> <strong>Bootstrap</strong></div>
                                <div class="label-valor">R$ 189,00</div>
                            </label>
                        </li>
                        <li class="produto-selecao">
                            <input type="checkbox" name="curso-php" class="curso-php" id="curso-html" value="Curso de PHP">
                            <label for="curso-html">
                                <div class="produtos-icons"><i class="fab fa-html5 icons-prod"></i></div>
                                <div class="label-txt">Curso de<br> <strong>HTML5</strong></div>
                                <div class="label-valor">R$ 189,00</div>
                            </label>
                        </li>
                    </ul>
                </form>
                <div class="clear"></div>
            </div>

            <div class="content-95-1000 main_total grid-container">
                <div class="box50">
                    <h2>Total: <strong>R$ 250,00</strong></h2>
                </div>
                <div class="box50">
                    <div class="main_finalizar_compra bt-radius bt-blue">Finalizar compra</div>
                </div>

                <div class="clear"></div>
            </div>
        </section>
    </main>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="css/icons-fontawesome/js/all.js"></script>

</body>

</html>
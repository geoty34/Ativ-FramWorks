<?php
    $produtos = [
        ["img.jpg???", "Brinquedo para gato",89.90],
        ["img2.jpg??", "Casinha para gato",199.00],
        ["img3.jpg?", "Escovinha para pelos",20.00],



    ]
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">


    <title>Document</title>
</head>

<body>

    <h2>Album de Produtos</h2>
    <div class="container">

        <div class="row">
            <?php foreach($produtos as $prod): ?>

            <div class="col-3 item-produto">
                <div class="card">
                    <img class="card-img-top"
                        src=""
                        alt="Title" style="max-width: 350px; width: auto;">
                    <div class="card-body">
                        <h4 class="card-title">Pulseira Turquesa</h4>
                        <p class="card-text">Pulseira de mola com duas voltas com miçangas</p>

                        <p>R$ 70.00</p>

                        <a href="#" class="btn btn-success" style="width: 100%;">Comprar </a>

                    </div>
                </div>

            </div>
            <?php endforeach; ?>

            <!--fim do item-produto-->

            <div class="col-3 item-produto">
                <div class="card">
                    <img class="card-img-top"
                        src="https://s3-sa-east-1.amazonaws.com/loja2/4163570ea607b43e61c55f209edd243a.jpg"
                        alt="Title" style="max-width: 350px; width: auto;">
                    <div class="card-body">
                        <h4 class="card-title">Presilha Turquesa</h4>
                        <p class="card-text">Presilha de cabelos em metal ouro velho com chaton </p>

                        <p>R$ 70.00</p>

                        <a href="#" class="btn btn-success" style="width: 100%;">Comprar </a>

                    </div>
                </div>

            </div>

            
           

        </div>


    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
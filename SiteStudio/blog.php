<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Studio Postural | Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo_comum.css">
    <link rel="stylesheet" href="css/blog.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
     <script>
        $(document).ready(function() {
            AOS.init();
            
            $("#btn-menu").click(function(){
               $(".menu").slideToggle();
            });
        });
    </script>

     
</head>
<body>
   
    <?php include 'header_e_menu.php'; ?>

    <div class="delimitador-conteudo"> 
        <div class="dropdown">
            <label id="label-todos-artigos"for="dropdownMenuButton">Todos os Artigos</label>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Selecione um artigo
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Tratamento para celulite</a>
                <a class="dropdown-item" href="#">Tratamento para Hiperdrose</a>
                <a class="dropdown-item" href="#">Toxina Botulínica</a>
            </div>
        </div>

        <div class="flex-pag-blog">
            <article class="artigo">
                <img src="imgs/imgs-blog/celulite-300x201.jpg" alt="">
                <h2>Tratamento para celulite</h2>

                <p>A primeira coisa a se saber sobre a celulite é que ela é como Pressão Alta, ainda não existe cura mas existe tratamento. A segunda coisa a se saber é que celulite é uma alteração tecidual inerente da mulher e do seu ciclo hormonal. Se uma mulher não tem celulite é porque ela foi uma das raras abençoadas.</p>

                <a data-aos="zoom-in" class="btn btn-primary" href="quem-somos.php" role="button">Saiba Mais</a>
            </article>

            <article class="artigo">
                <img src="imgs/imgs-blog/hiperdrose.jpg" alt="">
                <h2>Tratamento para Hiperdrose</h2>

                <p>Hiperidrose é uma alteração de caráter genético/emocional que leva à um excesso de secreção de suor mais comumente distribuído nas seguintes porcentagens:mãos 36%, pés 21%, axilas 18%, rosto 11% e demais regiões do corpo 14%.</p>

                <a data-aos="zoom-in" class="btn btn-primary" href="quem-somos.php" role="button">Saiba Mais</a>
            </article>  

            <article class="artigo">
                <img src="imgs/imgs-blog/ft-botox2.jpg" alt="">
                <h2>Toxina Botulínica </h2>

                <p>Ao contrário do que se pensa a toxina botulínica (popularizada pela marca Botox®) não é usada para aumento de lábios ou preenchimentos faciais. A ação da toxina é de bloqueio neurológico sendo usada desde tratamentos oftalmológicos e neurológicos até estéticos.</p>

                <a data-aos="zoom-in" class="btn btn-primary" href="quem-somos.php" role="button">Saiba Mais</a>
            </article>  
        </div>
    </div>

    <?php include 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
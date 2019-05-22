<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Studio Postural</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo_comum.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/nossos-servicos.css">
    <link rel="stylesheet" href="css/secoes.css">
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

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner" id="banner1">
                        <div class="delimitador-conteudo">
                            <article class="quemSomos">
                                <h1 data-aos="zoom-in">O Studio Postural</h1>
                                <p data-aos="zoom-in">Criado em 1993, o Studio Postural surgiu de um antigo anseio: o de criar um espaço que abrigasse atividades e tratamentos relacionados à saúde e à estética e que, centrado na perspectiva das diferenças entre os indivíduos ...</p>
                                <a data-aos="zoom-in" class="btn btn-primary" href="quem-somos.php" role="button">Saiba Mais</a>
                            </article>
                        </div>
                        
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="banner" id="banner2"></div>
                </div>
                
                <div class="carousel-item">
                    <div class="banner" id="banner3"></div>
                </div>
            </div>
    </div>
        
    <div class="delimitador-conteudo"> 
        <article class="nossosServicos">
            <h1>Nossos Serviços</h1>

            <?php include 'nossos-servicos.php'; ?>     
        </article>
    </div>
    
    <article class="segundo-banner">
       <div class="delimitador-conteudo">
            <h1 data-aos="flip-left">Paz, Equilibrio e Bem Estar</h1>
        </div>
    </article>
    
    <?php include 'secoes.php'; ?>
    
    <?php include 'footer.php'; ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
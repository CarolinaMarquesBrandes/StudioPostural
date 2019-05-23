<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Studio Postural | Promoções</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo_comum.css">
    <link rel="stylesheet" href="css/promocoes.css">
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
        <div class="flex-promocoes">
            <article class="container-promocoes">
                <h2>Lorem ipsum</h2>
                <img src="imgs/imgs-promocoes/criofrequencia.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias laboriosam excepturi corporis eveniet iusto eos est in optio maxime. Cumque culpa placeat nihil rerum adipisci animi quo voluptatem, fugiat ratione!</p>
            </article> 
            
            <article class="container-promocoes">
                <h2>Lorem ipsum</h2>
                <img src="imgs/imgs-promocoes/beauty-2.jpeg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias laboriosam excepturi corporis eveniet iusto eos est in optio maxime. Cumque culpa placeat nihil rerum adipisci animi quo voluptatem, fugiat ratione!</p>
            </article> 
            
            <article class="container-promocoes">
                <h2>Lorem ipsum</h2>
                <img src="imgs/imgs-promocoes/estetica_medica_fundo.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias laboriosam excepturi corporis eveniet iusto eos est in optio maxime. Cumque culpa placeat nihil rerum adipisci animi quo voluptatem, fugiat ratione!</p>
            </article> 
        </div>
    </div>
    
    
    <?php include 'footer.php'; ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
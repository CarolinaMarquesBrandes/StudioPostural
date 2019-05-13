<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Studio Postural</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/tab-servicos.css">
</head>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<body>
    <?php include 'header.php'; ?>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner" id="b1"></div>
                </div>
                <div class="carousel-item">
                    <div class="banner" id="b2"></div>
                </div>
                <div class="carousel-item">
                    <div class="banner" id="b3"></div>
                </div>
                <div class="carousel-item">
                    <div class="banner" id="b4"></div>
                </div>
            </div>
        </div>
        
        <div id="redes-sociais">
           <a class="" href=""><img src="imgs/icons8-facebook-48.png" alt=""></a>
           <a href=""><img src="imgs/icons8-instagram-filled-48.png" alt=""></a>    
        </div>
        
        <div class="clear-fix"></div>

        <div class="centralizar">
            <article id="quem-somos">
                <h1>O Studio Postural</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatem architecto dolor ullam commodi doloribus ab enim et reprehenderit, quia eius, inventore consequuntur, vel voluptatibus quisquam neque reiciendis facere at.</p>

                <a class="btn btn-primary" href="#" role="button">Saiba Mais</a>
            </article>
       
            <article class="nossos-servicos">
             <h1>Nossos Serviços</h1>
              <?php include 'tab-servicos.php'; ?>  
            </article>
         </div>
         
         <?php include 'footer.php'; ?>

</body>

<script>
    var menu = document.querySelectorAll(".link-menu");
    for(var a = 0; a < menu.length; a++){
        if(menu[a] == 0){
            menu[a].classList.add("pagAtual");
        }
    }
   
</script>

</html>

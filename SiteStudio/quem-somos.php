<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Studio Postural | Quem Somos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo_comum.css">
    <link rel="stylesheet" href="css/quemSomos.css">
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
     
    
    <div class="delimitador-conteudo flex-quem-somos"> 
        <article class="quemSomos">
                <h1>O Studio Postural</h1>
                <p>Criado em 1993, o Studio Postural surgiu de um antigo anseio: o de criar um espaço que abrigasse atividades e tratamentos relacionados à saúde e à estética e que, centrado na perspectiva das diferenças entre os indivíduos, atendesse às necessidades especificas de cada um. Dentro dessa filosofia, o Studio Postural oferece várias opções de tratamentos e terapias corporais, em ambiente confortável, na Barra da Tijuca (CasaShopping – Av. Ayrton Senna).</p>

                <p>Nossa equipe é constituída por profissionais com formações diversas e interdisciplinares, que buscam sempre aprimoramento técnico e pessoal, e são capazes de utilizar diferentes caminhos, abordagens e técnicas visando o equilíbrio, a harmonia, a qualidade de vida e a saúde.</p>
        </article>

        <aside class="foto-estudio">
            <img src="imgs/imgs-quemSomos/foto-temporaria-studio.jpg" alt="Foto do Studio">
        </aside> 
    </div>

    <?php include 'secoes.php'; ?>   

    <?php include 'footer.php'; ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
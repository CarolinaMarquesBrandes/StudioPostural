<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Studio Postural | Contato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo_comum.css">
    <link rel="stylesheet" href="css/contato.css">
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
       <div class="flex-contato">
           <adress> 
              <ul>
                  <li><img src="imgs/icones-contato/icons8-endere%C3%A7o-48.png" alt=""> Av. Ayrton Senna 2.150 - CasaShopping Bloco A Sala 210 - Barra da Tijuca</li>
                  <li><img src="imgs/icones-contato/icons8-telefone-48.png" alt=""> (21) 2431-6741</li>
                  <li><img src="imgs/icones-contato/icons8-whatsapp-48.png" alt=""> (21) 9 9965-4339</li>
                  <li><b>Horário para agendamento:</b> Seg à Sex de 08:30h até 17h</li>
               </ul>
           </adress>
           
           <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14691.37254205259!2d-43.3641048!3d-22.9927951!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe09d0eef41c790eb!2sStudio+Postural+Sa%C3%BAde+%26+Est%C3%A9tica!5e0!3m2!1spt-BR!2sbr!4v1558540949474!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           
       </div>
   </div>
       
        <form>
             <div class="delimitador-conteudo"> 
                <h2>Envie sua Mensagem</h2>

                <input type="text" name="nome" id="nome" required placeholder="Digite seu nome">

                <input type="email" name="email" id="email" required placeholder="Digite seu email">

                <input type="text" name="assunto" id="assunto" required placeholder="Digite o assunto da mensagem">

                <textarea name="mensagem" id="mensagem" cols="30" rows="10" required placeholder="Digite sua Mensagem"></textarea>

                <button type="submit" class="btn btn-primary enviar-form">Enviar</button>
            </div>
        </form>
    

    <?php include 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
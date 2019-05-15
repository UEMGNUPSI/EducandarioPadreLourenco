  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Educandário Padre Lourenço</title>
    <link rel="icon"  href="../imagens/logo.png">

    <!-- Bootstrap -->
    <link href="../public/css/estilo.css" rel="stylesheet">
    <!-- font awesomes - icones -->
    <link href="../public/css/all.min.css" rel="stylesheet">
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js" integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==" crossorigin=""></script> 
    
  </head>
  <body>

    <nav class="navbar fixed-top navbar-transparente  navbar-dark navbar-expand-lg">
      <a href="#" class="navbar-brand">
        <img src="../imagens/logo.png" alt="some text" width=60 height=40>
      </a>         
      <!--Botão toggle-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="margin-right: 15px">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--navbar-->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item active">
            <a href="quem_somos.php" class="nav-link">Quem Somos</a>
          </li>  
          <li class="nav-item">
            <a href="missao.php" class="nav-link">Missão</a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="formularioMenu" data-toggle="dropdown" area-haspopup="true" area-expanded="false">Formulários</a>
            <div class="dropdown-menu">
              <a href="matriculas.php" class="dropdown-item text-dark">Matrícula</a>
              <a href="#" class="dropdown-item text-dark">Rematrícula</a>
              <a href="#" class="dropdown-item text-dark">Lista</a>
            </div>
          </li>
        </ul>          
      </div>
    </nav> <!--nav-->
    <div class="capa">

      <div class="texto-capa">
        <h1>Educandário Padre Lourenço</h1>
        <div class="container">
          <div id="myCarousel2" class="carousel slide carousel-fade" data-ride="carousel" style="border:1px solid #000;">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel2" data-slide-to="1"></li>
              <li data-target="#myCarousel2" data-slide-to="2"></li>
            </ol>
            <div id="banners-mobile" class="carousel-slide" role="listbox">
              <div class="carousel-item active">
                <img src="../imagens/carrocel1.jpg" class="d-block w-100 img-responsive" alt="Banner 1">
                <div  class="carousel-caption d-none d-md-block">
                  <p class="lead carousel-legend" style="color: white">Ensino regular</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../imagens/carrocel2.jpg" class="d-block w-100 img-responsive" alt="Banner 3">
                <div class="carousel-caption d-none d-md-block">
                  <p class="lead carousel-legend" style="color: white">Assistência</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../imagens/carrocel3.jpg" class="d-block w-100 img-responsive" alt="Banner 5">
                <div class="carousel-caption d-none d-md-block">
                  <p class="lead carousel-legend" style="color: white">Crianças Felizes</p>
                </div>
              </div>
            </div>
            <!-- Controles -->
            <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próxima</span>
            </a>
          </div>

        </div>
        <a href="" class="btn btn-custom btn-roxo btn-lg" style="margin-top: 20px; margin-bottom: -10px"><span></span> Faça sua Doação</a>
      </div>
    </div>
    <!--Conteúdos-->

    <section id="servicos">

      <!-- container -->
      <div class="container">


        <!-- row -->
        <div class="row">
          <div class="col-md-12 text-center" style="margin-bottom: -70px">
            <h2>O que o Educandário Oferece?</h2>
            <p class="lead">O Educandário Pe. Lourenço contribui em muitas atividades!</p>
          </div>
        </div>

        <div class="py-5 bg-light card-group ">

          <!-- row -->
          <div class="row">

            <!-- single course -->
            <div class="col-md-3 col-6">

              <div class="card box-shadow mt-4 bg-transparent border-primary">
                <img class="card-img-top" src="../imagens/img1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text" style="max-height: 130px">O educandário conta com ação social, você não paga mensalidade para deixar seus filhos nele, e dispõe de várias atividades educativas.</p>
                  <div class="card-footer bg-transparent">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">Ver mais</button>
                    </div>
                  </div>

                </div>   
              </div>            

            </div>
            <div class="col-md-3 col-6">
             <div class="card  box-shadow mt-4 bg-transparent border-primary">
              <img class="card-img-top" src="../imagens/img2.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">As crianças têm diversas atividades de lazer, para passarem o tempo e se divertirem, tudo com bastante qualidade.</p>
                <div class="card-footer bg-transparent">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary">Ver mais</button>
                  </div>
                </div>

              </div>    
            </div>   

          </div>
          <div class="col-md-3 col-6">

            <div class="card box-shadow mt-4 bg-transparent border-primary">
              <img class="card-img-top" src="../imagens/img3.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">O educandário também oferece assistência, não se preocupe com problemas, iremos sempre lhes informar sobre qualquer coisa.</p>
                <div class="card-footer bg-transparent">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary">Ver mais</button>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3 col-6">
            <div class="card box-shadow  mt-4 bg-transparent border-primary">
              <img class="card-img-top" src="../imagens/img4.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Os professores são super dedicados, sempre dão o máximo de atenção ao seu filho, contribuindo para o seu aprendizado e crescimento.</p>
                <div class="card-footer bg-transparent">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary">Ver mais</button>
                  </div>
                </div>

              </div> 
            </div>
          </div>     
        </div>
      </div>
    </div>
  </section>



  <section id="recursos">


    <div class="container">

      <div class="row">

        <!--recursos-->
        <div class="col-md-6" >
         <h2>Contato:</h2>
         <br>

         <h4 style="font-size: 20px">Endereço:</h4>
         <p>Rua Silviano Brandão Nº 935, Princesa Isabel, Frutal-MG</p>
         <h4 style="font-size: 20px">Horário de Funcionamento:</h4>
         <p>Segunda a Sexta das 07h às 18h30min</p>
         <h4 style="font-size: 20px">Telefone:</h4>
         <p>Fax: (34) 3421-8924</p>
         <h4 style="font-size: 20px">E-mail:</h4>
         <p>educandariopadrelourenco@hotmail.com</p>

       </div>

       <div class="col-md-6 text-center">
        <div id="mapid" style="width: 100%px; height: 400px;" class="mt-5"></div>
        <script>
          var mymap = L.map('mapid').setView([-20.034149989763, -48.940998652577], 15);

          L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
          }).addTo(mymap);
         //adiciona um marcador com legenda
         L.marker([-20.034149989763, -48.940998652577]).addTo(mymap)
         .bindPopup("<b>Educandário</b>").openPopup();
       //adicionando um círculo a uma região
       L.circle([-20.034149989763, -48.940998652577], 200, {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5
      }).addTo(mymap).bindPopup("Esta é uma área que pode ser definida. Neste caso um raio de 200m");
    </script>
  </div>    
</div>         
</section>

<?php include 'footer.php'; ?>

</body>
</html>
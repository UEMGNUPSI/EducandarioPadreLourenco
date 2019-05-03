<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Educandário Padre Lourenço</title>
  <link rel="icon"  href="imagens/logo.png">

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js" integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==" crossorigin=""></script>

  </head>
  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">

        <!--header-->
        <div class="navbar-header">

          <!--Botão toggle-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">Alternar Navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="index.php" class="navbar-brand">
            <span class="img-logo">Padre Lourenço</span>
          </a>          
        </div>

        <!--navbar-->
        <div class="collapse navbar-collapse" id="barra-navegacao">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Quem Somos</a></li>
            <li><a href="">Missão</a></li>
            <li class="divisor" role="separator"></li>
            <li><a href="">Matricule-se</a></li>
            <li><a href="">Entrar</a></li>
          </ul>          
        </div>
        
      </div><!--container-->
    </nav> <!--nav-->

    <div class="capa img-responsive">
      <div class="texto-capa">

        <div class="container padding-0 banners-home">
          <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel2" data-slide-to="1"></li>
              <li data-target="#myCarousel2" data-slide-to="2"></li>
            </ol>
            <div id="banners-mobile" class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="imagens/carrocel1.jpg" class="d-block w-100 img-responsive" alt="Banner 1">
              </div>
              <div class="item">
                <img src="imagens/carrocel2.jpg" class="d-block w-100 img-responsive" alt="Banner 3">
              </div>
              <div class="item">
                <img src="imagens/carrocel3.jpg" class="d-block w-100 img-responsive" alt="Banner 5">
              </div>
            </div>
            <!-- Controles -->
            <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Próxima</span>
            </a>
          </div>

        </div>
        <h1>Educandário Padre Lourenço</h1>
        <a href="" class="btn btn-custom btn-roxo btn-lg"><span class="glyphicon glyphicon-usd"></span> Faça sua Doação</a>

      </div>
    </div>
    <!--Conteúdos-->

    <section id="servicos">

      <!-- container -->
      <div class="container">


        <!-- row -->
        <div class="row">
          <div class="section-header text-center">
            <h2>O que o Educandário Oferece?</h2>
            <p class="lead">O Educandário Pe. Lourenço contribui em muitas atividades!</p>
          </div>
        </div>

        <!-- courses -->
        <div id="courses-wrapper">

          <!-- row -->
          <div class="row">

            <!-- single course -->
            <div class="col-md-3 col-sm-6 col-xs-6">

              <div class="course">
                <a href="#" class="course-img">
                  <img src="./imagens/img1.jpg" class="img-responsive img-rounded" style="width: 100%" alt="">
                  <i class="course-link-icon fa fa-link"></i>
                </a>
                <a class="course-title" href="#">Ação Social</a>

              </div>            

            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">

              <div class="course">
                <a href="#" class="course-img">
                  <img src="./imagens/img2.jpg" class="img-responsive img-rounded" style="width: 100%" alt="">
                  <i class="course-link-icon fa fa-link"></i>
                </a>
                <a class="course-title" href="#">Esporte</a>
                
              </div>            

            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">

              <div class="course">
                <a href="#" class="course-img">
                  <img src="./imagens/img3.jpg"  class="img-responsive img-rounded" style="width: 100%" alt="">
                  <i class="course-link-icon fa fa-link"></i>
                </a>
                <a class="course-title" href="#">Assistencia</a>

              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6">

              <div class="course">
                <a href="#" class="course-img">
                  <img src="./imagens/img4.jpg" class="img-responsive img-rounded" style="width: 100%" alt="">
                  <i class="course-link-icon fa fa-link"></i>
                </a>
                <a class="course-title" href="#">Ensino Regular</a>

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

         <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nome:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu nome">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite seu email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Assunto:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Qual o assunto?">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>

      <div class="col-md-6">
        <div id="mapid" style="width: 600px; height: 400px;"></div>
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

<!--rodapé-->

<footer id="rodape">
  <div class="container">

    <div class="row">

      <div class="col-md-2">

       <span class="img-logo"></span>

     </div>


     <div class="col-md-2">
      <h4>Educandário</h4>
      <ul class="nav">
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Missão</a></li>
        <li><a href="#">Nossa História</a></li>

      </ul>            
    </div>

    <div class="col-md-2">
      <h4>Comunidades</h4>
      <ul class="nav">
        <li><a href="#">Irmãs Carmelitas</a></li>
        <li><a href="#">Desenvolvedores</a></li>
        <li><a href="#">Marcas</a></li>                      
      </ul>            
    </div>

    <div class="col-md-2">
      <h4>Links úteis</h4>
      <ul class="nav">
        <li><a href="#">Ajuda</a></li>
        <li><a href="#">Faça-nos uma visita</a></li>
         <li><a href="#">Contatos úteis</a></li>

         </ul>            
       </div>

       <div class="col-md-4 ">
        <ul class="nav">
          <li class="item-rede-social"><a href="#"><img src="imagens/facebook.png"></a></li>
          <li class="item-rede-social"><a href="#"><img src="imagens/twitter.png"></a></li>
          <li class="item-rede-social"><a href="#"><img src="imagens/instagram.png"></a></li>             
        </ul>            
      </div>          
    </div><!--/row--> 
  </div>
</footer>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
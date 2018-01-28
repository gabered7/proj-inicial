<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gorillaz Oficial - Inicio</title>
    <!--Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <!-- Materialize CSS -->
    <link type="text/css" rel="stylesheet" href="{!! asset ('materialize/css/materialize.min.css')!!}" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="{!! asset ('css/tema.css')!!}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <div class="navbar-fixed">
      <nav class="grey darken-1 z-depht-0">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo"><a href="inicio.blade.php"><img src="img/gorillaz-logo.png" alt="Gorillaz Logo" class="responsive-img" id="logo"/></a></a>
          <a href="#" data-activates="menu-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down grey darken-2">
            <li class="active"><a href="historia.blade.php">Nossa (Ficcional) Historia</a></li>
            <li class="active"><a href="contatos.blade.php">Contatos</a></li>
            <li class="active"><a href="fanclub.blade.php">Fan Clube</a></li>
          </ul>
          <ul id="menu-mobile" class="side-nav ">
            <li class="active"><a href="historia.blade.php">Nossa (Ficcional) Historia</a></li>
            <li class="active"><a href="contatos.blade.php">Contatos</a></li>
            <li class="active"><a href="fanclub.blade.php">Fan Clube</a></li>
          </ul>
        </div>
      </nav>
    </div>
      <section>
          <div class="row" id="somos">
            <div class="col s6 grey lighter-1"><div class="container">
              <h3> Quem Somos? </h3>
              Somos uma banda virtual de trip rock criada no ano de 1998 pelo vocalista líder do Blur,
              Damon Albarn e pelo cartunista Jamie Hewlett. A banda é composta por quatro membros animados: 2-D, Murdoc, Noodle
              e Russel. A música do grupo é resultado da colaboração entre vários outros
              músicos, sendo Damon Albarn o único membro permanente. Nosso estilo musical, normalmente é classificado como rock
              alternativo, embora possuimos muitas outras influêcias, como o britpop e a música eletronica. A banda já recebeu 5 indicações para o Grammy Award em 2006
              e venceu na categoria "Melhor Colaboração Pop". No mesmo ano, fizemos uma parceria com a cantora Madonna na festa
              do Grammy Awards. Atualmente temos, aproximadamente, 15 milhões de discos vendidos em todo o mundo.
            </div> </div>
            <div class="col s6 grey lighter-3"><img src="img/gorillaz-wall-tour.png" id="imgsomos" class="responsive-img" alt="GorillazApres"></div>
          </div>
      </section>
      <footer class="page-footer grey darken-2 z-depht-0">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Redes Sociais</h5>
                <p class="grey-text text-lighten-4">Acompanhem a gente nas redes socias para saberem mais informações sobre nossos shows e turnês</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contate a banda ou Faça parte do nosso fan clube</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="contatos.blade.php">Contatos</a></li>
                  <li><a class="grey-text text-lighten-3" href="fanclub.blade.php">Fan Clube</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container">
            © 1998 Copyright
            </div>
          </div>
        </footer>
    <!-- jQuery -->
    <script type="text/javascript" src="{!! asset('https://code.jquery.com/jquery-3.2.1.min.js')!!}"></script>
    <!-- Materialize JS -->
    <script type="text/javascript" src="{!! asset('materialize/js/materialize.min.js')!!}"></script>
    <!-- Menu Mobile Incialization -->
    <script> $(".button-collapse").sideNav(); </script>
  </body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Brows</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1><span>B</span>rows</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Menu</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Sobre</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Serviços</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Nosso Time</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>
 -->
<!--                   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Down<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href=# >Drop Down 1</a></li>
                      <li><a href=# >Drop Down 2</a></li>
                    </ul> 
                  </li>
 -->
<!--                   <li>
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li>
 -->                  <li>
                    <a class="page-scroll" href="#contact">Contatos</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php   for ($i=1; $i <4 ; $i++): ?>
        <img src="img/slider/<?=$i;?>.jpg" alt="" title="#slider-direction-<?=$i;?>" />
      <?php   endfor; ?>
      </div>

        <?php   for ($i=1; $i <4 ; $i++): ?>
      <!-- direction 1 -->
      <div id="slider-direction-<?=$i;?>" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <!-- <h2 class="title1">A melhor informação de negócios</h2> -->
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Bem Vindo ao site dos Brows</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">Veja nossos Serviços</a>
                  <a class="ready-btn page-scroll" href="#about">Saiba quem somos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <?php   endfor; ?>

  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Sobre os Brows</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a >
								  <img src="img/about/1.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Quem Somos?</h4>
              </a>
              <p>
                Somos um grupo de amigos que se reuniram com o intuito de criar a maior empresa do país. Sabemos que o país está repleto de empresas, mas o nosso diferencial é que por maior que seja a dificuldade não deixamos nos abalar por ela e o nosso caráter se mantem inabalavel, pois o mesmo é incorruptivel.
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Nossos Serviços</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <?php 
            $iconeServico = [
              'code',
              'laptop',
              'play-circle',
              'music',
              'industry',
              'gamepad'
            ];

            $tituloServico = [ 
              'Desenvolvimento de Sites', 
              'Manutenção de Computadores', 
              'Operação de Áudio e Video',
              'Banda',
              'Auxiliar Administrativo',
              'Time de League of Legends'
            ];

            $descServico = [
              'Produzimos sites rapídos, seguros e com uma melhor usabilidade do usuário',
              'Fazemos formatação e manutenção de computadores em geral',
              'Temos técnico especializado em gravações e edições de áudio e video',
              'Temos uma banda de excelentissima qualidade',
              'Temos profissionais especializados para auxiliar a adminstração da sua empresa',
              'Somos um dos bons times de League of Legends que já existiram no planeta'
            ];

          for ($i=0; $i < 6 ; $i++) :
          ?>
          <!-- Primary service -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
											<i class="fa fa-<?=$iconeServico[$i];?>"></i>
										</a>
                  <h4><?=$tituloServico[$i];?></h4>
                  <p>
                    <?=$descServico[$i];?>
                  </p>
                </div>
              </div>
            </div>
          </div> 
        <?php endfor; ?>
          <!-- end primary-service -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

 
   <!-- Start reviews Area -->
    <div class="reviews-area hidden-xs">
      <div class="work-us">
        <div class="work-left-text">
          <a>
              <img src="img/about/2.jpg" alt="">
            </a>
        </div>
        <div class="work-right-text text-center">
          <h2>Deseja nosso trabalho</h2>
          <h5>Um serviço de qualidade, que você não irá se arrepender.</h5>
          <a href="#contact" class="ready-btn">Fale conosco</a>
        </div>
      </div>
    </div>
    <!-- End reviews Area -->
  
  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Nosso Time especial</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
        <?php 
          $nomes = ['Erickson Ferreira', 'Lucas de Sena', 'Juninho Silva', "Lucas Silva", "Wesley Roberts", 'Erinston Ferreira'];
          $funcao = ['Mono Rammus', 'Main Talon', 'Main Vayne', "Main Ashe", "Main Ahri", 'Não Joga LOL'];
          $linkFace = [
          'https://www.facebook.com/ericksonProgramming',
          '#',
          'https://www.facebook.com/junior.ferreira.7106670',
          'https://www.facebook.com/lucassilva9703',
          'https://www.facebook.com/wesley.roberts.90475',
          'https://www.facebook.com/erinston12'
          ];
          $linkInsta = [
            'https://www.instagram.com/ericks0n0/',
            'https://www.instagram.com/lucassena97/',
            'https://www.instagram.com/marcondesjr19/',
            'https://www.instagram.com/lucas_silva_felix/',
            'https://www.instagram.com/wesleyroberts_oficial/',
            'https://www.instagram.com/erinston_ferreira/'
          ];
          for ($i=0; $i < 6 ; $i++): ?>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a >
                    <img src="img/brows/<?=$i;?>.jpg" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a <?php if($linkFace[$i] == '#'){}else{ ?>href="<?= $linkFace[$i];?>" <?php };?> >
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a <?php if($linkInsta[$i] == '#'){}else{ ?> href="<?= $linkInsta[$i];?>" <?php };?>>
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4><?=$nomes[$i];?></h4>
                <p><?=$funcao[$i];?></p>
              </div>
            </div>
          </div>
        <?php  endfor; ?>
          <!-- End column -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate"><i class="fa fa-quote-right"></i></a>,
              <?php 
              $textoVersiculo = [
                'Bendito o Deus e Pai de nosso Senhor Jesus Cristo, o qual nos abençoou com todas as bênçãos espirituais nos lugares celestiais em Cristo,como também nos elegeu nele antes da fundação do mundo, para que fôssemos santos e irrepreensíveis diante dele em amor e nos predestinou para filhos de adoção por Jesus Cristo, para si mesmo, segundo o beneplácito de sua vontade para louvor da glória de sua graça, pela qual nos fez agradáveis a si no Amado',
                'Porque dele e por ele, e para ele, são todas as coisas; glória, pois, a ele eternamente. Amém',
                'Porque Deus amou o mundo de tal maneira que deu o seu Filho unigênito, para que todo aquele que nele crê não pereça, mas tenha a vida eterna'
              ];
              $localVersiculo = [
                'Efésios 1.3-6',
                'Romanos 11.36',
                'João 3.16'
              ];
               ?>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
              <?php for ($i=0; $i < 3 ; $i++) :?>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      <?= $textoVersiculo[$i];?>
                    </p>
                    <h6><?= $localVersiculo[$i];?></h6>
                  </div>
                </div>
                <!-- End single item -->
              <?php endfor; ?>
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
 
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Nossos Contatos</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>B</span>rows</h2>
                </div>
                <p>Não são as coisas bonitas que marcam nossas vidas, mas sim as pessoas que têm o dom de jamais serem esquecidas!</p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Informações</h4>
                <p>
                  Somos um grupo particular, e para fazer parte do mesmo tem que ter muita sorte e ser muito legal. Sorte por consegui fazer amizade com pessoas como nós e legal para manter essa amizade.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> 0000-0000</p>
                  <p><span>Email:</span> brows@example.com</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <?php 
                  $linkContatos = [
                    '#',
                    'https://www.instagram.com/p/BnfLmVKAZTj/',
                    'https://www.instagram.com/p/BcPwCpOFt6i/',
                    '#',
                    '#',
                    '#',
                    '#'
                  ];
                  for ($i=1; $i < 7; $i++) : ?>
                  <a <?php if($linkContatos[$i] == '#'){}else{ ?>href="<?= $linkContatos[$i];?>" <?php };?>><img src="img/portfolio/<?=$i;?>.jpg" alt=""></a>
                <?php endfor; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>

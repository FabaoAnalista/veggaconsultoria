<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head();?>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-to">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?php bloginfo('template_url');?>/img/logo-laranja.png" class="img-responsive" alt="Vegga Consultoria" title="Vegga Consultoria">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li><a href="index.html">Início</a></li>
                    <li><a href="institucional.html">A Empresa</a></li>
                    <li class="dropdown hidden-xs">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="noticias.html">Gerenciamento de Projetos e Portfólio</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="noticias-nacionais.html">Consultoria e Perícias Técnicas</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="eng.html">Engenharia para Condomínios</a></li>
                      </ul>
                    </li>
                    <li><a href="cases.html">Cases</a></li>
                    <li><a href="cursos.html">Cursos</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header id="home">
    <div class="bg-header">
        <div class="container">
            <h1>Vegga Consultoria</h1>
            <h2>Gerenciamento e Otimização de Projetos de Engenharia Civil</h2>
            
            <div class="col-md-4 col-sm-6">
                <div class="list-group">
                  <a href="#" class="list-group-item grafit">Gerenciamento, consultorias e perícias</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="list-group">
                  <a href="#" class="list-group-item grafit">Serviços para condomínios</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="list-group">
                  <a href="#" class="list-group-item grafit">Cursos</a>
                </div>
            </div>
        </div>
    </div>
    </header>

     <section id="destaques">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Como podemos lhe ajudar?</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/projetos.png" class="img-responsive" alt="">
                      <div class="caption">
                        <h3>Gerenciamento de Projetos</h3>
                        <p>Otimização de projetos e planejamentos em obras de engenharia.</p><br>
                      </div>
                      <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/pericias.png" class="img-responsive" alt="">
                      <div class="caption">
                        <h3>Consultorias e Perícias</h3>
                        <p>Resguardo legal para a segurança de obras e projetos de engenharia.<br> *execução de Claim.</p>
                      </div>
                      <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/cursos-online.png" class="img-responsive" alt="">
                      <div class="caption">
                        <h3>Cursos Online</h3>
                        <p>Aprenda a restaurar o equilíbrio financeiro de contratos de obras e projetos de engenharia com o curso Claim.</p>
                      </div>
                      <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/padlock.png" class="img-responsive" alt="">
                      <div class="caption">
                        <h3>VeggaXDoc</h3>
                        <p>Um banco de dados inteligente para guarda e controle dos documentos afetos a area de engenharia legal para o seu condomínio.</p>
                      </div>
                      <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/obras.png" class="img-responsive" alt="">
                      <div class="caption">
                        <h3>Gerenciamento de Projetos</h3>
                        <p>Laudos, perícias e fiscalizações de obras para condomínios. Liberações de reformas em unidades particulares e áreas comuns para os síndicos.</p>
                      </div>
                      <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/icone_bombeiros.png" class="img-responsive" alt="">
                      <div class="caption">
                        <h3>AVCB</h3>
                        <p>Auto de Vistoria do Corpo de Bombeiros, implantação e renovação.</p>
                    </div>
                    <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                </div>
            </div><!--fim row-->

            </div><!--fim container-->
    </section>

    <section id="diferencial">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Nosso diferencial</h1>
                    <p>Atuamos no segmento de engenharia em consultoria, perícias técnicas, gerenciamento e serviços para projetos de terceiros.</p>
                    <p>Vasta experiência em gerenciamento de projetos e de produto com foco na satisfação dos nossos clientes.</p>
                    <p>Nossos profissionais são credenciados no Project Management Institute – PMI.</p>
                </div>
                 <div class="col-sm-6 col-md-6">
                    <h1>Por quê a Vegga ?</h1>
                     <p>Há 17 anos no mercado, provemos adaptabilidade as políticas internas e necessidade do cliente.</p>
                     <p>Projetos gerenciados nas áreas industrial siderurgia petróleo e gás, e ainda estradas ferrovias portos e obras particulares. 100% dos resultados atrelados a previsão inicial quer nos custos, prazos e na qualidade final.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cases-sucesso">
        <div class="container text-center">
            <div class="row">
                <h1>Conheça os casos de sucesso da Vegga Consultoria</h1>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/Pista_Vila_Olimpica.jpg" class="img-responsive" alt="">
                      <div class="caption">
                        <p>Obra 100% dentro do prazo, do preço e do escopo contratados. Fiemg, vila olimpica.</p><br>
                      </div>
                      <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/Safran_Service.jpg" class="img-responsive" alt="">
                      <div class="caption">
                        <p>Desenvolvemos metodologia que reverteram um déficit de -23% no exercício para 16% verificados na DER no exercício sub-sequente</p><br>
                      </div>
                      <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                       <img src="<?php bloginfo('template_url');?>/img/retomadora.jpg" class="img-responsive" alt="">
                      <div class="caption">
                        <p>Reengenharia no processo de recuperação do sistema de trilhos na Mineração Casa de Pedra (CSN) pela Andrade & Ribeiro para a retomadora, reduzindo em 50% o prazo final da obra</p><br>
                      </div>
                      <p><a href="#" class="btn btn-warning" role="button">Veja Mais</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <i class="fa fa-registered"></i>
                   2017 Vegga Consultoria. Todos os direitos reservados.
                </div>
                <div class="col-md-4">
                       <p>Avenida Nossa Senhora do Carmo 1890, sala 510</p>
                        <p>Belo Horizonte, Minas Gerais.</p>
                    
                </div>
                <div class="col-md-4">
                    <p> Tel: (55) (31) 2527-2584</p>
                    <a href="#home" class="page-scroll">
                    <span class="fa-stack fa-2x orange">   
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer();?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script>
        $('ul.nav li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>

</body>


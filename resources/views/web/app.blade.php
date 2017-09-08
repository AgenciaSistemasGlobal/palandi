<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Agência Palandi</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,400">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ asset('css/scrolling-nav.css') }}" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div id="fb-root"></div>

    <script>(function(d, s, id) {

      var js, fjs = d.getElementsByTagName(s)[0];

      if (d.getElementById(id)) return;

      js = d.createElement(s); js.id = id;

      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";

      fjs.parentNode.insertBefore(js, fjs);

    }(document, 'script', 'facebook-jssdk'));</script>

    @if (!Auth::guest())
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    Palandi Admin
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <!-- <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/admin') }}">Ir para o Admin</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endif

    <!-- Navigation -->
    <nav id="main-menus" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="{{ asset('img/logotipo-artigos-conteudo.png') }}" alt="Marketing de Conteúdo Agência Palandi" class="img-responsive">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <div class="button_container" id="toggle-menu">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="" class="btn btn-transparent">Me Ligue Agora</a>
                    </li>
                    <li>
                        <a href="" class="btn btn-primary">
                            Compra Rápida
                            <i class="fa fa-shopping-cart right" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="overlay" id="overlay">
                <nav class="overlay-menu">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="sobre.html">Sobre</a>
                        </li>
                        <li>
                            <a href="servicos.html">Serviços</a>
                        </li>
                        <li>
                            <a href="parcerias.html">Parcerias</a>
                        </li>
                        <li>
                            <a href="trabalhe-conosco.html">Vagas</a>
                        </li>
                        <li>
                            <a href="planos-mensais.html">Planos Mensais</a>
                        </li>
                        <li>
                            <a href="contato.html">Contato</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- /.navbar-collapse -->

        </div>
    </nav>

    <nav id="social-menus" class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-rss-square" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-sm-3 wow fadeInDown">

                    <h3>Quem somos</h3>

                    <ul>

                        <li>

                            <a href="#">Sobre Nós</a>

                        </li>

                        <li>

                            <a href="#">Blog</a>

                        </li>

                        <li>

                            <a href="#">E-Books Gratuitos</a>

                        </li>

                    </ul>

                </div>

                <div class="col-sm-3 wow fadeInDown" data-wow-delay=".5s">

                    <h3>Links Úteis</h3>

                    <ul>

                        <li>

                            <a href="#">Trabalhe Conosco</a>

                        </li>

                        <li>

                            <a href="#">Serviços</a>

                        </li>

                        <li>

                            <a href="#">Parcerias</a>

                        </li>

                    </ul>

                </div>

                <div class="col-sm-3 wow fadeInDown" data-wow-delay="1s">

                    <h3>Vamos ajudá-lo!</h3>

                    <ul>

                        <li>

                            <a href="#">Comrpa Rápida de Conteúdo</a>

                        </li>

                        <li>

                            <a href="#">Não tem blog? Clique aqui!</a>

                        </li>

                        <li>

                            <a href="#">Quer aprender Copywriting? CLique aqui!</a>

                        </li>

                    </ul>

                </div>

                <div class="col-sm-3 wow fadeInDown" data-wow-delay="1.5s">

                    <div class="fb-page" data-href="https://facebook.com/agenciapalandi/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://facebook.com/agenciapalandi/" class="fb-xfbml-parse-ignore"><a href="https://facebook.com/agenciapalandi/">Agência Palandi</a></blockquote></div>

                </div>

            </div>

            <!--/.row--> 

        </div>

        <div id="pos-footer">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="col-sm-6">

                            <p>© 2017 Agência Palandi. Todos os direitos reservados.</p>

                        </div>

                        <div class="col-sm-6 text-right">

                            <p>Só podia ser <a href="https://sistemasglobal.com.br">Sistemas Global</a></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <a href="#page-top" class="page-scroll" id="to-top">

        <i class="fa fa-arrow-up" aria-hidden="true"></i>

    </a>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>
</body>
</html>

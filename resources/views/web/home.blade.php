@extends('web.app')

@section('title', 'Home')

@section('content')

<!-- Intro Section -->
@include('web.intro', ['title' => 'Bem-vindo à Agência Palandi!'])

<!-- Services Section -->
<section id="services" class="services-section">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <div class="title-vertical">

                    <h2 class="title-fine wow fadeInDown">Nossos Principais Serviços</h2>

                </div>

                <div class="row">

                    <div class="all-services-format-logo">

                        <div class="col-sm-4 text-center wow fadeInLeft">

                            <div class="services-format-logo">

                                <i class="fa fa-file-text-o" aria-hidden="true"></i>

                            </div>

                            <br><br>

                            <span class="services-format-desc">Artigos</span>

                            <div class="text-services">

                                <p>Textos exclusivos, originais, livres de plágio, otimizados e sobre o assunto que você quiser, sempre visando conversão e otimização (SEO)!</p>

                                <a href="" class="btn btn-primary">Compra rápida</a>

                            </div>

                        </div>

                        <div class="col-sm-4 text-center wow fadeInUp" data-wow-delay=".5s">

                            <div class="services-format-logo">

                                <i class="fa fa-envelope-o" aria-hidden="true"></i>

                            </div>

                            <br><br>

                            <span class="services-format-desc">E-mail</span>

                            <div class="text-services">

                                <p>Crie funis de vendas de alta conversão para vender seus produtos e serviços ou trabalhar como afiliado!</p>

                                <a href="" class="btn btn-primary">Compra rápida</a>

                            </div>

                        </div>

                        <div class="col-sm-4 text-center wow fadeInRight" data-wow-delay="1s">

                            <div class="services-format-logo">

                                <i class="fa fa-book" aria-hidden="true"></i>

                            </div>

                            <br><br>

                            <span class="services-format-desc">Ebook</span>

                            <div class="text-services">

                                <p>Seja para utilizar como isca digital ou para vender, nós fazemos desde o conteúdo até a diagramação – entregando para você com capa.</p>

                                <a href="" class="btn btn-primary">Compra rápida</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-12 wow bounceIn" data-wow-delay="1.5s">

                        <a href="servicos.html">Conheça todos nossos serviços</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Compra Rápida -->
<section id="compra-rapida" class="about-section">

    <div class="container">

        <div class="title-vertical text-center">

            <h2 class="title-fine wow fadeInDown"><strong>Invista Agora em Conteúdo!</strong><br>Monte o seu pacote abaixo:</h2>

        </div>

        <div class="row">

            <div class="col-sm-12">

                <!-- Artigos -->

                <div class="big-card wow zoomIn">

                    <div class="row">

                        <div class="col-sm-4">

                            <div class="img-side">

                                <i class="fa fa-file-text-o" aria-hidden="true"></i>

                            </div>

                        </div>

                        <div class="col-sm-8">

                            <div class="desc-side">

                                <h3>Artigos para blog</h3>

                                <h4 class="preco-card">R$ 27,00</h4>

                                <p>Escolha o número de artigos e de palavras que deseja, bem como se os mesmos devem ser publicados por nós, e se devem ou não ter imagens. Caso tenha algum cupom de desconto, clique na caixa de seleção abaixo. Depois, adicione ao carrinho!</p>

                                <form class="form-horizontal">

                                    <div>

                                        <div class="form-group"> 

                                            <div class="col-sm-12">

                                                <div class="checkbox">

                                                    <label><input type="checkbox"> Incluir cupom de <strong>desconto</strong></label>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <label class="control-label" for="palavras">Palavras</label>

                                                <div class="input-group spinner">

                                                    <input type="text" class="form-control" value="500" id="palavras">

                                                    <div class="input-group-btn-vertical">

                                                        <button data-target="palavras" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-up"></i>

                                                        </button>

                                                        <button data-target="palavras" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-down"></i>

                                                        </button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <label class="control-label" for="quantidade">Quantidade</label>

                                                <div class="input-group spinner">

                                                    <input type="text" class="form-control" value="1" id="quantidade">

                                                    <div class="input-group-btn-vertical">

                                                        <button data-target="quantidade" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-up"></i>

                                                        </button>

                                                        <button data-target="quantidade" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-down"></i>

                                                        </button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <label class="control-label" for="quantidade">Publicação</label>

                                                <div>

                                                    <input type="checkbox" checked data-toggle="toggle" data-on="Sim" data-off="Não" data-onstyle="primary" data-offstyle="danger" data-width="100">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <label class="control-label" for="quantidade">Imagem</label>

                                                <div>

                                                    <input type="checkbox" checked data-toggle="toggle" data-on="Sim" data-off="Não" data-onstyle="primary" data-offstyle="danger" data-width="100">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="big-card-actions">

                                            <a href="" class="btn btn-primary btn-lg">Adicionar ao Carrinho <i class="fa fa-cart-plus right" aria-hidden="true"></i></a>

                                            <a href="">Adquira seu cupom de desconto aqui</a>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Email -->

                <div class="big-card wow zoomIn">

                    <div class="row">

                        <div class="col-sm-8">

                            <div class="desc-side">

                                <h3>E-mail</h3>

                                <h4 class="preco-card">R$ 50,00</h4>

                                <p>Adquira e-mails para o seu funil de vendas ou newsletter! Cada um tem, em média, 150 palavras, que é o número ideal para comunicar-se com eficiência, aumentando a taxa de leitura e de cliques.</p>

                                <form class="form-horizontal">

                                    <div>

                                        <div class="form-group"> 

                                            <div class="col-sm-12">

                                                <div class="checkbox">

                                                    <label><input type="checkbox"> Incluir cupom de <strong>desconto</strong></label>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <label class="control-label" for="palavras">E-mails</label>

                                                <div class="input-group spinner">

                                                    <input type="text" class="form-control" value="1" id="palavras">

                                                    <div class="input-group-btn-vertical">

                                                        <button data-target="palavras" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-up"></i>

                                                        </button>

                                                        <button data-target="palavras" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-down"></i>

                                                        </button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <label class="control-label" for="quantidade">Quantidade</label>

                                                <div class="input-group spinner">

                                                    <input type="text" class="form-control" value="1" id="quantidade">

                                                    <div class="input-group-btn-vertical">

                                                        <button data-target="quantidade" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-up"></i>

                                                        </button>

                                                        <button data-target="quantidade" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-down"></i>

                                                        </button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="big-card-actions">

                                            <a href="" class="btn btn-primary btn-lg">Adicionar ao Carrinho <i class="fa fa-cart-plus right" aria-hidden="true"></i></a>

                                            <a href="">Adquira seu cupom de desconto aqui</a>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                        <div class="col-sm-4">

                            <div class="img-side">

                                <i class="fa fa-envelope-o" aria-hidden="true"></i>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Ebook -->

                <div class="big-card wow zoomIn">

                    <div class="row">

                        <div class="col-sm-4">

                            <div class="img-side">

                                <i class="fa fa-book" aria-hidden="true"></i>

                            </div>

                        </div>

                        <div class="col-sm-8">

                            <div class="desc-side">

                                <h3>Ebook</h3>

                                <h4 class="preco-card">R$ 30,00</h4>

                                <p>Escolha o número de páginas abaixo e a quantidade de e-Books que deseja. Todo e-Book já vem com capa e diagramação, pronto para você pegar e publicar. Hoje, livro digital é extremamente apreciado e tem um alcance enorme!</p>

                                <form class="form-horizontal">

                                    <div>

                                        <div class="form-group"> 

                                            <div class="col-sm-12">

                                                <div class="checkbox">

                                                    <label><input type="checkbox"> Incluir cupom de <strong>desconto</strong></label>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <label class="control-label" for="palavras">Páginas</label>

                                                <div class="input-group spinner">

                                                    <input type="text" class="form-control" value="1" id="palavras">

                                                    <div class="input-group-btn-vertical">

                                                        <button data-target="palavras" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-up"></i>

                                                        </button>

                                                        <button data-target="palavras" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-down"></i>

                                                        </button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <label class="control-label" for="quantidade">Quantidade</label>

                                                <div class="input-group spinner">

                                                    <input type="text" class="form-control" value="1" id="quantidade">

                                                    <div class="input-group-btn-vertical">

                                                        <button data-target="quantidade" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-up"></i>

                                                        </button>

                                                        <button data-target="quantidade" class="btn btn-default" type="button">

                                                            <i class="fa fa-caret-down"></i>

                                                        </button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="big-card-actions">

                                            <a href="" class="btn btn-primary btn-lg">Adicionar ao Carrinho <i class="fa fa-cart-plus right" aria-hidden="true"></i></a>

                                            <a href="">Adquira seu cupom de desconto aqui</a>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Quem somos -->
<section id="quem-somos" class="services-section">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">

                <div class="title-vertical">

                    <h2 class="title-fine wow fadeInDown">Sobre nós</h2>

                </div>

                <ul id="timeline" class="pull-right">

                    <li class="wow fadeInRight">

                        <span>

                            A Agência Palandi é referência em Marketing de Conteúdo no Brasil, sendo a escolha de milhares de empreendedores para a produção de artigos para blog, e-books e e-mails. A história é longa: tudo começou em 2009, quando o Victor Palandi iniciou seu trabalho como blogueiro. Vendo que tinha desenvoltura para a escrita, investiu mais de seu tempo, trabalhando também como redator Freelancer. Após ter criado mais de 40 blogs e ter escrito milhares de artigos, a empresa nasceu, em 2013.

                        </span>

                    </li>

                    <li class="wow fadeInRight" data-wow-delay=".5s">

                        <span>

                            Rapidamente, com a ajuda de profissionais capacitados, ela se destacou. E o seu grande diferencial é entender o que o cliente busca. Por exemplo, todos os artigos são otimizados (SEO), para melhor posicionamento no Google. Além disso, a conversão sempre é levada em conta, seja de produto físico ou infoproduto. Por esse motivo, ela produz reviews e artigos de topo, meio e fim de funil.

                        </span>

                    </li>

                    <li class="wow fadeInRight" data-wow-delay="1s">

                        <span>

                            Mais do que isso, a Agência Palandi sabe que o tempo não para. Logo, os prazos são extremamente flexíveis, para se encaixarem no cronograma de publicação do profissional que a contrata.

                            Em meio à crise, a internet é uma das melhores amigas no trabalho de marketing e vendas. Deixe que a Agência Palandi esteja ao seu lado nesta jornada!

                        </span>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- Cupom de desconto -->
@include('web.cupom')

<!-- O que estão falando -->
<section id="feedback" class="services-section">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <div class="title-vertical text-center">

                    <h2 class="title-fine wow fadeInDown">O que estão falando da<br>Agência Palandi?</h2>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid wow fadeInDown">

        <div class="carousel slide" id="carousel-depoimentos">

            <ol id="selectors-feedback" class="carousel-indicators">

                <li data-target="#carousel-depoimentos" data-slide-to="0" class="active"></li>

                <li data-target="#carousel-depoimentos" data-slide-to="1"></li>

                <li data-target="#carousel-depoimentos" data-slide-to="2"></li>

                <li data-target="#carousel-depoimentos" data-slide-to="3"></li>

                <li data-target="#carousel-depoimentos" data-slide-to="4"></li>

                <li data-target="#carousel-depoimentos" data-slide-to="5"></li>

            </ol>

            <div class="carousel-inner">

                <div class="item active">

                    <div class="col-sm-4 cols-com">

                        <div class="big-card">

                            <i class="fa fa-quote-left dest-depos" aria-hidden="true"></i>

                            <p>Oi, querido Victor, boa tarde! Muito obrigada pelo super ágil e gentil feedback ao meu contato! Sem palavras! Essas atitudes é que fazem profissionais como vc, serem referenciais de excelência, integridade e exímio profissionalismo!!!</p>

                            <div class="nome">

                                <p>

                                    Giorgiana

                                </p>

                            </div>

                            <div class="profissao">

                                <p>

                                    Profissional de Marketing

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="item">

                    <div class="col-sm-4 cols-com">

                        <div class="big-card">

                            <i class="fa fa-quote-left dest-depos" aria-hidden="true"></i>

                            <p>Victor P*** QUE PARIU !!!!! Você é muito foda cara. 

                            Ficou excelente, faltou palavras aqui para descrever a qualidade do seu trabalho, é muito bom.

                            Parabéns Victor muito mas muito agradecido</p>

                            <div class="nome">

                                <p>

                                    Sidney

                                </p>

                            </div>

                            <div class="profissao">

                                <p>

                                    Músico Profissional

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="item">

                    <div class="col-sm-4 cols-com">

                        <div class="big-card">

                            <i class="fa fa-quote-left dest-depos" aria-hidden="true"></i>

                            <p>Qual foi minha surpresa? Amei, amei,amei!!! Seu texto, fiquei pensando, eu há três anos venho fazendo almofadas para crianças e não consegui colocar nas descrições nem a metade do conteúdo que você escreveu... </p>

                            <div class="nome">

                                <p>

                                    Elisama

                                </p>

                            </div>

                            <div class="profissao">

                                <p>

                                    Artista

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="item">

                    <div class="col-sm-4 cols-com">

                        <div class="big-card">

                            <i class="fa fa-quote-left dest-depos" aria-hidden="true"></i>

                            <p>Já recebi o artigo BOLO NO POTE, e ficou sensacional,

                            parabéns Victor e toda sua equipe vocês são os melhores,

                            agora é só publicar o artigo e vamos que vamos...</p>

                            <div class="nome">

                                <p>

                                    Anderson

                                </p>

                            </div>

                            <div class="profissao">

                                <p>

                                    Afiliado Profissional

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="item">

                    <div class="col-sm-4 cols-com">

                        <div class="big-card">

                            <i class="fa fa-quote-left dest-depos" aria-hidden="true"></i>

                            <p>Oi Victor, Tudo bom, mais ainda quando recebo os teus e-mails com “Super textos” hehe, obrigado por mais uma super redação :)</p>

                            <div class="nome">

                                <p>

                                    Derlis

                                </p>

                            </div>

                            <div class="profissao">

                                <p>

                                    Designer

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="item">

                    <div class="col-sm-4 cols-com">

                        <div class="big-card">

                            <i class="fa fa-quote-left dest-depos" aria-hidden="true"></i>

                            <p>Já ia me esquecendo fui para primeira pagina do Google no segundo dia com o mini site, show.</p>

                            <div class="nome">

                                <p>

                                    Leonardo

                                </p>

                            </div>

                            <div class="profissao">

                                <p>

                                    Empreendedor Digital

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <br><br>

    <div class="container">

        <div class="row">

            <div class="col-sm-12 wow bounceIn">

                <a href="http://agenciapalandi.com/desconto/">E tem muito mais...</a>

            </div>

        </div>

    </div>

</section>

<!-- Contato -->
<section id="contact" class="contact-section">

    <div class="container">

        <div class="title-vertical text-center">

            <h2 class="title-fine wow fadeInDown">Vamos conversar?</h2>

        </div>

        <!-- Form Contato Section -->
        @include('web.form-contato')

    </div>

</section>

<!-- Newsletter -->
@include('web.newsletter')

@endsection
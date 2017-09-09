@extends('web.app')

@section('title', 'Sobre')

@section('content')

<!-- Intro Section -->
@include('web.intro', ['title' => 'Sobre'])

<!-- Sobre Section -->
<section id="services" class="services-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="text-left">

                    <h2 class="title-fine wow fadeIn"><strong>Quem é a Agência Palandi?</strong><br>Conheça um pouco mais sobre nós!</h2>

                </div>

            </div>

        </div>

        <br><br>

        <div class="row">

            <div class="col-lg-12 text-left wow fadeInLeft">

                <p>

                    A Agência Palandi é referência em Marketing de Conteúdo no Brasil, sendo a escolha de milhares de empreendedores para a produção de artigos para blog, e-books e e-mails. A história é longa: tudo começou em 2009, quando o Victor Palandi iniciou seu trabalho como blogueiro. Vendo que tinha desenvoltura para a escrita, investiu mais de seu tempo, trabalhando também como redator Freelancer. Após ter criado mais de 40 blogs e ter escrito milhares de artigos, a empresa nasceu, em 2013.

                </p>

                <p>

                    Rapidamente, com a ajuda de profissionais capacitados, ela se destacou. E o seu grande diferencial é entender o que o cliente busca. Por exemplo, todos os artigos são otimizados (SEO), para melhor posicionamento no Google. Além disso, a conversão sempre é levada em conta, seja de produto físico ou infoproduto. Por esse motivo, ela produz reviews e artigos de topo, meio e fim de funil.

                </p>

                <p>

                    Mais do que isso, a Agência Palandi sabe que o tempo não para. Logo, os prazos são extremamente flexíveis, para se encaixarem no cronograma de publicação do profissional que a contrata.

                    Em meio à crise, a internet é uma das melhores amigas no trabalho de marketing e vendas. Deixe que a Agência Palandi esteja ao seu lado nesta jornada!

                </p>

            </div>

        </div>

    </div>

</section>

<!-- Newsletter -->
@include('web.newsletter')

@endsection
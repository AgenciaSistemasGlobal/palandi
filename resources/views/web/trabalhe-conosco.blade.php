@extends('web.app')

@section('title', 'Trabalhe Conosco')

@section('content')

<!-- Intro Section -->
@include('web.intro', ['title' => 'Trabalhe Conosco'])

<!-- Trabalhe Conosco Section -->
<section id="services" class="services-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="text-left">

                    <h2 class="title-fine wow fadeIn">Vagas em aberto</h2>

                </div>

            </div>

        </div>

        <br><br>

        <div class="row">

            <div class="all-services-format-logo">

                <div class="col-lg-6 text-left wow fadeInLeft">

                    <h2>Redação</h2>

                    <p>Se você curte escrever artigos e gostaria de trabalhar de casa, com horário flexível, venha para a Agência Palandi.</p>

                </div>

                <div class="col-lg-6 text-left wow fadeInRight">

                    <h2>Revisão</h2>

                    <p>O seu português é impecável? Então fale com a gente e entre para o nosso time de revisores, trabalhando em casa, com horário flexível.</p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <h4 class="wow bounceIn">Novas vagas em breve!</h4>

            </div>

        </div>

        <!-- Form Contato Section -->
        @include('web.form-contato')

    </div>

</section>

@endsection
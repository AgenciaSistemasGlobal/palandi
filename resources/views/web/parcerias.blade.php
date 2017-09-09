@extends('web.app')

@section('title', 'Parcerias')

@section('content')

<!-- Intro Section -->
@include('web.intro', ['title' => 'Parcerias'])

<!-- Parcerias Section -->
<section id="services" class="services-section">

    <div class="container">

        <div class="row">
        
            <div class="col-lg-12">

                <div class="text-left">

                    <h2 class="title-fine wow fadeIn"><strong>Seja uma Agência parceira da Palandi!</strong><br>Preços e condições especiais</h2>

                </div>

            </div>

        </div>

        <br><br>

        <div class="row">

            <div class="all-services-format-logo">

                <div class="col-lg-6 text-left wow fadeInLeft">

                    <h2>Por que ser Parceira da Palandi?</h2>

                    <p>Preços especiais, prazos flexíveis e contato rápido e direto com a equipe de atendimento, relacionamento e produção.</p>

                </div>

                <div class="col-lg-6 text-left wow fadeInRight">

                    <h2>Como ser Parceira da Palandi</h2>

                    <p>Simples! Preencha os seus dados nos campos abaixo e nós entraremos em contato passando mais detalhes.</p>

                </div>

            </div>

        </div>

        <!-- Form Contato Section -->
        @include('web.form-contato')

    </div>

</section>

@endsection
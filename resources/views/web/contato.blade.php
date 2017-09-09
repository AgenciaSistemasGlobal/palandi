@extends('web.app')

@section('title', 'Contato')

@section('content')

<!-- Intro Section -->
@include('web.intro', ['title' => 'Contato'])

<!-- Contato Section -->
<section id="contact" class="contact-section padding-top-none">

    <div class="container-fluid">
        <!-- Form Contato Section -->
        @include('web.form-contato')
    </div>

</section>

<section id="map" class="section-colored" style="background-attachment: initial;"></section>

@endsection
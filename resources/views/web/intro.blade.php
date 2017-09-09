<!-- Intro Section -->
<section id="intro" class="section-colored intro-section bgParallax" data-speed="5">

    <div class="container">

        <div class="row">

            <div class="col-sm-10 col-sm-offset-1">

                <h1 class="wow fadeInDown">{{ $title }}</h1>

            </div>

        </div>

        @if (Request::is('/'))
        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <p class="wow fadeInUp" data-wow-delay=".5s">Mi casa, su casa! Sinta-se à vontade, conheça mais sobre o nosso trabalho e invista em conteúdo com quem entende e sabe de suas necessidades. =)</p>

            </div>

        </div>

        <br><br><br>

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <div class="row">

                    <div class="col-sm-6 text-right">

                        <a class="btn btn-transparent page-scroll btn-lg wow fadeInLeft" data-wow-delay="1s" href="#services">Serviços</a>

                    </div>

                    <div class="col-sm-6 text-left">

                        <a class="btn btn-primary page-scroll btn-lg wow fadeInRight" data-wow-delay="1.5s" href="#compra-rapida">Compra Rápida</a>

                    </div>

                </div>

            </div>

        </div>

        <span class="scroll-btn">

            <a href="#services" class="page-scroll">

                <span class="mouse">

                    <span></span>

                </span>

            </a>

        </span>
        @endif

    </div>

</section>
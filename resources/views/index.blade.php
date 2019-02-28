@extends('pages.master') 
@section('header')
    @include('partials.head1')
@endsection
 
@section('content')
<p>&nbsp;</p>
<!-- Hero Section -->
<div class="gradient-overlay-half-dark-v3 bg-img-hero d-none" style="background-image: url('img/bg.jpg');">
    <!-- Main Content-->
    <div class="d-lg-flex align-items-end bg-height-100 pb-5">
        <div class="container ">
            <div class="row justify-content-end align-items-lg-center">
                <div class="col-md-12 text-right"><img src="img/contact.png" alt="contact" /></div>
            </div>
        </div>
    </div>
</div>
<!-- About -->
<div class="container space-2 space-3-bottom about">
    <div class="row justify-content-between">
        <div class="col-md-12 text-center">
            <h3>Qui sommes nous</h3>
            <p class="my-5">Notre slogan &laquo; L&rsquo;investissement s&ucirc;r &raquo; traduit parfaitement l&rsquo;&eacute;tat d&rsquo;esprit
                dans lequel nous travaillons pour r&eacute;pondre aux nouveaux besoins du march&eacute; de l&rsquo;immobilier
                parce-que nous consid&eacute;rons que l&rsquo;achat d&rsquo;un bien immobilier est investissement de vie.
                Abrar immo est un promoteur immobilier sp&eacute;cialis&eacute; dans le d&eacute;veloppement de lotissements
                r&eacute;sidentiels et la construction d&rsquo;immeubles.</p>
            <a href="/abrar-immo"> <img src="img/lire_suite.png" alt="contact" /></a></div>
    </div>
</div>
<!-- End About -->
<hr class="my-0" />
<!-- plan -->
<div class="container-fluid plan">
    <div class="row justify-content-center bg-primary">
        <div class="col-md-6 p-0"><img class="img-fluid w-100" src="img/map_left.png" alt="plan" /></div>
        <div class="col-md-6 p-0"><img class="img-fluid w-100" style="border-left: 3px solid white;" src="img/map_right.png" alt="map" /></div>
        <div class="col-md-8 space-2">
            <p class="text-white" style="font-size: 30px;">Le projet la Perle d&rsquo;Abrar de Berrechid vous offre des lots de terrains viabilis&eacute;s et &eacute;quip&eacute;s
                de type R +2 R +3 R +4 Diff&eacute;rentes superficies sont disponibles &agrave; partir de 80 m&egrave;tres
                carr&eacute;s.
            </p>
        </div>
    </div>
</div>
<!-- end plan -->
<p>&nbsp;</p>
<!-- no realisation -->
<div class="container-fluid realisation space-1-top">
    <div class="row  justify-content-center">
        <div class="col-md-12">
            <div data-autoplay="true" data-speed="2000" data-infinite="true" data-slides-show="5" class="js-slick-carousel u-slick slick-initialized slick-slider">&nbsp;
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center card-deck">
            @foreach ($projets as $projet)
            <div class="col-md-3 proj">
                <div class="card mb-3 border-0">
                    <img class="card-img-top" src="{{ asset('storage/'.$projet->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$projet->title}}</h5>

                        <p class="card-text"><small class="text-muted">{{ $projet->categories}}</small></p>
                    </div>
                </div>
                <div class="middle">
                    <div class="text "><a href="{{ url('projets',$projet->slug)}}"><span class="far fa-eye"></span></a> </div>
                </div>
            </div>
            @endforeach {{-- <img src="img/hover.png" alt="hover" class="img-fluid w-100"> --}}
            <div class="col-md-12">

                <h2 class="text-primary space-1 font-weight-bold">Service clients: 0522 78 76 61 - 0666 200 619</h2>
            </div>
        </div>
    </div>
</div>
<!-- end nos realisation  -->
<p>&nbsp;</p>
<!-- no projects -->
<div class="container-fluid projet">
    <div class="row  justify-content-center">
        <div class="col-md-12 p-0 text-center">
            <h2 class="mb-9 space-1 bg-primary text-white font-weight-bold">Nos projets</h2>
            <iframe src="https://www.youtube.com/embed/p-hItnLpaq8" width="1170" height="571" frameborder="0" allowfullscreen=""></iframe></div>
    </div>
</div>
<!-- end nos projects  -->
<p>&nbsp;</p>
<!-- block_3 -->
<div class="container-fluid space-2">
    <div class="row justify-content-lg-center">
        <div class="col-md-6 col-lg-4">
            <!-- diamond -->
            <div class="text-center px-lg-4">
                <div class="mb-2"><img class="mb-3 " src="img/diamond.png" alt="diamond" />
                    <h4 class="text-primary px-xl-6">l&rsquo;immobilier avec grand espace nature</h4>
                </div>
                <blockquote class="text-secondary mb-0">Acqu&eacute;rir votre appartement ou votre bien immobilier dans nos projets, c&rsquo;est investir dans un
                    cadre naturel avec des espaces verts d&eacute;di&eacute;s &agrave; votre bien-&ecirc;tre durable</blockquote>
            </div>
            <!-- End diamond -->
        </div>
        <div class="col-md-6 col-lg-4">
            <!-- diamond -->
            <div class="text-center px-lg-4">
                <div class="mb-2"><img class="mb-3 " src="img/arc.png" alt="arc" />
                    <h4 class="text-primary px-xl-6">Votre logement &agrave; des prix adapt&eacute;s &agrave; votre budget</h4>
                </div>
                <blockquote class="text-secondary mb-0">Quelque soit votre budget, nous veillons &agrave; vous offrir la meilleure qualit&eacute; de logement avec
                    des facilit&eacute;s de paiement personnalis&eacute;es.</blockquote>
            </div>
            <!-- End diamond -->
        </div>
        <div class="col-md-6 col-lg-4">
            <!-- diamond -->
            <div class="text-center px-lg-4">
                <div class="mb-2"><img class="mb-3 " src="img/star.png" alt="diamond" />
                    <h4 class="text-primary px-xl-6">Les emplacements bien &eacute;tudi&eacute;s pour votre avenir</h4>
                </div>
                <blockquote class="text-secondary mb-0">Nous choisissons les meilleurs emplacements pour nos projets afin de garantir la proximit&eacute;, les commodit&eacute;s
                    et l&rsquo;environnement.</blockquote>
            </div>
            <!-- End diamond -->
        </div>
    </div>
</div>
<!-- end block_3 -->
<p>&nbsp;</p>
<!-- block 4 -->
<div class="container-fluid block_text">
    <div class="row justify-content-center bg-primary">
        <div class="col-md-8 space-2">
            <p class="text-white">Faisant partie du groupe Abrar Invest, Abrar immo met tout son savoir-faire au profit pour associer le caract&egrave;re
                de ces b&acirc;timents &agrave; une architecture de qualit&eacute; et donner vie &agrave; tout ces projets
                . <br /> Ceci en se basant sur 3 principes fondamentaux: <br /><br /> Choix du terrain avec des situations
                strat&eacute;giques Donner une grande partie aux espaces verts et &eacute;quipements de proximit&eacute;
                Assurer une construction et un service apr&egrave;s vente de qualit&eacute;.<br /> Chez Abrar immo, nous
                donnons le meilleur de nous-m&ecirc;mes pour vous proposer le meilleur des projets.</p>
        </div>
    </div>
</div>
<!-- end block 4 -->
<p>&nbsp;</p>
<!-- block 4 -->
<div class="container-fluid space-2-bottom partenaires">
    <div class="row">
        <!-- ========== LEFT ========== -->
        <div class="col-md-12">
            <h2 class="mb-9 space-1 text-center font-weight-bold">Nos partenaires</h2>
        </div>
    </div>
    <!-- Slick Carousel -->
    <div class="js-slick-carousel u-slick" data-autoplay="true" data-speed="2000" data-infinite="true" data-slides-show="5">
        <div class="js-slide"><img class="u-clients" src="img/logos/logo1.png" alt="Image Description" /></div>
        <div class="js-slide"><img class="u-clients" src="img/logos/logo2.png" alt="Image Description" /></div>
        <div class="js-slide"><img class="u-clients" src="img/logos/logo3.png" alt="Image Description" /></div>
        <div class="js-slide"><img class="u-clients" src="img/logos/logo4.png" alt="Image Description" /></div>
        <div class="js-slide"><img class="u-clients" src="img/logos/logo5.png" alt="Image Description" /></div>
        <div class="js-slide"><img class="u-clients" src="img/logos/logo1.png" alt="Image Description" /></div>
    </div>
    <!-- End Slick Carousel -->
</div>
<!-- end block 4 -->
<p>&nbsp;</p>
@endsection
 
@section('sliders')
<div id="homeslider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($sliders as $slider)
        <li data-target="#homeslider" data-slide-to="{{ $loop->index }}" class="@if ($loop->first)
                        active
                    @endif "></li>@endforeach

    </ol>
    <div class="carousel-inner">
        @foreach ($sliders as $slider)
        <div class="carousel-item @if ($loop->first)
                        active
                    @endif ">
            <img class="d-block w-100" src="{{ asset('storage/'.$slider->photo) }}" alt="First slide"> {!! $slider->col !!}

        </div>
        @endforeach


    </div>
    <a class="carousel-control-prev" href="#homeslider" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
    <a class="carousel-control-next" href="#homeslider" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
</div>
@endsection
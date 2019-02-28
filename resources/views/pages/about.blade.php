@extends('pages.master') 
@section('header')
    @include('partials.head1')
@endsection
 
@section('script')
<script src="js/countUp.min.js"></script>
<script>
    $('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 1000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});

</script>
@endsection
 
@section('content')
<div id="aboutslider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#aboutslider" data-slide-to="0" class="active"></li>
        <li data-target="#aboutslider" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="http://localhost:8000/storage/pages/about_slider.png" class="w-100" data-src="http://localhost:8000/storage/pages/about_slider.png"
                alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="http://localhost:8000/storage/pages/about_slider.png" class="w-100" data-src="http://localhost:8000/storage/pages/about_slider.png"
                alt="Second slide">
        </div>

    </div>
    <a class="carousel-control-prev" href="#aboutslider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#aboutslider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="full-width bg-primary">
    <div class="container space-2 ">
        <div class="row justify-content-lg-center ">
            <div class="col-md-6 col-lg-3">
                <div class="media pr-lg-4 align-items-center">
                    <img class="max-width-10 mr-3" src="storage/pages/portfolio.png" alt="Image Description">
                    <div class="media-body">
                        <h3 class="counter" data-count="548">0</h3>
                        <p class="mb-0">projects completed</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-3">
                <div class="media pr-lg-4 align-items-center">
                    <img class="max-width-10 mr-3" src="storage/pages/clock.png" alt="Image Description">
                    <div class="media-body">
                        <h3 class="counter" data-count="1465">0</h3>
                        <p class="mb-0">projects completed</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-3">
                <div class="media pr-lg-4 align-items-center">
                    <img class="max-width-10 mr-3" src="storage/pages/star.png" alt="Image Description">
                    <div class="media-body">
                        <h3 class="counter" data-count="548">0</h3>
                        <p class="mb-0">projects completed</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-3">
                <div class="media pr-lg-4 align-items-center">
                    <img class="max-width-10 mr-3" src="storage/pages/like.png" alt="Image Description">
                    <div class="media-body">
                        <h3 class="counter" data-count="548">0</h3>
                        <p class="mb-0">projects completed</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">

    <div class="row justify-content-center align-items-center bg-gray">
        <div class="col-md-6    text-center">

            <img src="/storage/pages/logo_about.png" alt="log about">
            <div class=" ">
                <h1>Qui sommes nous</h1>
            </div>

        </div>
        <div class="col-md-6 bg-white p-6">

            <p class="lead">Notre slogan « L’investissement sûr » traduit parfaitement l’état d’esprit dans lequel nous travaillons pour
                répondre aux nouveaux besoins du marché de l’immobilier parce-que nous considérons que l’achat d’un bien
                immobilier est investissement de vie. Abrar immo est un promoteur immobilier spécialisé dans le développement
                de lotissements résidentiels et la construction d’immeubles. Faisant partie du groupe Abrar Invest, Abrar
                immo met tout son savoir-faire au profit pour associer le caractère de ces bâtiments à une architecture de
                qualité et donner vie à tout ces projets . Ceci en se basant sur 3 principes fondamentaux:</p>
            <ul>
                <li><b>Choix du terrain avec des situations stratégiques</b></li>
                <li><b>Donner une grande partie aux espaces verts et équipements de proximité</b></li>
                <li><b>Assurer une construction et un service après vente de qualité</b></li>
            </ul>
            <p class="text-dark"><b>Chez Abrar immo, nous donnons le meilleur de nous-mêmes 
                    pour vous proposer le meilleur des projets.</b></p>
        </div>
    </div>
</div>
@endsection
@extends('pages.master') 
@section('header')
    @include('partials.head1')
@endsection
 
@section('script') {{--
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script> --}} {{--
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script> --}}
@endsection
 
@section('content')
<div class="container-fluid space-3-top mt-9 px-9">
    <div class="row justify-content-between">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1><strong>{{$projet->title}}</strong></h1>
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6"><img src="{{asset('storage/'.$projet->photo)}}" class="img-fluid" width="650"></div>
                    <div class="col-md-6"><a class="btn btn-primary btn-block" href="{{url('contacts')}}">DEMANDE D'INFORMATIONS</a>
                        <a class="btn btn-primary btn-block" href="{{url('contacts')}}">PRISE DE RENDEZ-VOUS</a> <a class="btn btn-primary btn-block"
                            href="{{asset('storage/'.(json_decode($projet->brochure))[0]->download_link)}}" target="_blank">TELECHARGER LA BROCHURE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container projets">
    <div class="row justify-content-between">
        <div class="col-md-12">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a id="home-tab" class="nav-link active show" role="tab" href="#home" data-toggle="tab" aria-controls="home"
                        aria-selected="false">PR&Eacute;SENTATION</a></li>
                <li class="nav-item"><a id="profile-tab" class="nav-link " role="tab" href="#profile" data-toggle="tab" aria-controls="profile"
                        aria-selected="true">Plan</a></li>
            </ul>
            <div id="myTabContent" class="tab-content px-5 py-5">
                <div id="home" class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
                    <h2>Le Lotissement Abrar Sidi Othmane vous offre une grande opportunit&eacute; d&rsquo;investissement</h2>
                    <p>Situ&eacute; en plein coeur du quartier sidi Othman sur le Boulevard Mohammed Jodar, le lotissement est
                        un projet int&eacute;gr&eacute; dot&eacute; d&rsquo;&eacute;quipements importants et &agrave; proximit&eacute;
                        de diverses commodit&eacute;s pour une vie quotidienne de qualit&eacute;. Notamment le centre commercial
                        Marjane Sidi Othman, Les jardins de Sidi Othman. Les grands axes routiers &agrave; savoir Boulevard
                        Oulad Ziyane, Autoroute et la station de tramway Attacharok</p>
                    <div>
                        <h2>Produits</h2>
                        <img class="mx-5" src="/storage/pages/r_4.png" alt="r+4" /> <img class="mx-5" src="/storage/pages/r_3.png"
                            alt="r+3" /></div>
                    <div class="text-center mt-5">
                        <h2 class="text-left mb-8">Equipements</h2>
                        <img src="/storage/pages/equipment.png" /></div>
                </div>
                <div id="profile" class="tab-pane fade " role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Plan de masse</h2>
                            <img src="http://abrarimmo.com/wp-content/uploads/Plan-de-masse-berrechid-1.jpg" class="img-fluid" />
                        </div>
                        <div class="col-md-6">
                            <h2>Plan de situation</h2>
                            <img src="http://abrarimmo.com/wp-content/uploads/Plan-de-masse-berrechid-1.jpg" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! $projet->body !!}
@endsection
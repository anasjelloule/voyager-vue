@extends('pages.master') 
@section('header')
    @include('partials.head1')
@endsection
 
@section('script') {{--
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script> --}}
<script>
    var language = window.navigator.userLanguage || window.navigator.language;

</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>


{{--
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> --}} {{--
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script> --}}
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




{!! $projet->body !!}
@endsection
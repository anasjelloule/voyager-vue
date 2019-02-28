@extends('pages.master') 
@section('header')
    @include('partials.head1')
@endsection
 
@section('script')
@endsection
 
@section('content')
<div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('img/bg_blog.jpg');">
    <div class="container space-2 space-4-top--lg space-3-bottom--lg">
        <div class="w-lg-100 text-center mx-lg-auto">
            <h1 class="display-2 font-size-48--md-down text-primary mb-0">Projets</h1>
        </div>
    </div>
</div>
<!-- no realisation -->
<div class="container realisation space-1-top">
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
            <div class="col-md-4 proj">
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
                <h2 class="text-primary text-center space-1 font-weight-bold">Service clients: 0522 78 76 61 - 0666 200 619</h2>
            </div>
        </div>
    </div>
</div>
<!-- end nos realisation  -->
@endsection
@extends('pages.master') 
@section('header')
    @include('partials.head1')
@endsection
 
@section('script')
@endsection
 
@section('content')
<div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('{{ asset('storage/'.$post->image)}}');">
    <div class="container space-2 space-4-top--lg space-3-bottom--lg">
        <div class="w-lg-100 text-center mx-lg-auto">
            <h1 class="display-2 font-size-48--md-down text-primary mb-0">{{ $post->title}}</h1>
        </div>
    </div>
</div>
{!!$post->body!!}
@endsection
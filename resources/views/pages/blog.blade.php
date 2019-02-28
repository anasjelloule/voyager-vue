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
            <h1 class="display-2 font-size-48--md-down text-primary mb-0">Actualités</h1>
        </div>
    </div>
</div>
<div class="container space-2 space-3--lg">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card" style="">
                <a href="{{ route('single',$post->slug) }}"><img class="card-img-top" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title}}"> </a>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('single',$post->slug) }}">{{$post->title }}</a></h5>
                    <p class="card-text">
                        {{ str_limit($post->excerpt,100,'...')}}</p>
                    <a href="{{ route('single',$post->slug) }}" class="btn btn-primary btn-sm">Lire La Suite </a>
                </div>

            </div>
        </div>
        @endforeach
        <div class="paginate col-md-12"> {{ $posts->links() }}</div>
    </div>
</div>
@endsection
 
@section('style')
<style>
    .paginate .pagination {
        justify-content: center;
    }
</style>
@endsection
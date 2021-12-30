@extends('client.layout')

@section('title', $blog->title . ' | Visa Survey')

@section('content')

    <section class="blog-landing" style="background-image: url('/images/blog/landing-image.jpg')">
        @include('client.header')

        <div class="landing-content">
            <div class="container">
                <div class="row align-items-center full-height">
                    <div class="col">
                        <h2 class="landing-title"> {{ $blog->title }} </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-body">
        <div class="container">
            <div class="blog-container">
                <h5 class="blog-create-time">{{  $blog->created_at->format('M d Y') }}</h5>
                <h2 class="blog-title"> {{ $blog->title }} </h2>
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-featured-image" style="background-image: url('{{ asset( $blog->image ) }}')"></div>
                    </div>
                </div>
                <div class="blog-content-block">{!! $blog->content !!}</div>
            </div>
        </div>
    </section>

    @include('client.footer')

@endsection

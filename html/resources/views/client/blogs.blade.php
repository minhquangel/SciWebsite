@extends('client.layout')

@section('title', 'List Blog | Visa Survey')

@section('content')

    <section class="blog-landing" style="background-image: url('/images/blog/landing-image.jpg')">
        @include('client.header')

        <div class="landing-content">
            <div class="container">
                <div class="row align-items-center full-height">
                    <div class="col">
                        <h2 class="landing-title"> All Blog </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-body">
        <div class="container">
            <ul class="list-unstyled">
                @if($blogs->isEmpty())
                    <li class="blog-block text-center"> No Data </li>
                @else
                    @foreach($blogs as $blog)
                        <li class="blog-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="blog-featured-image" style="background-image: url('{{ asset( $blog->image ) }}')"></div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="blog-information">
                                        <h5>{{  $blog->created_at->format('M d Y') }}</h5>
                                        <a target="_blank" href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
                                        <p>{{ substr(strip_tags($blog->content), 0, 250).'...' }}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </section>

    @include('client.footer')

@endsection

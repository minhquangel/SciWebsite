@extends('client.layout')

@section('title', 'Tourism | Visa Survey')

@section('content')

    <section class="landing" style="background-image: url('/images/tourism/landing-image.jpg')">
        @include('client.header')

        <div class="landing-content">
            <div class="container">
                <div class="row align-items-center full-height">
                    <div class="col">
                        <h2 class="landing-title">Let us bring you to the U.S.</h2>
                        <a class="landing-action" href="{{ route('survey.init') }}">Take Survey</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sub-landing">
        <div class="container">
            <h3 class="section-title">Nâng cao khả năng nhận visa của bạn</h3>
            <p class="section-description">Fun fact: Theo nghiên cứu, những gì bạn điền trong đơn DS-160 quyết định 65% khả năng nhận visa Mỹ của bạn. Nói cách khác, trước khi bạn đến phỏng vấn, nhân viên phỏng vấn đã có kết quả "nháp" trong đầu dành cho bạn.</p>
            <div class="section-action">
                <a class="section-link" href="{{ route('survey.init') }}">Take Survey</a>
            </div>
        </div>
    </section>

    <section class="navigation">
        <div class="container">
            <h3 class="section-title">Khám phá thông tin</h3>
            <p class="section-description">Phần blog của chúng tôi chia sẻ những kinh nghiệm, những điều cần biết khi xin visa Mỹ.</p>
            <div class="section-navigation">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-navigation" style="background-image: url('/images/tourism/bg-blog.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="#" class="navigation-title">New York</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="student-navigation" style="background-image: url('/images/tourism/bg-student.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="#" class="navigation-title">California</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="tourism-navigation" style="background-image: url('/images/tourism/bg-tourism.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="#" class="navigation-title">Texas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('client.footer')

@endsection

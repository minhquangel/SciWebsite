@extends('client.layout')

@section('title', 'Let\'s go to the center of innovation of the world')

@section('content')

    <section class="landing" style="background-image: url('/images/student/bg-student2.jpg')">
        @include('client.header')

        <div class="landing-content">
            <div class="container">
                <div class="row align-items-center full-height">
                    <div class="col">
                        <h1 class="landing-title" style="font-size:30pt;font-family:'serif', serif, 20px;"><b>Tính xác xuất nhận visa...</b></h1>
                        <a class="landing-action" href="{{ route('survey.init') }}">Khảo sát</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sub-landing">
        <div class="container">
            <h3 style="font-size:30pt;font-family:'Palatino Linotype', Tahoma, Times">Nâng cao khả năng nhận visa của bạn.</h3> <br>
            <p class="section-description">Fun fact: Nếu bạn xin visa để học chương trình ngôn ngữ tại Mỹ, khả năng trượt của bạn khá cao. Rất nhiều sinh viên đã không học, định cư và lao động bất hợp pháp qua các chương trình này.</p>
            <div class="section-action">
                <a class="section-link" href="{{ route('survey.init') }}">Blog</a>
            </div>
        </div>
    </section>

    <section class="navigation">
        <div class="container">
            <h3 class="section-title">Khám phá các thông tin</h3>
            <p class="section-description">Phần blog của chúng tôi chia sẻ những kinh nghiệm, những điều cần biết khi xin visa Mỹ.</p>
            <div class="section-navigation">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-navigation" style="background-image: url('/images/student/bg-blog.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="https://www.bu.edu/" class="navigation-title">Boston University</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="student-navigation" style="background-image: url('/images/student/bg-student.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="https://www.harvard.edu/" class="navigation-title">Harvard University</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="tourism-navigation" style="background-image: url('/images/student/bg-tourism.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="https://www.berkeley.edu/" class="navigation-title">Berkeley University</a>
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

@extends('client.layout')

@section('title', 'Home | U.S. Visa')

@section('content')

    <section class="landing" style="background-image: url('/images/home/landing-image.jpg')">
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
            <p class="section-description">Năm 2018, 30% ứng viên bị từ chối visa ở Đại sứ quán Mỹ tại Hà Nội. Tỷ lệ này ở Hồ Chí Minh là 50%. Chúng tôi có thể giúp hồ sơ của bạn mạnh hơn nhiều trong mắt của những nhân viên chính phủ khó tính. </p>
            <div class="section-action">
                <a class="section-link" href="{{ route('service') }}">Làm thế nào?</a>
            </div>
        </div>
    </section>

    <section class="navigation">
        <div class="container">
            <h3 class="section-title">Khám phá thông tin</h3>
            <p class="section-description">Bạn có thể tham khảo thông tin về quy trình xét duyệt hồ sơ, đánh giá sơ bộ về hồ sơ của bạn thông qua bài khảo sát của chúng tôi.</p>
            <div class="section-navigation">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-navigation" style="background-image: url('/images/home/bg-blog.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="{{ route('blog.list') }}" class="navigation-title">Blog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="student-navigation" style="background-image: url('/images/home/bg-student.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="{{ route('student') }}" class="navigation-title">Student</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="tourism-navigation" style="background-image: url('/images/home/bg-tourism.jpg')">
                            <div class="overlay">
                                <div class="row align-items-center navigation-block">
                                    <div class="col">
                                        <a href="{{ route('tourism') }}" class="navigation-title">Tourism</a>
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

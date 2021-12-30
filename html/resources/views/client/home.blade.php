@extends('client.layout')

@section('title', 'Home | Sci paper')

@section('content')

    <section class="landing" style="background-image: url('/images/home/landing-image.jpg')">
        @include('client.header')

        <div class="landing-content">
            <div class="container">
                <div class="row align-items-center full-height">
                    <div class="col">
                        <h2 class="landing-title">Let us polish your paper</h2>
                        <a class="landing-action" href="{{ route('survey.init') }}">Take Survey</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sub-landing">
        <div class="container">
            <h3 class="section-title">Nâng cao khả năng bài báo của bạn được chấp nhận</h3>
            <p class="section-description">Chúng tôi đã có một cuộc khảo sát các reviewers ở 23 các tạp chí và hội nghị quốc tế, ở 2 ngành khoa học máy tính và viễn thông. Ở các tạp chí và hội nghị rank C trở xuống: 80% số bài bị loại do các lỗi trình bày. Ở những hội nghị rank cao (acceptance rate nhỏ hơn 30%, một lỗi nhỏ trong trình bày có thể đưa một ý tưởng tốt vào thùng rác khoa học của họ)</p>
            <div class="section-action">
                <a class="section-link" href="{{ route('service') }}">Làm thế nào?</a>
            </div>
        </div>
    </section>

    <section class="navigation">
        <div class="container">
            <h3 class="section-title">Giúp bạn viết báo cáo khoa học</h3>
            <p class="section-description">Chúng tôi tham vấn cho bạn trong quá trình viết bài báo khoa học, trình bày lại ý tưởng của bạn theo văn phong nghiên cứu, tạo ra lợi thế không nhỏ để thuyết phục các nhà khoa học khó tính chấp nhận sản phẩm của bạn</p>
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
                                        <a href="{{ route('student') }}" class="navigation-title">Undergranduate</a>
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
                                        <a href="{{ route('tourism') }}" class="navigation-title">Master/PhD</a>
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

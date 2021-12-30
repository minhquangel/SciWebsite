@extends('client.layout')

@section('title', 'Dịch vụ | Visa Survey')

@section('content')

    <section class="header" style="background-image: url('/images/home/landing-image.jpg')">
        @include('client.header')
    </section>

    <section class="pricing mt-5">
        <div class="container">
            <div class="row pt-5 mb-5">
                <div class="col-4">
                    <div class="card plan-block plan-basic text-center">
                        <div class="card-header">
                            <h4 class="mb-0 plan-title">Cơ bản</h4>
                        </div>
                        <div class="card-body">
                            <ul class="feature-list list-unstyled mb-4">
                                <li>Giúp bạn điền form DS160</li>
                                <li>Nộp phí visa</li>
                                <li>Tư vấn về buổi phỏng vấn</li>
                                <li>Không hoàn tiền</li>
								<li>Múc phí: 300$</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#activePlan">Cơ bản</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card plan-block plan-advance text-center">
                        <div class="card-header">
                            <h4 class="mb-0 plan-title">Nâng cao</h4>
                        </div>
                        <div class="card-body">
                            <ul class="feature-list list-unstyled mb-4">
                                <li>Tư vấn và giúp bạn điền form DS160 (*)</li>
                                <li>Nộp phí visa</li>
                                <li>Hai buổi training trực tiếp về cách thức trả lời phỏng vấn phỏng vấn.</li>
                                <li>Hoàn phí dịch vụ nếu bạn không nhận được visa.</li>
								<li>Múc phí: 600$</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#activePlan">Nâng cao</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card plan-block plan-premium text-center">
                        <div class="card-header">
                            <h4 class="mb-0 plan-title">Cao Cấp</h4>
                        </div>
                        <div class="card-body">
                            <ul class="feature-list list-unstyled mb-4">
                                <li>Tư vấn và giúp bạn điền form DS160 (*)</li>
                                <li>Nộp phí visa</li>
                                <li>Hai buổi training trực tiếp về cách thức trả lời phỏng vấn phỏng vấn</li>
                                <li>Một buổi tư vấn về các mẹo tâm lý và ngôn ngữ cơ thể trước khi đi phỏng vấn.</li>
                                <li>Hoàn phí dịch vụ nếu bạn không nhận được visa.</li>
								<li>Múc phí: 900$</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#activePlan">Cao cấp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="pricing mb-5">
        <div class="container">
            <div class="row pb-5">
                <p class="mb-0">(*) Chúng tôi luôn khuyến cáo khách hàng khai báo một cách trung thực khi điền form. Sự trung thực không chỉ mang lại lợi ích khi xin visa đi Mỹ mà còn có ý nghĩa cả cuộc đời. Tuy nhiên, sẽ có nhiều cách đề điền form để đạt hiệu quả cao nhất có thể. Chúng tôi biết những cách thức này.</p>
            </div>
        </div>
    </section>

    <form action="{{ route('service.update') }}" method="post">
        @csrf

        <div class="modal fade plan-contact" id="activePlan" tabindex="-1" 
            role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Thông tin liên hệ</h5>
                    </div>
                    <div class="modal-body">
                        <p class="mb-4 mt-4">Hãy liên hệ với chúng tôi thông qua các cách sau đây:</p>
                        <p class="mb-4">
                            1. Liên lạc trực tiếp với chúng tôi qua SĐT: 
                            <span style="color: #56BF7B">0902287410</span>
                        </p>
                        <p class="mb-4">2. Để lại SĐT để chúng tôi liên hệ với bạn</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Đóng
                        </button>
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @include('client.footer')

@endsection

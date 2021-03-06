@extends('client.layout')

@section('title', 'Road to the U.S.')

@section('content')

    <section style="background-image: url('/images/student/landing-image.jpg'); background-position: center top; background-size: cover">
        @include('client.header')
    </section>

    <section class="survey-body">
        @if($calculatedData['status'] === 1)
            <form class="survey-form" action="{{ route('survey.next', $id) }}" method="post">
                @csrf
                <div class="survey-content">
                    <div class="container">
                        @foreach( $calculatedData['questions'] as $question)
                            <div class="row justify-content-md-center question-block">
                                <div class="col-md-8">
                                    <h3 class="question-content">{{ $question->content }}</h3>
                                    @if($question->type === 1)
                                        @foreach( $question->answers as $answer)
                                            <label class="answer-block radio-check">{{ $answer->content }}
                                                <input type="radio" required name="{{ $question->id }}" value="{{ $answer->id }}" class="answer-input">
                                                <span class="checkmark"></span>
                                            </label>
                                        @endforeach
                                    @elseif($question->type === 2)
                                        <div class="answer-input-select">
                                            <select name="{{ $question->id }}">
                                                @foreach( $question->answers as $answer)
                                                    <option value="{{ $answer->id }}">{{ $answer->content }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @elseif($question->type === 3)
                                        <table class="table mutiple-question">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    @foreach($question->subQuestions[0]->answers as $answer)
                                                        <th scope="col">{{ $answer->content }}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($question->subQuestions as $subQuestion)
                                                    <tr>
                                                        <td scope="row">{{ $subQuestion->content }}</td>
                                                        @foreach($subQuestion->answers as $subQuestionAnswer)
															@if($subQuestionAnswer->code != 1)
																<td>
																	<label class="answer-block radio-check">
																		<input type="radio" required name="{{ $subQuestion->id }}" value="{{ $subQuestionAnswer->id }}" class="answer-input">
																		<span class="checkmark"></span>
																	</label>
																</td>
															@elseif($subQuestionAnswer->code == 1)
																<td>
																	<label class="answer-block radio-check">
																		<input type="radio" checked="checked" required name="{{ $subQuestion->id }}" value="{{ $subQuestionAnswer->id }}" class="answer-input">
																		<span class="checkmark"></span>
																	</label>
																</td>
															@endif
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                        </table>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                        <div class="row justify-content-md-center">
                            <div class="col-md-8 text-right">
                                <button type="submit" class="submit-button no-outline">
                                    <img src="{{ asset('images/survey/next.svg') }}" style="height: 35px">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @elseif($calculatedData['status'] === 2)
            <div class="container">
                <div class="row align-items-center justify-content-md-center message-block">
                    <div class="col-md-8 text-center">
						<br><br>
                        <p>Kh??? n??ng nh???n visa c???a b???n: {{ $calculatedData['total_score'] }}%</p>
						<br><br>
						@if($calculatedData['message'] != "")
						<ul>
							<li><small>{{ $calculatedData['message'] }}</small></li>
							<li><small>X??c su???t ???????c t??nh b???ng thu???t to??n d???a tr??n nghi??n c???u c???a ch??ng t??i v?? d??? li???u th?? t??? b??i kh???o s??t. B???n v???n c?? th??? n??ng cao x??c su???t n??y b???ng c??ch chu???n b??? c??c h??? s?? v?? th??? hi???n t???t t???i bu???i ph???ng v???n.</small></li>
						</ul>
						@elseif($calculatedData['message'] == "")
						<ul>
							<li><small>X??c su???t ???????c t??nh b???ng thu???t to??n d???a tr??n nghi??n c???u c???a ch??ng t??i v?? d??? li???u th?? t??? b??i kh???o s??t. B???n v???n c?? th??? n??ng cao x??c su???t n??y b???ng c??ch chu???n b??? c??c h??? s?? v?? th??? hi???n t???t t???i bu???i ph???ng v???n.</small></li>
						</ul>
						@endif
                        <br><a href="{{ route('root') }}" class="go-home"> Tr??? v??? </a>
                    </div>
                </div>
            </div>
        @endif
    </section>

    @include('client.footer')

@endsection

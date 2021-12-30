@extends('admin.layout')

@section('title', 'Survey Detail | Admin Visa Survey')

@section('style')

    <link rel="stylesheet" href="{{ asset('css/admin/survey/show.css') }}">

@endsection

@section('content')

    @include('admin.widgets.header')

    <div class="page-content d-flex align-items-stretch">

        @include('admin.widgets.sidebar')

        <div class="content-inner">
            <div class="container-fluid full-scr-height">
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title"> Detail </h2>
                            <div>
                                <div class="page-header-tools">
                                    <a href="{{ route('admin.survey.list') }}" class="btn btn-gradient-01 mr-1">
                                        <i class="la la-list-alt"></i> All Survey
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="widget has-shadow">
                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                <h4> Survey Detail </h4>
                            </div>
                            <div class="widget-body">
                                @foreach($survey['questions'] as $question)
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-10 mb-4">
                                            <h4>{{ $question['content'] }}</h4>
                                        </div>
                                        <div class="col-md-10">
                                            <div style="padding-left: 20px">
                                                @foreach($question['answers'] as $answer)
                                                    <h5 class="mb-2">{{ $answer['content'] }}</h5>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="em-separator separator-dashed"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.widgets.footer')
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ asset('js/admin/survey/show.js') }}"></script>

@endsection

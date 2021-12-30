@extends('admin.layout')

@section('title', 'List Survey | Admin Visa Survey')

@section('style')

    <link rel="stylesheet" href="{{ asset('assets/css/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/survey/index.css') }}">

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
                            <h2 class="page-header-title"> All Survey </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="widget has-shadow">
                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                <h4> List </h4>
                            </div>
                            <div class="widget-body">
                                <div class="table-responsive">
                                    <table id="listSurvey" class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="table-id">ID</th>
                                                <th class="table-create">Created at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $surveys as $survey)
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('admin.survey.show', $survey->id) }}">{{ $survey->id }}</a>
                                                    </td>
                                                    <td>{{ $survey->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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

    <script src="{{ asset('assets/vendors/js/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/admin/survey/index.js') }}"></script>

@endsection

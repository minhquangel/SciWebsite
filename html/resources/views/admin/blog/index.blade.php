@extends('admin.layout')

@section('title', 'List Blog | Admin Visa Survey')

@section('style')

    <link rel="stylesheet" href="{{ asset('assets/css/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/blog/index.css') }}">

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
                            <h2 class="page-header-title"> All Blog </h2>
                            <div>
                                <div class="page-header-tools">
                                    <a href="{{ route('admin.blog.create') }}" class="btn btn-gradient-01 mr-1">
                                        <i class="la la-plus"></i> Create new
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
                                <h4> List </h4>
                            </div>
                            <div class="widget-body">
                                <div class="table-responsive">
                                    <table id="listBlog" class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="table-id">ID</th>
                                                <th>Title</th>
                                                <th class="table-create">Created at</th>
                                                <th class="table-action">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $blogs as $blog)
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('admin.blog.show', $blog->id) }}">{{ $blog->id }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.blog.show', $blog->id) }}">
                                                            <div class="media">
                                                                <div class="media-left align-self-center mr-3">
                                                                    <img src="{{ asset( $blog->image ) }}"
                                                                        class="img-fluid img-h-50">
                                                                </div>
                                                                <div class="media-body align-self-center">
                                                                    {{ $blog->title }}
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>{{ $blog->created_at }}</td>
                                                    <td class="td-actions">
                                                        <a href="{{ route('admin.blog.edit', $blog->id) }}"><i class="la la-edit edit"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#deleteBlogModal{{ $blog->id }}">
                                                            <i class="la la-close delete"></i>
                                                        </a>
                                                        @include('admin.widgets.blog-delete-confirm', ['blogId' => $blog->id])
                                                    </td>
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
    <script src="{{ asset('js/admin/blog/index.js') }}"></script>

@endsection

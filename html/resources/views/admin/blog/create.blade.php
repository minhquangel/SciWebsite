@extends('admin.layout')

@section('title', 'Create Blog | Admin Visa Survey')

@section('style')

    <link rel="stylesheet" href="{{ asset('css/admin/blog/create.css') }}">

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
                            <h2 class="page-header-title">Create Blog</h2>
                            <div>
                                <div class="page-header-tools">
                                    <a href="{{ route('admin.blog.list') }}" class="btn btn-gradient-01 mr-1">
                                        <i class="la la-list-alt"></i> All Blog
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
                                <h4> Create </h4>
                            </div>
                            <div class="widget-body">
                                <div class="col-10 ml-auto">
                                    <div class="section-title mt-3 mb-3">
                                        <h4> Basic Information </h4>
                                    </div>
                                </div>
                                <form class="form-horizontal" method="post" enctype="multipart/form-data"
                                    action="{{ route('admin.blog.store') }}">
                                    @csrf
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label for="blog-title"
                                            class="col-lg-2 form-control-label d-flex justify-content-lg-end">
                                            Title
                                        </label>
                                        <div class="col-xl-8 col-lg-10">
                                            <input id="blog-title" type="text" name="title" required
                                                class="form-control" value="{{ old('title') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label for="blog-image"
                                            class="col-lg-2 form-control-label d-flex justify-content-lg-end">
                                            Featured image
                                        </label>
                                        <div class="col-xl-8 col-lg-10">
                                            <input id="blog-image" type="file" name="image" required
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label for="blog-content"
                                            class="col-lg-2 form-control-label d-flex justify-content-lg-end">
                                            Content
                                        </label>
                                        <div class="col-xl-8 col-lg-10">
                                            <textarea class="form-control" rows="10" name="content"
                                                id="blog-content" required>{{ old('content') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="em-separator separator-dashed"></div>
                                    <div class="text-right">
                                        <button class="btn btn-gradient-03" type="submit">
                                            <i class="la la-save"></i> Save
                                        </button>
                                    </div>
                                </form>
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

    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script src="{{ asset('js/admin/blog/create.js') }}"></script>

@endsection

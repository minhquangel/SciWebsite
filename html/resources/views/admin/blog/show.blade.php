@extends('admin.layout')

@section('title', 'Blog Detail | Admin Visa Survey')

@section('style')

    <link rel="stylesheet" href="{{ asset('css/admin/blog/show.css') }}">

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
                                <h4> Blog Detail </h4>
                            </div>
                            <div class="widget-body">
                                <div class="row mb-5">
                                    <div class="col-lg-2 d-flex justify-content-lg-end">
                                        Title
                                    </div>
                                    <div class="col-xl-8 col-lg-10">
                                        {{ $blog->title }}
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-2 d-flex justify-content-lg-end">
                                        Featured image
                                    </div>
                                    <div class="col-xl-8 col-lg-10">
                                        <img src="{{ asset( $blog->image ) }}" class="blog-image">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-2 d-flex justify-content-lg-end  ">
                                        Content
                                    </div>
                                    <div class="col-xl-8 col-lg-10">
                                        <div class="blog-content-bg-gray">
                                            {!! $blog->content !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="em-separator separator-dashed"></div>
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="button"
                                        data-toggle="modal" data-target="#deleteBlogModal{{ $blog->id }}">
                                        <i class="la la-trash"></i> Delete
                                    </button>
                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-gradient-03">
                                        <i class="la la-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.widgets.footer')
            @include('admin.widgets.blog-delete-confirm', ['blogId' => $blog->id])
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ asset('js/admin/blog/show.js') }}"></script>

@endsection

<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\BlogServiceInterface;

class ListController extends Controller
{
    private $blogService;

    public function __construct(
        BlogServiceInterface $blogService
    ) {
        $this->middleware('auth');
        $this->blogService = $blogService;
    }

    public function index(Request $request)
    {
        $blogs = $this->blogService->list();
        return view('admin.blog.index')->with('blogs', $blogs);
    }
}

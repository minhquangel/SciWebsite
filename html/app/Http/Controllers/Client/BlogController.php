<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Client\BlogServiceInterface;

class BlogController extends Controller
{
    private $blogService;

    public function __construct(
        BlogServiceInterface $blogService
    ) {
        $this->blogService = $blogService;
    }

    public function index(Request $request)
    {
        $blogs = $this->blogService->list();
        return view('client.blogs')->with('blogs', $blogs)
            ->with('currentPage', 'blog');
    }

    public function show(Request $request, $id)
    {
        $blog = $this->blogService->find($id);
        if (empty($blog)) { abort(404); }
        return view('client.blog')->with('blog', $blog)
            ->with('currentPage', 'blog');
    }
}
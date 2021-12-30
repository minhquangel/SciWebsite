<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\BlogServiceInterface;

class ShowController extends Controller
{
    private $blogService;

    public function __construct(
        BlogServiceInterface $blogService
    ) {
        $this->middleware('auth');
        $this->blogService = $blogService;
    }

    public function show(Request $request, $id)
    {
        $blog = $this->blogService->find($id);
        if (empty($blog)) { abort(404); }
        return view('admin.blog.show')->with('blog', $blog);
    }
}

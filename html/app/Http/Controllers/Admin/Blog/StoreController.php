<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\BlogServiceInterface;

class StoreController extends Controller
{
    private $blogService;

    public function __construct(
        BlogServiceInterface $blogService
    ) {
        $this->middleware('auth');
        $this->blogService = $blogService;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|max:5120',
            'content' => 'required',
        ]);
        $blog = $this->blogService->store($request->all());
        \Session::flash('success', 'Create blog successfully!');
        return redirect()->route('admin.blog.show', $blog['id']);
    }
}

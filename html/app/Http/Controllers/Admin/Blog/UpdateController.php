<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\BlogServiceInterface;

class UpdateController extends Controller
{
    private $blogService;

    public function __construct(
        BlogServiceInterface $blogService
    ) {
        $this->middleware('auth');
        $this->blogService = $blogService;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|max:5120',
            'content' => 'required',
        ]);
        $this->blogService->update($request->all(), $id);
        \Session::flash('success', 'Update blog successfully!');
        return redirect()->route('admin.blog.show', $id);
    }
}

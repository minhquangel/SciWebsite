<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\BlogServiceInterface;

class DestroyController extends Controller
{
    private $blogService;

    public function __construct(
        BlogServiceInterface $blogService
    ) {
        $this->middleware('auth');
        $this->blogService = $blogService;
    }

    public function destroy(Request $request, $id)
    {
        $this->blogService->destroy($id);
        \Session::flash('success', 'Delete blog successfully!');
        return redirect()->route('admin.blog.list');
    }
}

<?php

namespace App\Services\Admin;

use App\Repositories\BlogRepository;

class BlogService implements BlogServiceInterface
{
    private $blogRepository;

    public function __construct(
        BlogRepository $blogRepository
    ) {
        $this->blogRepository = $blogRepository;
    }

    public function store($requestData)
    {
        $blogID = uniqid();
        $imageName =  $blogID . '_' . time() . '.' . request()->image->extension();
        request()->image->move(public_path('upload/images'), $imageName);
        $blogData = [
            'id' => $blogID,
            'title' => $requestData['title'],
            'image' => 'upload/images/' . $imageName,
            'content' => $requestData['content']
        ];
        $this->blogRepository->create($blogData);
        return $blogData;
    }

    public function list()
    {
        return $this->blogRepository->all();
    }

    public function find($id)
    {
        return $this->blogRepository->find($id);
    }

    public function destroy($id)
    {
        return $this->blogRepository->delete($id);
    }

    public function update($requestData, $id)
    {
        if (request()->hasFile('image')) {
            $blog = $this->blogRepository->find($id);
            $imageName =  $blog->id . '_' . time() . '.' . request()->image->extension();
            request()->image->move(public_path('upload/images'), $imageName);
            $blogData = [
                'title' => $requestData['title'],
                'image' => 'upload/images/' . $imageName,
                'content' => $requestData['content']
            ];
        } else {
            $blogData = [
                'title' => $requestData['title'],
                'content' => $requestData['content']
            ];
        }

        return $this->blogRepository->update($blogData, $id);
    }
}

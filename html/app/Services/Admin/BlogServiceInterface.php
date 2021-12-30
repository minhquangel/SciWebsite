<?php
namespace App\Services\Admin;

interface BlogServiceInterface
{
    public function list();
    public function store($requestData);
    public function find($id);
    public function update($requestData, $id);
    public function destroy($id);
}

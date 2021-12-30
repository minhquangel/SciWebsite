<?php
namespace App\Services\Client;

interface BlogServiceInterface
{
    public function list();
    public function find($id);
}

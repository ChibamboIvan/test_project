<?php

namespace App\Http\Controllers;

use App\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    priate PostRepositoryInterface $postRepository;

    public function _construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public functionn index()
    {
        $data = [
            'posts' => $this->postRepository->getAllPosts()
        ];

        return view('dashboard', $data);
    }
}

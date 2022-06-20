<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function index(){
        $posts = $this->postRepository->all();
        return view('pages.news.index',['posts' => $posts]);
    }

    public function show(){
        $posts = $this->postRepository->showOrderBy();
        return view('admin.posts.index',['posts' => $posts]);
    }

    public function loadFormCreate(){
        return view('admin.posts.create');
    }

    public function create(Request $request){
        $data = ['title' => $request['title'] ,'content' =>$request['content'] ];
        $postNew = $this->postRepository->store($data);
        return redirect()->route('admin.posts.show')->with('success', 'Tạo bài đăng thành công !!!');
    }
}

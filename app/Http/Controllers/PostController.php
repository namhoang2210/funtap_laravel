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
        $fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file
        $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
        $request->file('image')->storeAs('public/images', $fileName);
        $data = ['title' => $request['title'] ,'content' =>$request['content'], 'image'=> $fileName ];
        $postNew = $this->postRepository->store($data);
        return redirect()->route('admin.posts.show')->with('success', 'Tạo bài đăng thành công !!!');
    }
}

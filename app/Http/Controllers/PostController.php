<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class PostController extends Controller
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function index(){
        $posts = $this->postRepository->showOrderBy();
        return view('pages.news.index',['posts' => $posts]);
    }

    public function show(){
        $posts = $this->postRepository->showOrderBy();
        return view('admin.posts.index',['posts' => $posts]);
    }

    public function view($id){
        $post = $this->postRepository->findById($id);
        return view('admin.posts.view',['post' => $post]);
    }

    public function loadFormCreate(){
        return view('admin.posts.create');
    }

    public function create(Request $request){
        if ($request->hasFile('image')) {
            $file = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
            $data = ['title' => $request['title'], 'content' => $request['content'], 'image' => $file];
            $postNew = $this->postRepository->store($data);
            return redirect()->route('admin.posts.show')->with('message', 'Tạo bài đăng thành công !!!');
        }else{
            $data = ['title' => $request['title'], 'content' => $request['content'] ];
            $postNew = $this->postRepository->store($data);
            return redirect()->route('admin.posts.show')->with('message', 'Tạo bài đăng thành công !!!');
        }
    }

    public function findById($id){
        $news = $this->postRepository->findById($id);
        if ($news != null){
            return view('pages.news.read', ['news' => $news]);
        }else{
            return view('pages.news.read')->with('message','Không tìm thấy bài viết');
        }
    }

    public function edit($id){
        $post = $this->postRepository->findById($id);
        if ($post != null){
            return view('admin.posts.edit', ['post' => $post]);
        }else{
            return view('admin.posts.show')->with('message','Không tìm thấy bài viết');
        }
    }

    public function update(Request $request, $id){
        $data = $request->all();
        if (array_key_exists("image",$data)){
            $file = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
            $data = ['title' => $request['title'] ,'content' =>$request['content'], 'image'=> $file ];
            $post = $this->postRepository->update($data, $id);
        }else{
            $post = $this->postRepository->update($data, $id);
        }
        return redirect()->route('admin.posts.show')->with('message', 'Chỉnh sửa bài đăng thành công !!!');
    }

    public function delete($id){
        $post = $this->postRepository->delete($id);
        return redirect()->route('admin.posts.show')->with('message', 'Xóa bài đăng thành công !!!');
    }
}

<?php
namespace App\Repositories;
use App\Models\Post;

class PostRepository implements PostInterface {
    public function all(){
        return Post::get();
    }

    public function findById($id){

    }

    public function store(array $data){
        return Post::create($data);
    }

    public function update(array $data, $id){

    }

    public function delete($id){

    }

    public function showOrderBy(){
        return Post::orderBy('id', 'desc')->paginate(6);
    }
}

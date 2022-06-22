<?php
namespace App\Repositories;
use App\Models\Post;

class PostRepository implements PostInterface {
    public function all(){
        return Post::get();
    }

    public function findById($id){
        return Post::find($id);
    }

    public function store(array $data){
        return Post::create($data);
    }

    public function update(array $data, $id){
        $result = Post::find($id);
        if ($result) {
            $result->update($data);
            return $result;
        }

        return false;
    }

    public function delete($id){
        return Post::destroy($id);
    }

    public function showOrderBy(){
        return Post::orderBy('id', 'desc')->paginate(6);
    }
}

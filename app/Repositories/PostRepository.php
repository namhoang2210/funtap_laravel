<?php
namespace App\Repositories;
use App\Models\Post;

class PostRepository implements PostInterface {
    public function all(){
        return Post::get();
    }
    
    public function get($id){

    }

    public function store(array $data){

    }

    public function update(array $data, $id){

    }

    public function delete($id){

    }
}
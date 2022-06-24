<?php
namespace App\Repositories;
use App\Models\About;

class AboutReponsitory implements AboutInterface{

    public function all()
    {
        return About::get();
    }

    public function findById($id){
        return About::find($id);
    }

    public function store(array $data){
        return About::create($data);
    }

    public function update(array $data, $id)
    {
        $result = About::find($id);
        if ($result) {
            $result->update($data);
            return $result;
        }

        return false;
    }

    public function delete($id){
        return About::destroy($id);
    }
}

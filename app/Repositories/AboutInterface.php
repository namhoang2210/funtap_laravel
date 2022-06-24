<?php
namespace App\Repositories;

interface AboutInterface{
    public function all();

    public function findById($id);

    public function store(array $data);

    public function update(array $data, $id);

    public function delete($id);
}

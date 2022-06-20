<?php

namespace App\Repositories;

interface PostInterface {

    public function all();

    public function findById($id);

    public function store(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function showOrderBy();
}

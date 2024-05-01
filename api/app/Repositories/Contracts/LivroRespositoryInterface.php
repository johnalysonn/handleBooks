<?php

namespace App\Repositories\Contracts;

interface LivroRepositoryInterface {

    public function index ();

    public function store (array $data);

    public function update ($id, array $data);

    public function destroy ($id);
}

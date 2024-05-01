<?php

namespace App\Repositories;

use App\Models\Livro;
use Repository\AbstractRepository;

class LivroRepository extends AbstractRepository{

    public function __construct(Livro $model)
    {
        parent::__construct($model);
    }
}

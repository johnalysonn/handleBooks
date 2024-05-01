<?php

namespace App\Hateoas;

use App\Models\Livro;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class LivroHateoas
{
    use CreatesLinks;

    public function update(Livro $livro) : ?Link
    {
        return $this->link('livro.update', ['livro' => $livro]);
    }

    public function delete(Livro $livro) : ?Link
    {
        return $this->link('livro.destroy', ['livro' => $livro]);
    }
}

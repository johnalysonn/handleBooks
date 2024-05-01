<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use GDebrauwer\Hateoas\Traits\HasLinks;

class LivroResource extends JsonResource
{
    use HasLinks;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {;
        return [
            'nome' => $this->nome,
            'autor' => $this->autor,
            'ano_lancamento' => $this->ano_lancamento,
            'isbn' => $this->isbn,
            '_links' => $this->links()
        ];
    }
}

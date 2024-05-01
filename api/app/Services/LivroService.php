<?php

namespace App\Services;

use App\Repositories\Contracts\LivroRepositoryInterface;

class LivroService {
    protected $livroRepository;

    public function __construct(LivroRepositoryInterface $livroRepository) {
        $this->livroRepository = $livroRepository;
    }

    public function index () {
        return $this->livroRepository->index();
    }

    public function store ($data) {
        $this->livroRepository->store($data);

        return response()->json([
            'message' => 'livro criado com sucesso!'
        ]);
    }

    public function update ($id, $data) {
        $this->livroRepository->update($id, $data);

        return response()->json([
            'message' => 'livro atualizado com sucesso!'
        ]);
    }

    public function destroy ($id) {
        $this->livroRepository->destroy($id);

        return response()->json([
            'message' => 'livro deletado com sucesso!'
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroFormRequest;
use App\Http\Resources\LivroResource;
use Illuminate\Http\Request;
use App\Services\LivroService;

class LivroController extends Controller
{
    protected $livroService;

    public function __construct(LivroService $livroService) {
        $this->livroService = $livroService;
    }

    public function index()
    {
        return LivroResource::collection($this->livroService->index());
    }

    public function store(LivroFormRequest $request)
    {
        return $this->livroService->store($request->all());
    }

    public function update($livro, LivroFormRequest $request)
    {
        return $this->livroService->update($livro, $request->all());
    }

    public function destroy($livro)
    {
        return $this->livroService->destroy($livro);
    }
}

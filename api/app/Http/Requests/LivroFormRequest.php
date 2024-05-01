<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;

class LivroFormRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $idLivroParaUpdate = isset($this->livro)? ','.$this->livro : '';

        return [
            'nome' => 'required',
            'autor' => 'required',
            'ano_lancamento' => 'required',
            'isbn' => 'required|min:8|max:11|unique:livros,isbn'.$idLivroParaUpdate
            ,
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do livro é de preenchimento obirigatório',
            'ano_lancamento.required' => 'O ano de lancamento do livro é de preenchimento obirigatório',
            'autor.required' => 'O autor do livro é de preenchimento obirigatório',
            'isbn.required' => 'O isbn do livro é de preenchimento obirigatório',
            'isbn.min' => 'O mínimo de caracteres de um isbn é 8',
            'isbn.max' => 'O mínimo de caracteres de um isbn é 11',
            'isbn.unique' => 'Já existe um livro com esse registo de isbn',
        ];
    }

    public function failedValidation(Validator $validator)

    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Erros',
            'data'      => $validator->errors()
        ], 400));

    }
}

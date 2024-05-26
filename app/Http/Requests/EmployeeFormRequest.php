<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'min:2', 'regex:/^[^\d]+$/'], 
            'nome_social' => ['required', 'string', 'min:2', 'regex:/^[^\d]+$/'],
            'data_nascimento' => ['required'],
            'cpf' => ['required', 'string', 'size:14'], 
            'imagem' => ['sometimes', 'image', 'max:2048'],
        ];
    }        

}

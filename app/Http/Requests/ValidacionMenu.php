<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin\Menu;
use App\Rules\ValidacionCampoUrl;
class ValidacionMenu extends FormRequest
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
            'nombre' => 'required|max:255|unique:menu,nombre,'. $this->route('id'),
            'url' => ['required','max:255', new ValidacionCampoUrl],
            'icono' => 'nullable|max:255',

        ];
    }
   /* public function messages()
{
    return [
        'nombre.required' => 'El nombre es requerido',
        'url.required'  => 'la url es requerida',
    ];
}*/
}

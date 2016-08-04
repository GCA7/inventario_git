<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
          'nombre'      => 'min:8|max:250|required|unique:products',
          'category_id' => 'required',
          'descripcion' => 'max:120|required',
          'cantidad'    => 'required',
          'precio'      => 'required',
          'image'       => 'image|required'
        ];
    }
}

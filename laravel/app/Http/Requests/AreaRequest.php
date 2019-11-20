<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'local' => 'required|max:255',
            
        ];
    }
    public function menssages()
    {
        return [
            'local.required' => 'Campo local é obrigatorio',
            'local.max'=> 'Campo local aceita até 255 caracteres'
        ];
    }
    }

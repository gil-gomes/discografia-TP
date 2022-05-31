<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumStoreRequest extends FormRequest
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
            'name' => ['required'],
            'launch' => ['required', 'date'],
            'record_company' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe o nome do Álbum!',
            'launch.required' => 'Informe a data de lançamento do Álbum!',
            'record_company.required' => 'Informe a gravadora!',
        ];
    }
}

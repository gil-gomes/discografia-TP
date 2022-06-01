<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormTrackRequest extends FormRequest
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
            'number' => 'required',
            'title' => 'required',
            'duration' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'number.required' => 'Informe o número da faixa!',
            'title.required' => 'Informe o titulo da faixa!',
            'duration.required' => 'Informe o tempo de duração da faixa!',
        ];
    }
}

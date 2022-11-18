<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;


class SaveProjectRequest extends FormRequest
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
            'title' => 'required',
            'url' => [
                'required',
                Rule::unique('projects')->ignore($this->route('project'))
            ],
            'image' => [
                $this->route('project') ? 'nullable' : 'required',
                'mimes:jpg,png'
            ],
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => ' ATENCION!! el proyecto necesita un Titulo',
            'url.required' => 'la url del proyecto es necesaria',
            'description.required' => 'necesita una descripcion nueva',
        ];
    }
}

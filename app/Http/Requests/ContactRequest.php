<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'last_name' => 'required',
			'email' => 'required',
            'address' => 'required',
			'telephone' => 'required'
        ];
    }

	public function messages(){
		return [
			'name.required' => 'Nombre obligatorio',
			'last_name.required' => 'Campo obligatorio',
			'email.required' => 'Email obligatorio',
			'address.required' => 'Dirección obligatorio',
			'telephone.required' => 'Telefono obligatorio'
		];
	}
}

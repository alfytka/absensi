<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpGuruRequest extends FormRequest
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
            'nip' => ['required', 'string', 'max:100'],
            'nama' => ['required', 'string', 'max:200'],
            'email' => ['required', 'string', 'max:50'],
            'telepon' => ['numeric'],
            'alamat' => ['string'],
            'jenis_kelamin' => ['required'],
            'role' => ['required']
        ];
    }
}

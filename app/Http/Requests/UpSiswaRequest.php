<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpSiswaRequest extends FormRequest
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
            'id_kelas' => ['required'],
            'nama' => ['required', 'string', 'max:200'],
            'nis' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50'],
            'telepon' => ['numeric'],
            'alamat' => ['string'],
            'jenis_kelamin' => ['required']
        ];
    }
}

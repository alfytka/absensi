<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
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
            'id_pengajar' => ['required'],
            'id_mapel' => ['required'],
            'hari' => ['required', 'string', 'max:50'],
            'jam_mulai' => ['required', 'string', 'max:50'],
            'jam_selesai' => ['required', 'string', 'max:50']
        ];
    }
}

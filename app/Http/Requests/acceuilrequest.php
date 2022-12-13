<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class acceuilrequest extends FormRequest
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
        return [ 'nom_club' => 'bail|required|min:1|max:200|string',
            'email_club' => 'bail|required|min:1|max:100|string',
            'mdp_club' => 'bail|required|min:1|max:100|string',
            'effectif' => 'bail|required|min:1|max:200|string',
            'annonce_publie'=>'bail|required|min:1|max:100|integer',
            //
        ];
    }
}

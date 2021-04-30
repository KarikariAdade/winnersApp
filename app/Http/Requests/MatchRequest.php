<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatchRequest extends FormRequest
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
            'league' => 'required',
            'home_team' => 'required',
            'away_team' => 'required',
            'match_date' => 'required',
            'match_time' => 'required',
            'match_condition' => 'required',
            'odds' => 'required|numeric|between:0,99.99',
            'sports_type' => 'required'
        ];
    }
}

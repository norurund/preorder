<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrder extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* 一旦はTrueで20190809 */
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
            'ordername' => 'required',
            'kai' => 'required',
            'tiketsum' => 'required',
            'tiketadl' => 'required',
            'tiketcld' => 'required',
            'address' => 'required',
            'name' => 'required',
        ];
    }

    public function attributes()
{
    return [
        'ordername' => '予約者氏名',
        'kai' => '会',
        'tiketsum' => '合計枚数',
        'tiketadl' => 'チケット(大人)',
        'tiketcld' => 'チケット(子供)',
        'address' => 'メールアドレス',
        'name' => '紹介者氏名',
    ];
}
}

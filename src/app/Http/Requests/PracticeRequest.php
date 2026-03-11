<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PracticeRequest extends FormRequest
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
            'last' => ['required'],
            'first' => ['required'],
            'gender' => ['required'],
            'email' => ['required','email'],
            'tel1' => ['required','numeric'],
            'tel2' => ['required','numeric'],
            'tel3' => ['required','numeric'],
            'address' => ['required'],
            'select' => ['required'],
            'content' => ['required','max:120'],
        ];
    }

    public function messages ()
    {
        return [
            'last.required' => '姓を入力してください',
            'first.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'tel1.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'select.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問い合わせ内容を120文字以内で入力してください',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'name_kana' => ['required', 'max:255', 'regex:/^[ァ-ンヴー]+$/'],
            'address' => ['max:255'],
            'tel' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'max:1000'],
            'privacy_policy' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください',
            'name_kana.required' => 'フリガナを入力してください',
            'name_kana.regex' => 'フリガナはカタカナで入力してください',
            'name.max' => 'お名前は:max文字以内で入力してください',
            'name_kana.max' => 'フリガナは:max文字以内で入力してください',
            'address.max' => '住所は:max文字以内で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.max' => '電話番号は:max文字以内で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'email.max' => 'メールアドレスは:max文字以内で入力してください',
            'message.required' => 'お問い合わせ・ご応募内容を入力してください',
            'message.max' => 'お問い合わせ・ご応募内容は全角500文字以内で入力してください',
            'privacy_policy.required' => 'プライバシーポリシーに同意する必要があります',
        ];
    }
}

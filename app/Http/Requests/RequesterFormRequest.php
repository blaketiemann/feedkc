<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequesterFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && auth()->user()->account == 'requester';
    }

    public function failedAuthorization()
    {
        parent::failedAuthorization();

        notify()->error('You Must Be Signed In As A Requester Account To Submit This Form');

        return back();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        ];
    }
}

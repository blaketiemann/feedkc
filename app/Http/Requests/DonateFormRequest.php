<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && auth()->user()->account == 'donor';

    }

    public function failedAuthorization()
    {
        parent::failedAuthorization();

        notify()->error('You Must Be Signed In As A Donor Account To Submit This Form');

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
            'name' => 'required|string',
            'business' => 'required',
            'category' => 'required',
            'expires_on' => 'date|required',
            'quantity_amount' => 'integer|required',
            'quantity_unit' => 'required',
            'message' => 'nullable',
        ];
    }
}

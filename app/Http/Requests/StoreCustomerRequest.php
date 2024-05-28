<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'name' => ['required'],            
            'email' => ['required', 'email', 'unique:customers'], // hi@x.io
            'phone' => ['required', 'min:10'],
            'address' => ['required'],
            'sales_ledger_id' => ['required', 'exists:App\IncomeExpenseType,id'],
            'terms_of_payment' => ['required'],
            'terms_of_payment_in_days' => ['filled'],
        ];
    }
}
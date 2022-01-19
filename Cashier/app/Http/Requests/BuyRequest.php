<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuyRequest extends FormRequest
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
            'id' => ['required'],
            'type' => ['required'],
            'name' => ['required'],
            'supplier_id' => ['required', 'exists:suppliers,id'],
            'count' => ['required', 'integer'],
            'price' => ['required'],
            'is_debt' => ['required'],
            'expire_date' => ['required'],
        ];
    }
}

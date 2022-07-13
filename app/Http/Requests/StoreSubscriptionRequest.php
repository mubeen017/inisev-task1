<?php

namespace App\Http\Requests;

use App\Rules\ValidateSubscription;
use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriptionRequest extends FormRequest
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
        return [
            'website_id' => 'required|exists:websites,id',
            'user_id' => ['required', 'exists:users,id',
                new ValidateSubscription($this->website_id, $this->user_id)],

        ];
    }
}

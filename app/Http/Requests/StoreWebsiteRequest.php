<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWebsiteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $websiteId = request()->website_id;

        return [
            'domain' => 'required|unique:websites,domain,' . $websiteId,
            'tile' => 'required|min:10|max:250',
            'description' => 'required',
            'user_id' => 'sometimes|exists:users,id',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:10|max:250',
            'body' => 'required',
            'status' => 'required|in:draft,published,archived',
        ];
    }
}

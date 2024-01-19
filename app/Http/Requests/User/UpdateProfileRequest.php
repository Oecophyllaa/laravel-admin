<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
      'username' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email', Rule::unique('users')->where('id', '<>', Auth::user()->id)],
      'phone_number' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:14'],
      'photo' => ['nullable', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
    ];
  }

  /**
   * Get custom attributes for validator errors.
   *
   * @return array<string, string>
   */
  public function attributes(): array
  {
    return [
      // 'email' => 'email address',
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array<string, string>
   */
  public function messages(): array
  {
    return [
      // 'title.required' => 'A title is required',
      // 'body.required' => 'A message is required',
    ];
  }
}

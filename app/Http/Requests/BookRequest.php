<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
          "name"=>"required|min:2",
          "author_id"=>"required|integer",
          "isbn"=>"required|integer|digits_between:10,13",
          "image" => "image|nullable|max:2048",
          "image.*" =>"mimes:jpeg,jpg,png",
        ];
    }
    public function messages()
    {
        return [
        'name.min'=>'Kitap ismi minimum :min olabilir',
        //'author_name.min'=> 'Yazar ismi minimum :min olabilir',
        //'author_name.max'=> 'Yazar ismi maksimum :max olabilir',
        'image.*'=> 'Fotoğraf jpeg,jpg,png türünde olmalı',
        'isbn.min'=> ' Kitap isbn minimum :min haneli olabilir',
        'isbn.max'=> 'Kitap isbn maksimum :max haneli olabilir'
      ];
    }
}

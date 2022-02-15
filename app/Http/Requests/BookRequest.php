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
          "book_name"=>"required|min:2",
          "author_name"=>"required|min:3|max:30",
          "book_ibsn"=>"required|integer|digits_between:10,13"
        ];
    }
    public function messages()
    {
      return [
        'book_name.min'=>'Kitap ismi minimum :min olabilir',
        'author_name.min'=> 'Yazar ismi minimum :min olabilir',
        'author_name.max'=> 'Yazar ismi maksimum :max olabilir',
        'book_ibsn.numeric'=>'Kitap isbn sayısal değer olmalı.',
        'book_ibsn.min'=> ' Kitap isbn minimum :min haneli olabilir',
        'book_ibsn.max'=> 'Kitap isbn maksimum :max haneli olabilir'
      ];
    }
}

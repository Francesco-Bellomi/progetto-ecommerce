<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
            'title'=>'required|min:5|max:20',
            'description'=>'required|min:30|max:255',
            'price'=>'required',
            // 'images'=>'image'
        ];
    }

    public function messages(){

        return[
            'title.required'=>'Il titolo è obbligatorio',
            'title.min'=>'Il titolo deve avere minimo 5 caratteri',
            'title.max'=>'Il titolo deve avere massimo 20 caratteri',
            'description.required'=>'La descrizione è obbligatoria',
            'description.min'=>'La descrizione deve avere minimo 30 caratteri',
            'description.max'=>'La descrizione deve avere massimo 255 caratteri',
            'price.required'=>'Il prezzo è obbligatorio',
            // 'images.image'=>'Il file deve essere un immagine',
        ];
    }
}

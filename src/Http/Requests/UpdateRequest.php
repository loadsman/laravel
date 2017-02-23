<?php

namespace Loadsman\LaravelPlugin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateRequest
 *
 * @package \Loadsman\Laravel\Http\Requests
 */
class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required'
        ];
    }

    public function authorize(){
        return true;
    }
}

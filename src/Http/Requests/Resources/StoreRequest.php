<?php

namespace Farouter\Http\Requests\Resources;

use Farouter\Http\Requests\BaseRequest;

class StoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:64',
                'unique:resources',
            ],
        ];
    }
}

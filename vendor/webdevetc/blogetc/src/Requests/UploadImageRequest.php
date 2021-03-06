<?php

namespace WebDevEtc\BlogEtc\Requests;

class UploadImageRequest extends BaseAdminRequest
{
    public function rules(): array
    {
        return [
            'sizes_to_upload' => [
                'required',
                'array',
            ],
            'sizes_to_upload.*' => [
                'string',
                'max:100',
            ],
            'upload' => [
                'required',
                'image',
            ],
            'image_title' => [
                'required',
                'string',
                'min:1',
                'max:150',
            ],
        ];
    }
}

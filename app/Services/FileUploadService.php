<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileUploadService
{
    public function upload(UploadedFile $file, $folder = '')
    {
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Specify the public path
        $path = public_path('uploads/' . $folder);

        // Move the file to the specified path
        $file->move($path, $fileName);

        return $fileName;
    }
}

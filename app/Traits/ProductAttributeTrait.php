<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

trait ProductAttributeTrait
{
    public $digitalFilePath = "secure/product/files";

    public function clearDigitalFiles()
    {
        \Storage::deleteDirectory("{$this->digitalFilePath}/{$this->id}");
    }
    //digital product path
    public function saveDigitalFile($digitalFile)
    {
        \Storage::putFile("{$this->digitalFilePath}/{$this->id}", $digitalFile);
    }

    public function getDigitalFilesAttribute()
    {
        $files = \Storage::allFiles("{$this->digitalFilePath}/{$this->id}");
        $modFiles = [];
        $auth = "";
        // if (!\Request::wantsJson()) {
            $auth = \Crypt::encrypt([
                "user_id" => \Auth::id(),
            ]);
        // }

        foreach ($files as $key => $file) {
            $modFiles[] = json_decode(
                json_encode([
                    "name" => array_reverse(explode("/", $file))[0],
                    "size" => Storage::size($file),
                    "link" => route('digital.download', ["id" => $this->id, "auth" => $auth]),
                ])
            );
        }
        return $modFiles;
    }
}

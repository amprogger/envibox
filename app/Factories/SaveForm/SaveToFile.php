<?php


namespace App\Factories\SaveForm;

use Illuminate\Support\Facades\Storage;

class SaveToFile implements Saver
{
    public function save(array $data): bool
    {
        $content = "";
        foreach ($data as $key => $value)
        {
            $content .= ucfirst($key) . ": " . $value . ".\n";
        }
        $fileName = date('Y-m-d:H:i:s') . ".txt";
        return Storage::put($fileName, $content);
    }
}

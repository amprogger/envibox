<?php


namespace App\Factories\SaveForm;


class SaveToFileFactory extends SaveFormFactory
{
    public function getSaver(): Saver
    {
        return new SaveToFile();
    }
}

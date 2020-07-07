<?php


namespace App\Factories\SaveForm;


use App\Form;

class SaveToDatabaseFactory extends SaveFormFactory
{
    public function getSaver(): Saver
    {
        return new SaveToDatabase();
    }
}

<?php


namespace App\Factories\SaveForm;


use App\Form;

class SaveToDatabase implements Saver
{

    public function save(array $data): bool
    {
        return (bool) Form::create($data);
    }
}

<?php


namespace App\Factories\SaveForm;


abstract class SaveFormFactory
{
    abstract public function getSaver(): Saver;

    public function save(array $data): bool
    {
        $saver = $this->getSaver();
        return $saver->save($data);
    }
}

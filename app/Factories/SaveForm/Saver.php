<?php


namespace App\Factories\SaveForm;


interface Saver
{
    public function save(array $data): bool;
}

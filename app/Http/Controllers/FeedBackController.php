<?php

namespace App\Http\Controllers;

use App\Factories\SaveForm\SaveFormFactory;
use App\Http\Requests\SendFormRequest;

class FeedBackController extends Controller
{
    private $factory;

    public function __construct(SaveFormFactory $factory)
    {
        $this->factory = $factory;
    }

    public function sendForm(SendFormRequest $request)
    {
        return response()->json($this->factory->save($request->all()));
    }
}

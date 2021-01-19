<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    //
    public function show(Person $person)
    {
        //Php artisan make:controller ProjectController --resource --model=Project

        //dd($person);
        return $person;
    }
}

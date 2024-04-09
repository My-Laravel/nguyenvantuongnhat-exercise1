<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function getInfor(){
        $people = DB::table('people')->find(10);
        return $people;
    }
}

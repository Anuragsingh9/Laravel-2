<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;
class EvenController extends Controller
{
    public function details(){
        event(new UserCreated("You are logged in.."));
    }
}

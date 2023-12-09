<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Transactions;
class HomeController extends Controller
{
    //
    public function index(){

        $carCount = Cars::count();
        $transactionCount = Transactions::count();

        return view('home',  compact('carCount', 'transactionCount'));
    }
}

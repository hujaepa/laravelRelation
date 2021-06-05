<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Customers;
use App\Models\User;
class OrdersController extends Controller
{
    public function all(){
        $customers = customers::all();
        return view("data",compact("customers"));
    }
    public function getUsers()
    {
        $user = User::findOrFail(1);
        return view("user",compact("user"));
    }
}

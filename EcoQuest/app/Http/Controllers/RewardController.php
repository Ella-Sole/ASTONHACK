<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    protected $table = 'rewards';

    public function listRewards() {
        //return all the Gift cards in the database
        return(Reward::all());
    }
    

}

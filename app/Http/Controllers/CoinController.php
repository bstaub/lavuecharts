<?php

namespace App\Http\Controllers;

use App\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function index()
    {
        $coins = Coin::where('name', 'Bitcoin')
            ->orderBy('year')
            ->get();
        return response()->json($coins);
    }

    public function store(Request $request)
    {
        Coin::create($request->only('name', 'year', 'price'));

        return response()->json(['success' => 'Coin has been successfully added'], 200);
    }
}



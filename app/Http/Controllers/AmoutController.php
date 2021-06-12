<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AmoutController extends Controller
{
    public function clientTotalAmount($id)
    {
        $amounts = Credit::where('clientid','like',$id)->get();
        $total = 0.00;

        foreach ($amounts as $amount) {

            $total+= $amount->amount;
        }
        return response()->json([
            "data" => $total
        ], Response::HTTP_OK);
    }
}

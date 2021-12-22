<?php

namespace App\Http\Controllers;
use App\Models\ClientReviewModel;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    function ClientReview(){
        $result = ClientReviewModel::all();
        return $result;
    }
}

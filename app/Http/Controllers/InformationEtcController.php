<?php

namespace App\Http\Controllers;
use App\Models\InformationModel;
use Illuminate\Http\Request;

class InformationEtcController extends Controller
{
    function Refund(){
        $result = InformationModel::all('refund');
        return $result;
    }

    function Terms(){
        $result = InformationModel::all('terms');
        return $result;
    }

    function Privacy(){
        $result = InformationModel::all('privacy');
        return $result;
    }

    function About(){
        $result = InformationModel::all('about');
        return $result;
    }
}

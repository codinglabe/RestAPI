<?php

namespace App\Http\Controllers;
use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function AllService(){
        $result = ServiceModel::all();
        return $result;
    }
}

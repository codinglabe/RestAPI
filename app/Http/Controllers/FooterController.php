<?php

namespace App\Http\Controllers;
use App\Models\FooterModel;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    function FooterData(){
        $result = FooterModel::all();
        return $result;
    }
}

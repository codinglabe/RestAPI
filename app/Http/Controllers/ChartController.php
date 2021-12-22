<?php

namespace App\Http\Controllers;
use App\Models\ChartModel;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    function ChartContoller(){
        $result = ChartModel::all('x_data','y_data');
        return $result;
    }

    function columnCount(){
        $result = ChartModel::count();
        return $result;
    }
}

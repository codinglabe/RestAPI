<?php

namespace App\Http\Controllers;
use App\Models\HomeEtcModel;
use Illuminate\Http\Request;

class HomeEtcConrtoller extends Controller
{
    function HomeTitle(){
        $result = HomeEtcModel::all('home_title','home_sub_title');
        return $result;
    }

    function TecnologyDescription(){
        $result = HomeEtcModel::all('tec_description');
        return $result;
    }

    function CounTingValue(){
        $result = HomeEtcModel::all('total_projects','total_client');
        return $result;
    }

    function VideoData(){
        $result = HomeEtcModel::all('video_description','video_url');
        return $result;
    }
}

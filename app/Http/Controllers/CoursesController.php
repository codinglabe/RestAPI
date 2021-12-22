<?php

namespace App\Http\Controllers;
use App\Models\CoursesModel;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function CoursesData(){
        $result = CoursesModel::all();
        return $result;
    }

    function CoursesFourselect(){
        $result = CoursesModel::limit(4)->get(['course_image','course_title','course_des','course_link']);
        return $result;
    }

    function CoursesByID(Request $request){
        $id = json_decode($request->getContent(),true);
        // $id = $request->input('Courseid');
        $result = CoursesModel::where('id','=',$id)->get();
        return $result;
    }
}

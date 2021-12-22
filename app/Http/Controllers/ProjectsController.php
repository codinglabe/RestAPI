<?php

namespace App\Http\Controllers;
use App\Models\ProjectsModel;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function ProjectSelect3(){
        $result = ProjectsModel::limit(3)->get(['id','project_image','project_name','project_description','project_link']);
        return $result;
    }

    function AllProjects(){
        $result = ProjectsModel::all(['id','project_image','project_name','project_description','project_link']);
        return $result;
    }

    function ProjectsById(Request $request){
        $id = json_decode($request->getContent(),true);
    
            $result = ProjectsModel::where('id','=',$id)->get();
            return $result;
    }
}

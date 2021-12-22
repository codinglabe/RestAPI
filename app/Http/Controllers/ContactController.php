<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function ContactSend(Request $request){
        $ContactData = json_decode($request->getContent(),true);
        $name = $ContactData['name'];
        $email = $ContactData['email'];
        $msge = $ContactData['msg'];
        $result = ContactModel::insert([
            'name'=>$name,
            'email'=>$email,
            'message'=>$msge
        ]);

        if($result == true){
            return 1;
        }else {
            return 0;
        }
    }

    function ContactGet(){
        $result = ContactModel::all();
        return $result;
    }
    
}

<?php

namespace App\Http\Controllers;


class ProfileController extends Controller
{
    public function index($id){
       
        $name = "Donal Trump";
        $age = "75";
        $data = [
            "name"  => $name,
            "age"   => $age,
            "id"    => $id,
        ];
        $name="access_token";
        $value="123-XYZ";
        $expTime=1;
        $path="/profile/3";
        $domain=$_SERVER['SERVER_NAME'];
        $secure=false;
        $httpOnly=true;
        return response()->json([
            "message" => "Cookie set successfully",
            "data" => $data
        ],200)->cookie(
             $name,$value,$expTime,$path,$domain,$secure,$httpOnly
        );
        
    }
}

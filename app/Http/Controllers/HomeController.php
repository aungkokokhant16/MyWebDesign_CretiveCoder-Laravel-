<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        //dd(parameter twy ko san chin yin "dd" ko thone tl)
        // dd("aung ko ko khant");
        //return ("retrun pyan pay tl ko lo chin dae nY yr ko")
        return view("Home");
    }

    function userdata(Request $req) {

        $validation=$req->validate([
            "name"=>"required",
            "age"=>"required"
        ]);

        if($validation){
            // return "work";
            // dd($req->name." " .$req->age);
            $name=$req->name;
            $age =$req->age;
            return back()->with("message","Name is $req->name . Age is $req->age");
        }else{
            return back()->withErrors($validation);
        }






    }

    function about(){
        return view("About");
    }

    function contact(){
        return view("Contact");
    }

}

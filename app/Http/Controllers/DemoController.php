<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // function demo1(){
    //     // return "Hello";
    //     // return 100;
    //     // return null;
    //     // return true;

    //     //return ['A','B','C'];

    //     //return array(["name"=>"Rayhan","City"=>"Dhaka","Country"=>"Bangladesh"]);
    //     // return response()->json(["name"=>"Rayhan","City"=>"Dhaka","Country"=>"Bangladesh"]);
    //     // return response()->json(["name"=>"Rayhan","City"=>"Dhaka","Country"=>"Bangladesh"],status:203);
    //     // return redirect("/");
    //     // return response()->file(file:"img.png");
    //     //return response()->download(file:"img.png");
    //     // return view(view:'demo');

    // }

    // function demo2(Request $request){
    //     // $qry=$request->query();
    //     // return "$qry";

    //     $name=$request->name;
    //     $city=$request->city;
    //       return $name;

    // }

    function demo3(Request $request){
        $JSONBody=$request->input();
        return $JSONBody;


    }

    function demo4(Request $request){
        $HEAD=$request->header();
        return $HEAD;
    }
}

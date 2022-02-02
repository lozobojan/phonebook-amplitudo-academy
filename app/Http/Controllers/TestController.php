<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showContacts(Request $request){
        $contacts = [
            ["id" => 1,"name" => "Marko Markovic", "phone" => "067/885-252"],
            ["id" => 2, "name" => "Janko Jankovic", "phone" => "067/888-222"],
            ["id" => 3, "name" => "Filip Filipovic", "phone" => "069/888-222"],
        ];
        return view("contacts", [ "status" => $request->status, "contacts" => $contacts ]);
    }

    public function about(){
        return view("public_website.about");
    }

    public function showSingleContact($id){
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $customers = [
            [
                "id" => 1,
                "username" =>"vanh",
                "phone" => "12345",
                "email" => "vanh@gmail.com"
            ],
            [
                "id" => 2,
                "username" => "Anh",
                "phone" => "12345",
                "email" => "Anh@gmail.com"
            ]
        ];
        return view('index',compact('customers'));
    }
    public function create(){
        return view('create');
    }
    public function show($id){
        $customers = [
            [
                "id" => 1,
                "username" =>"vanh",
                "phone" => "12345",
                "email" => "vanh@gmail.com"
            ],
            [
                "id" => 2,
                "username" => "Anh",
                "phone" => "12345",
                "email" => "Anh@gmail.com"
            ]
        ];
        return view('list',compact('customers','id'));
    }
    public function edit($id){
        $customers = [
            [
                "id" => 1,
                "username" =>"vanh",
                "phone" => "12345",
                "email" => "vanh@gmail.com"
            ],
            [
                "id" => 2,
                "username" => "Anh",
                "phone" => "12345",
                "email" => "Anh@gmail.com"
            ]
        ];
        return view('update',compact('customers','id'));
    }
    public function delete($id){
        $customers = [
            [
                "id" => 1,
                "username" =>"vanh",
                "phone" => "12345",
                "email" => "vanh@gmail.com"
            ],
            [
                "id" => 2,
                "username" => "Anh",
                "phone" => "12345",
                "email" => "Anh@gmail.com"
            ]
        ];
        $customers[$id-1]->delete($id);
        return view('index');
    }
}

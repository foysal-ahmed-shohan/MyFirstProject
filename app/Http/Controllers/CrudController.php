<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Crud;

class CrudController extends Controller
{
    //

    public function create(){
    	return view('posts.create');
    }
    public function store(Request $reuquest){
    	//validation
    	$this->validate($reuquest,[
    		'name'=>'required|string|min:4|max:15',
    		'email'=>'required|email',
    		'password'=>'required|confirmed',
    		'city'=>'required|string|min:5',
    		'address'=>'required|string'
    	]);
        Crud::create($reuquest->all());
    	Session::flash('success','Successfully registered');
        return redirect()->back();

    	//show output to user
    }
}

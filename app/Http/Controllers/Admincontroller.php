<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use session;
session_start();


class Admincontroller extends Controller
{
    public function dashboard(){
    	return view('welcome');
    }
    public function add_contract(){
    	return view('addcontract');
    }
    public function all_contract(){

       $allcontract_info=DB::table('users')
                ->get();
       $managecontract=view('allcontract')
                ->with('allcontract_info',$allcontract_info);         

    	return view('layout')
                ->with('allcontract',$managecontract);
    }
//data add
    public function save_data(Request $request ){

    	$data = array();
    	$data['name'] = $request->name;
    	$data['number'] = $request->number;  

    	DB::table('users')->insert($data);    	
    	return Redirect::to('/addcontract');

    }

    public function delect_content($id){
        
        DB::table('users')
            ->where('id',$id)
            ->delete();
        return Redirect::to('/allcontract');
    }

    public function edit_content($id){
        
        
       $contract_info=DB::table('users')
            ->where('id',$id)
            ->first();
        $managecontract=view('edit_contract')
            ->with('allcontract_info',$contract_info);
        return view('layout')
            ->with('edit_contract',$managecontract);    
        
    }

     public function update_data(Request $request, $id ){

        $data = array();
        $data['name'] = $request->name;
        $data['number'] = $request->number;  

        DB::table('users')
        ->where('id',$id)
        ->update($data);
             
        return Redirect::to('/allcontract');

    }




}

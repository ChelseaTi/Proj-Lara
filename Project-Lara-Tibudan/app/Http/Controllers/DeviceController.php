<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\usrFort;
use Hash;
use DB;
use App\Http\Controllers\Controller;
use Session;

class DeviceController extends Controller
{
    //for homepage
    public function home(){
        $table_data = DB::table('usr_forts')->get();
        return view("home-User",compact('table_data'));
    }
    /**for editing   ---*/
    public function editRecord($id){
        $currentRecord = DB::table('usr_forts')->where('id', $id)->first();
        return view("update",compact('currentRecord'));
    }
    public function updateRecord(Request $request){
        
        $update = DB::table('usr_forts')->where('id', $request->id);
        
        $index_Upate=$update->update([
            
            'stID' => $request->input('stID'),
            'frName' => $request->input('frName'),
            'lsName' => $request->input('lsName'),
            'miInitial' => $request->input('miInitial'),
            'cour' => $request->input('cour'),
            'yrLevel' => $request->input('yrLevel')

        ]);
        if($index_Upate){
            return back()->with('updated','Update Data Successfully!');
        }
    }

    public function deleteRecord(Request $request){
        $currentRecord = DB::table('usr_forts')->where('id', $id)->delete();
        if($currentRecord){
            return back()->with('deleted','Delete Data Successfully!');
        }
    }
    public function addRecord(){
        return view("index");
    }

    //for insert
    public function Regi(Request $request){
        //stID frName lsName miInitial cour yrLevel

        $StudentRecord = new usrFort;
        $StudentRecord->stID = $request->input('stID');
        $StudentRecord->frName = $request->input('frName');
        $StudentRecord->lsName = $request->input('lsName');
        $StudentRecord->miInitial = $request->input('miInitial');
        $StudentRecord->cour = $request->input('cour');
        $StudentRecord->yrLevel = $request->input('yrLevel');
        $StudentRecord->status = $request->input('ACTIVE');
        $StudentRecord->save();
        

        
        if($StudentRecord){
            return back()->with('saved','Data Saved!');
        }
        else{
            return back()->with('failed', 'Data was not saved!');
        }

    }
     //for validation in login
    public function Vali(Request $request){
        if($username=DB::table('usr_forts')->where('stID','=',$request->stID)->first()){
            if($password = DB::table('usr_forts')->where('lsName','=',$request->lsName)->first()){
                return view("validate");
            }
            else{
                return back()->with('failed', 'Incorrect Password!');
            }
        }
        else{
            return back()->with('failed', 'Incorrect Username!');
        }
    }
}
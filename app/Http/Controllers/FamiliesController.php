<?php

namespace App\Http\Controllers;

use App\Models\Families;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FamiliesController extends Controller
{
    public function index(){
        $families = Families::where('parent_id', null)->get();
        $data = [
            'families' => $families
        ];
        return view('families.index',$data);
    }
    public function createParent()
    {
        return view('families.createParent');
    }

    public function doCreateParent(Request $request)
    {

        Families::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'relation' => $request->relation
        ]);
        Session::flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('families.index');
    }
    public function show(Request $request, $id)
    {
        if($request->relation != "" || $request->gender != "" || $request->gender != ""){
            if($request->relation != ""){

            }
        }else{
            $families = Families::where('root_id', $id)->get();
        }

        $data = [
            'families' => $families,
            'name' => Families::where('id', $id)->first()->name,

        ];
        return view('families.show', $data);
    }

    public function create(Request $request)
    {
        return view('families.create');
    }

    public function edit(Request $request)
    {
        return view('families.edit');
    }

    public function delete(Request $request)
    {
        //TODO
    }
}

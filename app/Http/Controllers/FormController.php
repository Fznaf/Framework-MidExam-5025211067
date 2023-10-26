<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemType;
use App\Models\form;
use App\Models\itemCondition;

class FormController extends Controller
{
    public function index(){
        $itemType = itemType::all();
        $itemCondition = itemCondition::all();
    
        return view('form', ['itemType' => $itemType, 'itemCondition' => $itemCondition]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'itemType' => 'required',
            'itemCondition' => 'required',
            'itemDesc' => 'required',
            'itemDefect' => 'nullable'
            // 'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        form::create([
            'itemType' => $request->itemType,
            'itemCondition' => $request->itemCondition,
            'itemDesc' => $request->itemDesc,
            'itemDefect' => $request->itemDefect
        ]);

        return redirect('/dashboard')->with('success', 'Item Added!');

    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FashionType;

class FashionTypeController extends Controller
{
    public function AllType(){
        $types = FashionType::latest()->get();
        return view('backend.type.all_type',compact('types'));
    }

    public function AddType(){
        return view('backend.type.add_type');
    }

    public function StoreType(Request $request){
        $request->validate([
            'type_name'=> 'required|unique:fashion_types|max:200',
            
        ]);

        FashionType::insert([
            'type_name' => $request->type_name
        ]);

        $notification = array(
            'message' => 'Fashion Type Create Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.type')->with($notification);
    }

   public function EditType($id){
        $types = FashionType::findOrFail($id);
        return view('backend.type.edit_type',compact('types'));
   }

   
   public function UpdateType(Request $request){
    
    $fid = $request->id;

    FashionType::findOrFail($fid)-> update ([
        'type_name' => $request->type_name
    ]);

    $notification = array(
        'message' => 'Fashion Type Updated Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.type')->with($notification);
}

    
}
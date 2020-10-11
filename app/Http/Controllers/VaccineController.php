<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function create(){
        return(view('vaccines.create'));
    }
    public function store(Request $request){
        $vaccines = Vaccine::where("id", $request);
        return view('/',compact('vaccines'));
    }
    public function index(Request $request){
        $query = trim($request->get('search'));
        
        if ($request) {
            $query = trim($request->get('search'));
            $vaccines = Vaccine::where('id', 'LIKE' ,'%' . $query . '%')
            ->orderby('id','asc')
            ->get();
            return view('vaccines.index',['vaccines' => $vaccines, 'search' => $query]);
        }
    }
}

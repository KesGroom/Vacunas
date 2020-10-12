<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficaController extends Controller
{
    public function forAge(){
        // $vacunas = DB::table('vaccines')
        // ->select(DB::raw('age_patient, count(*) as c_vacunados'))
        // ->groupBy('age_patient')
        // ->get();
        // return view('report.report',compact('vacunas'));

        // return response(json_encode($vacunas),200)->header('Content-type','text/plain');
        return "hola";
    }

    public function forVaccine(){
        $vacunas = DB::table('vaccines')
        ->select(DB::raw('name_vaccine, count(*) as c_vacunados'))
        ->groupBy('name_vaccine')
        ->get();
        return $vacunas;
    }

    public function forCity(){
        $vacunas = DB::table('vaccines')
        ->join('vvc','vaccines.vcc_id','=','vvc.id')
        ->select(DB::raw('vvc.city_resposible, count(*) as c_vacunados'))
        ->groupBy('vvc.city_resposible')
        ->get();
        return $vacunas;
    }

    public function forDate(){

    }
}

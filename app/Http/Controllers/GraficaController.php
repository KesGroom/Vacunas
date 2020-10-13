<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficaController extends Controller
{
    public function forAge()
    {

        // $d = [];
        // $result = array();

        $v = DB::table('vaccines')
            ->select(DB::raw('age_patient, count(*) as c_vacunados'))
            ->groupBy('age_patient')
            ->get();

        // foreach ($v as $value) {
        //     array_push($d, [$value->age_patient, $value->c_vacunados]);
        // }

        return view('report.report',compact('v'));
        // return view('report.report');
        // return "hola";
    }

    public function forVaccine()
    {
        $vacunas = DB::table('vaccines')
            ->select(DB::raw('name_vaccine, count(*) as c_vacunados'))
            ->groupBy('name_vaccine')
            ->get();
        return $vacunas;
    }

    public function forCity()
    {
        $vacunas = DB::table('vaccines')
            ->join('vvc', 'vaccines.vcc_id', '=', 'vvc.id')
            ->select(DB::raw('vvc.city_resposible, count(*) as c_vacunados'))
            ->groupBy('vvc.city_resposible')
            ->get();
        return $vacunas;
    }

    public function forDate()
    {
    }
}

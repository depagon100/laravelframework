<?php

namespace App\Http\Controllers;

use App\Models\AAQmonitoring;
use App\Models\AQC;
use App\Models\AQG;
use App\Models\Description;
use App\Models\EICC;
use App\Models\EVMPprogram;
use App\Models\OECondition;
use App\Models\TQC;
use App\Models\TQG;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF as PDF;

class ModuleFiveController extends Controller
{
    public function index(){
        $aaqmonitoring = AAQmonitoring::all();
        $oecondition = OECondition::all();
        $evmpprogram = EVMPprogram::all();
        $aqg = AQG::all();
        $tqg = TQG::all();
        $aqc = AQC::all();
        $tqc = TQC::all();
        $eicc = EICC::all();
        $description = Description::all();

        return view('layout.moduleFive');
        -with(['aaqmonitoring'=>$aaqmonitoring,'oecondition'=>$oecondition,'evmpprogram'=>$evmpprogram,'aqg'=>$aqg,'tqg'=>$tqg,
        'aqc'=>$aqc,'tqc'=>$tqc,'eicc'=>$eicc,'description'=>$description
    ]);

    }

    public function save(Request $request){

        $aaqmonitoring = $request->input('aaqmonitoring');
        for ($x=0; $x<count($aaqmonitoring); $x+=6 ){
            $DBaaqmonitoring = new AAQmonitoring();
            $DBaaqmonitoring->station_description = $aaqmonitoring[$x];
            $DBaaqmonitoring->date = $aaqmonitoring[$x+1];
            $DBaaqmonitoring->noise_level_db = $aaqmonitoring[$x+2];
            $DBaaqmonitoring->CO_mg_ncm = $aaqmonitoring[$x+3];
            $DBaaqmonitoring->NOx_mg_ncm = $aaqmonitoring[$x+4];
            $DBaaqmonitoring->particulates_mg_ncm = $aaqmonitoring[$x+5];
        
            $DBaaqmonitoring->save();
        }
    
        
        $oecondition = $request->input('oecondition');
        
        for ($x=0; $x<count($oecondition); $x+=3 ){
            $DBoecondition = new OECondition();
            $DBoecondition->ECC_Condition = $oecondition[$x];
            $DBoecondition->Status_of_Compliance = $oecondition[$x+1];
            $DBoecondition->Actions_Taken = $oecondition[$x+2];
            
            
            $DBoecondition->save();
        }
        

        


        $evmpprogram = $request->input('evmpprogram');
        for ($x=0; $x<count($evmpprogram); $x+=3 ){
            $DBevmpprogram = new EVMPprogram();
            $DBevmpprogram->Enhancement_Mitigation_Measures = $evmpprogram[$x];
            $DBevmpprogram->Status_of_Compliance = $evmpprogram[$x+1];
            $DBevmpprogram->Actions_Taken = $evmpprogram[$x+2];
            
            $DBevmpprogram->save();
        }

        

        $aqg  = new AQG();
        $aqg->Recyclable = $request->input('AQG1');
        $aqg->Biodegradable = $request->input('AQG2');
        $aqg->Residual = $request->input('AQG3');
        
        $aqg->save();

        $tqg  = new TQG();
        $tqg->Recyclable = $request->input('TQG1');
        $tqg->Biodegradable = $request->input('TQG2');
        $tqg->Residual = $request->input('TQG3');
        
        $tqg->save();

        $aqc  = new AQC();
        $aqc->Recyclable = $request->input('AQC1');
        $aqc->Biodegradable = $request->input('AQC2');
        $aqc->Residual = $request->input('AQC3');

        $aqc->save();

        $tqc  = new TQC();
        $tqc->Recyclable = $request->input('TQC1');
        $tqc->Biodegradable = $request->input('TQC2');
        $tqc->Residual = $request->input('TQC3');

        $tqc->save();

        $eicc  = new EICC();
        $eicc->Recyclable = $request->input('EICC1');
        $eicc->Biodegradable = $request->input('EICC2');
        $eicc->Residual = $request->input('EICC3');

        $eicc->save();

        $description = new Description();
        $description->description = $request->input('description');

        $description->save();

        
        return view('layout.moduleFive');
    }

    public function pdf(){


    }
}

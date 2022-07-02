<?php

namespace App\Http\Controllers;

use App\Models\Acno;
use App\Models\Aircon;
use App\Models\Cncno;
use App\Models\Denrid;
use App\Models\Dpno;
use App\Models\Gic;
use App\Models\Import;
use App\Models\Operation;
use App\Models\Permmit;
use App\Models\Piccs;
use App\Models\Pmpin;
use App\Models\Pono;
use App\Models\Priority;
use App\Models\Production;
use App\Models\Smallquan;
use App\Models\Transporter;
use App\Models\Tsdreg;
use Illuminate\Http\Request;

class ModuleOneController extends Controller
{
    public function index(){

       $aircon = Aircon::find(1);
       $dpno = Dpno::all();
       $gic = Gic::all();
       $acno = Acno::all();
       $cnco = Cncno::all();
       $denrid = Denrid::all();
       $dpno = Dpno::all();
       $import = Import::all();
       $operation= Operation::all();
       $permit= Permmit::all();
       $piccs= Piccs::all();
       $pmpin = Pmpin::all();
       $pono = Pono::all();
       $priority= Priority::all();
       $production= Production::all();
       $smallQuan= Smallquan::all();
       $transporter=Transporter::all();
       $tsdReg = Tsdreg::all();

        return view('/layout.moduleOne')
        ->with(['aircon'=>$aircon,'dpno'=>$dpno,'gic'=>$gic, 'acno'=> $acno, 'cnco'=>$cnco,
                'denrid'=>$denrid,'import'=>$import,'operation'=>$operation, 'permit'=> $permit,
                'piccs'=> $piccs,'pmpin'=>$pmpin,'pono'=>$pono,'priority'=>$priority,
                'production'=>$production,'smallQuan'=>$smallQuan,'transporter'=>$transporter,
                'tsdReg'=> $tsdReg ]);

       }

       public function save(Request $request){

        $gic = new Gic();
        $gic->traineeID = $request->input('traineeID');
        $gic->description = $request->input('description');
        $gic->save();


        $aircon  = new Aircon();
        $aircon->traineeID = $request->input('traineeID');
        $aircon->permit = $request->input('ACPermit');
        $aircon->dateIssued = $request->input('ACIssued');
        $aircon->dateExpired = $request->input('ACExpire');
        $aircon->save();




        $dpno = $request->input('dpno');
        for ($x=0; $x<count($dpno); $x+=3){
           $DBdpno = new Dpno();
           $DBdpno->traineeID = 1;
           $DBdpno->permit = $dpno[$x];
           $DBdpno->dateIssued = $dpno[$x+1];
           $DBdpno->dateExpired = $dpno[$x+2];
           $DBdpno->save();
       }

       $cncno = $request->input('cncno');
        for ($x=0; $x<count($cncno); $x+=3){
           $DBcncno = new Cncno();
           $DBcncno->traineeID = 1;
           $DBcncno->permit = $cncno[$x];
           $DBcncno->dateIssued = $cncno[$x+1];
           $DBcncno->dateExpired =  $cncno[$x+2];
           $DBcncno->save();
       }


          $DBdenrid = new Denrid();
          $DBdenrid->traineeID = 1;
          $DBdenrid->permit = $request->input('DENRpermit');
          $DBdenrid->dateIssued = $request->input('DENRdateIssued');
          $DBdenrid->dateExpired = $request->input('DENRdateExpired');
          $DBdenrid->save();

         $DBtransporter = new Transporter();
         $DBtransporter->traineeID = 1;
         $DBtransporter->permit =  $request->input('Transportpermit');
         $DBtransporter->dateIssued = $request->input('TransportdateIssued');
         $DBtransporter->dateExpired =   $request->input('TransportdateExpired');
         $DBtransporter->save();

         $tsdReg = new Tsdreg();
         $tsdReg->traineeID = 1;
         $tsdReg->permit =  $request->input('TSDpermit');
         $tsdReg->dateIssued = $request->input('TSDdateIssued');
         $tsdReg->dateExpired =   $request->input('TSDdateExpired');
         $tsdReg->save();

         $ccoreg = $request->input('ccoreg');
         for ($x=0; $x<count($ccoreg); $x+=3){
            $DBcncno = new Cncno();
            $DBcncno->traineeID = 1;
            $DBcncno->permit = $cncno[$x];
            $DBcncno->dateIssued = $cncno[$x+1];
            $DBcncno->dateExpired =  $cncno[$x+2];
            $DBcncno->save();
        }

        $import = $request->input('import');
        for ($x=0; $x<count($import); $x+=3){
           $DBimport = new Import();
           $DBimport->traineeID = 1;
           $DBimport->permit = $import[$x];
           $DBimport->dateIssued = $import[$x+1];
           $DBimport->dateExpired =  $import[$x+2];
           $DBimport->save();
       }

       $permit = $request->input('permit');
       for ($x=0; $x<count($permit); $x+=3){
          $DBpermit = new Permmit();
          $DBpermit->traineeID = 1;
          $DBpermit->permit =  $permit[$x];
          $DBpermit->dateIssued =  $permit[$x+1];
          $DBpermit->dateExpired =   $permit[$x+2];
          $DBpermit->save();
      }

      $smallQuan = $request->input('smallQuan');
       for ($x=0; $x<count($smallQuan); $x+=3){
          $DBsmallquan = new Smallquan();
          $DBsmallquan->traineeID = 1;
          $DBsmallquan->permit =  $smallQuan[$x];
          $DBsmallquan->dateIssued =  $smallQuan[$x+1];
          $DBsmallquan->dateExpired =  $smallQuan[$x+2];
          $DBsmallquan->save();
      }

      $priority = $request->input('priority');
       for ($x=0; $x<count($priority); $x+=3){
          $DBpriority = new Priority();
          $DBpriority->traineeID = 1;
          $DBpriority->permit =  $priority[$x];
          $DBpriority->dateIssued =  $priority[$x+1];
          $DBpriority->dateExpired =  $priority[$x+2];
          $DBpriority->save();
      }


      $piccs = $request->input('piccs');
       for ($x=0; $x<count($piccs); $x+=3){
          $DBpiccs = new Piccs();
          $DBpiccs->traineeID = 1;
          $DBpiccs->permit =  $piccs[$x];
          $DBpiccs->dateIssued =  $piccs[$x+1];
          $DBpiccs->dateExpired =  $piccs[$x+2];
          $DBpiccs->save();
      }

      $pmpin = $request->input('pmpin');
       for ($x=0; $x<count($pmpin); $x+=3){
          $DBpmpin = new Pmpin();
          $DBpmpin->traineeID = 1;
          $DBpmpin->permit =  $pmpin[$x];
          $DBpmpin->dateIssued =  $pmpin[$x+1];
          $DBpmpin->dateExpired =  $pmpin[$x+2];
          $DBpmpin->save();
      }

      $acno = new Acno();
      $acno->traineeID = $request->input('traineeID');
      $acno->permit = $request->input('ACNOPermit');
      $acno->dateIssued = $request->input('ACNOIssued');
      $acno->dateExpired = $request->input('ACNOExpire');
      $acno->save();

      $pono = $request->input('pono');
       for ($x=0; $x<count($pono); $x+=3){
          $DBpono = new Pono();
          $DBpono->traineeID = 1;
          $DBpono->permit =  $pono[$x];
          $DBpono->dateIssued =  $pono[$x+1];
          $DBpono->dateExpired =  $pono[$x+2];
          $DBpono->save();
      }

      $operation = new Operation();
      $operation->traineeID = $request->input('traineeID');
      $operation->aveOPhours = $request->input('aveOPhours');
      $operation->aveOPdays = $request->input('aveOPdays');
      $operation->aveOPshift = $request->input('aveOPshift');
      $operation->maxOPhours = $request->input('maxOPhours');
      $operation->maxOPdays = $request->input('maxOPdays');
      $operation->maxOPshift = $request->input('maxOPshift');
      $operation->save();

      $production= new Production();
      $production->aveProduction= $request->input('aveProduction');
      $production->totalOutput = $request->input('totalOutput');
      $production->totalConsumption= $request->input('totalConsumption');
      $production->totalElectric = $request->input('totalElectric');
      $production->traineeID = $request->input('traineeID');

      $production->save();

        return redirect('/layout.moduleOne');
       }

}

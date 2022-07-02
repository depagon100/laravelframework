<?php

namespace App\Http\Controllers;

use App\Models\Disposal;
use App\Models\HWDetails;
use App\Models\HwGeneration;
use App\Models\Osisa;
use App\Models\Storage;
use App\Models\M2Transporter;
use App\Models\Treater;
use Illuminate\Http\Request;

class ModuleTwoController extends Controller
{
    public function index(){
        $hwGeneration = HwGeneration::all();
        $hwDetails = HWDetails::all();
        $storage = Storage::all();
        $m2transporter = M2Transporter::all();
        $treater = Treater::all();
        $disposal = Disposal::all();
        $osisa = Osisa::all();

        return view('/layout.moduleTwo');
        -with(['hwGeneration'=>$hwGeneration,'hwDetails'=>$hwDetails,'storage'=>$storage,'m2trasporter'=>$m2transporter,
        'treater'=>$treater,'disposal'=>$disposal,'osisa'=>$osisa]);
    }   

    public function save(Request $request){
        
        $hwGeneration = $request->input('hwGeneration');
        for ($x=0; $x<count($hwGeneration); $x+=8 ){
            $DBhwGeneration = new HwGeneration();
            $DBhwGeneration->traineeID = 1;
            $DBhwGeneration->Hwno = $hwGeneration[$x];
            $DBhwGeneration->HWclass = $hwGeneration[$x+1];
            $DBhwGeneration->HWNature = $hwGeneration[$x+2];
            $DBhwGeneration->HWcataloguing = $hwGeneration[$x+3];
            $DBhwGeneration->RemainingQty = $hwGeneration[$x+4];
            $DBhwGeneration->PreviousReportUnit = $hwGeneration[$x+5];
            $DBhwGeneration->HWGeneratedQty = $hwGeneration[$x+6];
            $DBhwGeneration->QuarterUnit = $hwGeneration[$x+7];
            $DBhwGeneration->save();
        }

            $hwDetails = $request->input('hwDetails');
            for ($x=0; $x<count($hwDetails); $x+=5 ){
                $DBhwDetails = new HWDetails();
                $DBhwDetails->HWno = $hwDetails[$x];
                $DBhwDetails->HWclass = $hwDetails[$x+1];
                $DBhwDetails->QtyOfHWTreated = $hwDetails[$x+2];
                $DBhwDetails->Unit = $hwDetails[$x+3];
                $DBhwDetails->TSDLocation = $hwDetails[$x+4];
            
                $DBhwDetails->save();
            }
                $storage = $request->input('storage');
                for ($x=0; $x<count($storage); $x+=2 ){
                    $DBstorage = new Storage();
                    $DBstorage->name = $storage[$x];
                    $DBstorage->method = $storage[$x+1];
                    $DBstorage->save();
                }
                $m2transporter = $request->input('m2transporter');
                for ($x=0; $x<count($m2transporter); $x+=4){
                    $DBm2transporter = new M2Transporter();
                    $DBm2transporter->transpo_id = $m2transporter[$x];
                    $DBm2transporter->name = $m2transporter[$x+1];
                    $DBm2transporter->method = $m2transporter[$x+2];
                    $DBm2transporter->date = $m2transporter[$x+3];
                    $DBm2transporter->save();
                }
                $treater = $request->input('treater');
                for ($x=0; $x<count($treater); $x+=4){
                    $DBtreater = new Treater();
                    $DBtreater->treater_id = $treater[$x];
                    $DBtreater->name = $treater[$x+1];
                    $DBtreater->method = $treater[$x+2];
                    $DBtreater->date = $treater[$x+3];
                    $DBtreater->save();
                }
                $disposal = $request->input('disposal');
                for ($x=0; $x<count($disposal); $x+=4){
                    $DBdisposal = new Disposal();
                    $DBdisposal->disposal_id = $disposal[$x];
                    $DBdisposal->name = $disposal[$x+1];
                    $DBdisposal->method = $disposal[$x+2];
                    $DBdisposal->date = $disposal[$x+3];
                    $DBdisposal->save();
                }
                
                $osisa = $request->input('osisa');
                for ($x=0; $x<count($disposal); $x+=4){
                    $DBosisa = new Osisa();
                    $DBosisa->DateConducted = $osisa[$x];
                    $DBosisa->PremisesAreaInspected = $osisa[$x+1];
                    $DBosisa->FindingsAndObservations = $osisa[$x+2];
                    $DBosisa->CorrectiveActionsTaken = $osisa[$x+3];
                    $DBosisa->save();
                }
                

            return view('/layout.moduleTwo');
    }
}

    
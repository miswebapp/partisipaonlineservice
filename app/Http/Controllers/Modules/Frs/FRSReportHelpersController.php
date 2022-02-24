<?php

namespace App\Http\Controllers\Modules\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frs\Posto;
use App\Models\Frs\Suco;
use App\Models\Frs\Activity;
use App\Models\Frs\Capacity;
use App\Models\Frs\Counterpart;

class FRSReportHelpersController extends Controller
{
    public function fetc(Request $request)
    {
        $id = $request->value;
        $dependent = $request->dependent;

        if($dependent == 'posto'){
            $data = Posto::where('municipal_id',$id)->get();
            
            // Script to populate couterparts by municipal
            $staffs = Counterpart::where('municipal_id',$id)->orderBy('name')->get();
            $capacities = Capacity::all();

            $posto = '<option value="0">'.ucfirst($dependent).'</option>';
            foreach($data as $row){
                $posto .='<option value="'.$row->id.'" >'.$row->name.'</option>';
            }
            
            // $counterpart='<option value="0">'.ucfirst("counterparts").'</option>';
            $counterpart = "";
            foreach($staffs as $row){
                // $counterpart .='<option value="'.$row->id.'" >'.$row->name.' - ('.$row->position->alias.')</option>';
                $counterpart .='<tr><td><input type="checkbox" class="sel_capacity" name="counterparts[]" value="'.$row->id.'" id="'.$row->id.'" /></td>
                <td><span class="sel_capacity">'.$row->name.' - ('.$row->position->alias.')</span></td>
                    <td>
                        <select id="'.$row->id.'_sel" name="'.$row->id.'_capacity" class="custom-select custom-select-sm" disabled>
                            <option value>Select capacity</option>
                            <option value="1">Dependent</option>
                            <option value="2">Guided</option>
                            <option value="3">Assisted</option>
                            <option value="4">Independent</option>
                            <option value="5">Not Required</option>
                        </select>
                    </td>
                </tr>';
                // array_push($counterpart,array("id"=>$row->id, "name"=>$row->name));
            }

            

            $result = array();
            array_push($result,$posto);
            array_push($result,$counterpart);
            echo json_encode($result);
            exit();
        }

        if($dependent == 'suco'){
            $data = Suco::where('posto_id',$id)->get();
        }
        
        if($dependent == 'activity'){
            $data = Activity::where('program_id',$id)->get();
            $result = '<option value="0">'.ucfirst($dependent).'</option>';
            foreach($data as $row){
                $result .='<option value="'.$row->id.'"category="'.$row->category_id.'">'.$row->name.'</option>';
            }
            echo $result;
            
            exit();
        }

        $output = '<option value="0">'.ucfirst($dependent).'</option>';

        foreach($data as $row){
            $output .='<option value="'.$row->id.'" >'.$row->name.'</option>';
        }

        echo $output;


    }

}

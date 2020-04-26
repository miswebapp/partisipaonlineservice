<?php

namespace App\Http\Controllers\Modules\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Frs\Posto;
use App\Models\Frs\Suco;
use App\Models\Frs\Activity;

class FRSReportHelpersController extends Controller
{
    public function fetc(Request $request)
    {
        $id = $request->value;
        $dependent = $request->dependent;

        if($dependent == 'posto'){
            $data = Posto::where('municipal_id',$id)->get();
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

<?php

namespace App\Services\V1;
use Illuminate\Http\Request;

class LabsQuery{
    protected $safeParms=[
        "NameLab"=>['eq'],
        "Email"=>['eq'],
        "Passeord"=>['eq'],
        "Address"=>['eq'],
        "Phone"=>['eq'],
    ];
    protected $columnMap=[
        "Address"=>"Address",
    ];
    protected $operaterMap=[
        "eq"=>"=",
        // Add operation if you want

    ];
public function transform(Request $request){
    $eloQuery=[];
    foreach($this->safeParms as $parm=>$operaters){
        $qeury=$request->query($parm);
        if (!isset($qeury)) {
            continue;
            # code...
        }
        $column=$this->columnMap[$parm]?? $parm;
        foreach($operaters as $operater){
            if(isset($qeury[$operater])){
                $eloQuery[]=[$column,$this->operaterMap[$operater],$qeury[$operater]];
            }
        }

    }
    return $eloQuery;

}


}


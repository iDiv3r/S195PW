<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Convertidor extends Controller
{
    public function convertirMGB(Request $request){
        $mb = $request->post('mb');
        $gb = $request->post('gb1');
        $o = $request->post('opcion1');

        $resultado  = 0;
        
        switch ($o){
            case 1:
                if($mb != ''){
                    $resultado = ($mb / 1024);
                } else{
                    $resultado = NULL;
                }

                break;
            case 2:
                if($gb != ''){
                    $resultado = ($gb * 1024);
                } else{
                    $resultado = NULL;
                }
                
                break;
        }    

        return view('repaso1',[
            'resultado'=>$resultado,
            'opcion'=>$o
        ]);
    }

    public function convertirGTB(Request $request){
        $tb = $request->post('tb');
        $gb = $request->post('gb2');
        $o = $request->post('opcion2');

        $resultado  = 0;
        
        switch ($o){
            case 1:
                if($gb != ''){
                    $resultado = ($gb / 1024);
                } else{
                    $resultado = NULL;
                }
                
                break;
            case 2:
                if($tb != ''){
                    $resultado = ($tb * 1024);
                } else{
                    $resultado = NULL;
                }
                break;
        }    

        return view('repaso1',[
            'resultado2'=>$resultado,
            'opcion2'=>$o
        ]);
    }
}

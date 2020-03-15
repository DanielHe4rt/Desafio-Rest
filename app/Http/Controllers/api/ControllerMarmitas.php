<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\marmitas;
use Illuminate\Support\Facades\Validator;

class ControllerMarmitas extends Controller
{
    public function index(){
        $marmitas = marmitas::all();
        return response()->json($marmitas);
    }

    public function store(Request $request){
        $marmitas = new marmitas;
        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:6|max:50',
            'descricao' => 'required|min:15|max:250',
            'preco' => 'required',
            'estoque' => 'required',
            'image' => 'required',
            'desconto' => 'required'
        ]);

        if($validator->fails()){
            $erros = $validator->errors();
            return response()->json($erros, 400);
        }
        else{
            $marmitas->create($request->all());
            return response()->json('Marmita cadastrada com sucesso!');
        }
    }

    public function show(marmitas $marmitas){
        return response()->json($marmitas);
    }

    public function update(Request $request, marmitas $marmitas){

        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:6|max:50',
            'descricao' => 'required|min:15|max:250',
            'preco' => 'required',
            'estoque' => 'required',
            'image' => 'required',
            'desconto' => 'required'
        ]);

        if($validator->fails()){
            $erros = $validator->errors();
            return response()->json($erros, 400);
        }
        else
        {
            $marmitas->update($request->all());
            return response()->json('Editado com Sucesso');
        }
            
    }

    public function destroy(marmitas $marmita){
        $marmita->delete();
        return response()->json('Deletado com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')
                        ->orderBy('id','desc')
                        ->get();
        return view('fruta.index',[
            'frutas' => $frutas
        ]);
    }

    public function detail($id){
        $fruta = DB::table('frutas')->where('id','=',$id)->first();
        return view('fruta.detail',[
            'fruta' => $fruta
        ]);
    }

    public function create(){
        return view('fruta.create');
    }

    public function save(Request $request){
        //Guardar el registro
        $fruta = DB::table('frutas')->insert(array(
            'nombre'     => $request->input('nombre'),
            'descripcion'=> $request->input('descripcion'),
            'precio'     => $request->input('precio'),
            'fecha'      => date('Y-m-d')
        ));
        return redirect()->action('FrutaController@index')->with('status','Fruta creada correctamente :)!!');
    }

    public function delete($id){
        $fruta = DB::table('frutas')->where('id',$id)->delete();
        return redirect()->action('FrutaController@index')->with('status','Fruta eliminada correctamente :)!!');
    }

    public function edit($id){
        //Recuperamos de la BD el registro a actualizar
        $fruta = DB::table('frutas')->where('id',$id)->first();
        //Pasamos el registro a la vista
        return view('fruta.create',[
            'fruta' => $fruta
        ]);
    }

    public function update(Request $request){
        $id =$request->input('id');
        $fruta = DB::table('frutas')->where('id',$id)
                                    ->update(array(
                                    'nombre'     => $request->input('nombre'),
                                    'descripcion'=> $request->input('descripcion'),
                                    'precio'     => $request->input('precio')
                                   ));
        return redirect()->action('FrutaController@index')->with('status','Fruta actualizada correctamente :)!!');
    }
}

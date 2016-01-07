<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\clsRecuerdo;
use App\Http\Requests\recordRequest;

class recuerdoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*/recuerdo*/
    public function index()
    {
        $data = clsRecuerdo::all();
        return view('recuerdo.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recuerdo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(recordRequest $request)
    {
        /*
        FORMA 1 - 
        */
     /*   $data = clsRecuerdo::create([
                'titulo' => $request['titulo'],
                'contenido' => $request['contenido'],
               ]);
        dd($data);
*/

        /* FORMA 2 - */ 
      
        $data = clsRecuerdo::create($request->all());
        return redirect('recuerdo');
        /*dd($data);*/

        /* FORMA 3*/
        
        
        /*$data = new clsRecuerdo();*/
       /* $data->titulo = "asdasd";
        $data->contenido = "aasdsss";
        $data->save();*/

        /*$data->titulo = $request['titulo']; 
        $data->contenido = $request['contenido']; 
        $data->datos = $request['contenido']; 
        $data->save();
        dd($data);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = clsRecuerdo::find($id);
        if( is_null($data) ){
            dd("no existe blog con ese id : ".$id);
        }else{
            return view('recuerdo.show',compact('data'));            
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = clsRecuerdo::find($id);

        return view('recuerdo.editar',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = clsRecuerdo::find($id);
        $data->titulo = $request['titulo'];
        $data->contenido = $request['contenido'];
        $data->save();
        return redirect('recuerdo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = clsRecuerdo::find($id);
        $data->delete();
        return redirect('recuerdo');
    }
   /* php artisan make:controller nombreControlador
    php artisan make:model frutas -m <- creas modelo y la migracion

    carteta 
        database
            migrations 
                ....
                ....
                ....

    php artisan migrate <- creas tablas
*/
}

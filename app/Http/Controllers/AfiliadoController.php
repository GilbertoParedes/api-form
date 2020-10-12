<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\afiliados;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afiliados = afiliados::all();

        return response()->json($afiliados, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $dateTime = strtotime($request->fecha_nacimiento);
       
       $date = Carbon::parse($request->fecha_nacimiento)->format('d/m/y');

        if($data = $request->image_ine) {

            $decode = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));
            $info = @getimagesizefromstring($decode);
            $extn = image_type_to_extension($info[2]);

            if ($extn ==".png"){
                $fullName = md5(time().uniqid()).$extn;
                Storage::disk('public')->put('images/'.$fullName, $decode);
            }
        }

        $afiliado = [
            'name' => $request->name,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'sexo' => $request->sexo,
            'image_ine' => $fullName,
            'estado_civil' => $request->estado_civil,
            'fecha_nacimiento' => $date,
            'lugar_nacimiento' => $request->lugar_nacimiento,
            'estado_vivienda' => $request->estado_vivienda,
            'tiempo_viviendo' => $request->tiempo_viviendo,
            'calle' => $request->calle,
            'colonia' => $request->colonia,
            'dep_menores' => $request->dep_menores,
            'cant_menores' => $request->cant_menores,
            'dep_tercera_edad' => $request->dep_tercera_edad,
            'cant_mayores' => $request->cant_mayores,
            'vivienda_compartida' => $request->vivienda_compartida,
            'cant_viviendo' => $request->cant_viviendo,
            'celular' => $request->celular,
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
        ];
       
        afiliados::insert($afiliado);
        

        return response()->json('Afiliado agregado', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

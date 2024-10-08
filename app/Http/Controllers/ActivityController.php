<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Fechaprgramacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dato2["fecha"] = Fechaprgramacion::orderBy('fecha', 'asc')->get();

        return view('admin.createActividad', $dato2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRole('admin');
        $avtivity = $request->except('_token');
        $avtivity['created_at'] = Carbon::now(); // Cambié 'Created_at' a 'created_at' por convención
        Activity::insert($avtivity);

        return redirect('/cactivity')->with('Mensaje', 'Actividad Agregada con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {


        // $datos['activity'] = Activity::get();
        $datos['activity'] = DB::table('activities')
            ->join('fechaprgramacions', 'activities.id_fechaprogramacions', '=', 'fechaprgramacions.id')
            ->select('activities.*', 'fechaprgramacions.*', 'activities.descripcion as descripcion', 'fechaprgramacions.descripcion as fecha')

            ->get();
        // return ['datos' => $datos];
      
        return view('admin.listActivity', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $activity = DB::table('activities')
            ->join('fechaprgramacions', 'activities.id_fechaprogramacions', '=', 'fechaprgramacions.id')
            ->where('activities.id_activities', $id)
            ->select('activities.*', 'fechaprgramacions.*', 'activities.descripcion as actividad_desc')
            ->first();
        $dato2["fecha"] = Fechaprgramacion::orderBy('fecha', 'asc')->get();
        // return compact('activity');
        return view('admin.editActividad', compact('activity'), $dato2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film2 = request()->except(['_token', '_method']);
        $activity = Activity::where('id_activities', $id)->first();

        $activity->update($film2);

        return redirect('/eactivity/' . $id . '/edit')->with('Mensaje', 'Actividad Modificadas con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_activity)
    {
        $actividad = Activity::findOrFail($id_activity);
        Activity::destroy($id_activity);
        return redirect('/lactivity')->with('Mensaje', 'Actividad borrada con Exito');
    }


    public function api_listactivity($id)
    {
        $dir = Activity::where('id_fechaprogramacions', $id) // Filtra por la fecha 1 de noviembre de 2024
            ->orderBy('hora', 'asc')       // Ordena por la columna 'hora'
            ->get();
        return $dir;
    }
}

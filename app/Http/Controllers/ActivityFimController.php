<?php

namespace App\Http\Controllers;

use App\Activity_fim;
use App\Fechaprgramacion;
use App\Film;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityFimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dato['film'] = Film::orderBy('film_Titulo', 'asc')->get();
        $dato2["fecha"] = DB::table('fechaprgramacions')
            ->join('activities', 'fechaprgramacions.id', '=', 'activities.id_fechaprogramacions')  // Adjust the field names as necessary
            ->select('fechaprgramacions.descripcion as fecha', 'activities.*')  // Select the desired fields
            ->orderBy('fechaprgramacions.fecha', 'asc')
            ->get();


        // return $dato2;

        return view('admin.createPeliActividad', $dato, $dato2);
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
        $programacion = request()->except('_token');

        $programacion['created_at'] = Carbon::now(); // Cambié 'Created_at' a 'created_at' por convención

        Activity_fim::insert($programacion);
        return redirect('/cpeli_activity')->with('Mensaje', 'Film Agregado a la Actividad');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity_fim  $activity_fim
     * @return \Illuminate\Http\Response
     */
    public function show(Activity_fim $activity_fim)
    {
        $dato['datos'] = DB::table('fechaprgramacions')
            ->join('activities', 'fechaprgramacions.id', '=', 'activities.id_fechaprogramacions')
            ->join('activity_fims', 'activity_fims.id_activity', '=', 'activities.id_activities')
            ->join('films', 'films.id', '=', 'activity_fims.id_film')
            ->select(
                'fechaprgramacions.descripcion as fecha',
                'activities.hora',
                'activities.descripcion as actividad',
                'activities.provincia',
                'activity_fims.id_activity_fims',
                'films.film_Titulo'
            )
            ->orderBy('fechaprgramacions.fecha', 'ASC')
            ->orderBy('activities.hora', 'ASC') // Ordenar por hora después de ordenar por fecha
            ->get();

        //dd($dato['datos']);
        return view('admin.listPeliActividad', $dato);
        // listPeliActividad.blade
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity_fim  $activity_fim
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = DB::table('activity_fims')
            ->join('activities', 'activities.id_activities', '=', 'activity_fims.id_activity')  // Adjust the field names as necessary
            ->join('fechaprgramacions', 'fechaprgramacions.id', '=', 'activities.id_fechaprogramacions')  // Adjust the field names as necessary
            ->join('films', 'films.id', '=', 'activity_fims.id_film')  // Adjust the field names as necessary
            ->where('activity_fims.id_activity_fims', $id)
            ->select(
                'activity_fims.*',
                'fechaprgramacions.descripcion as fecha',
                'activities.hora as hora',
                'activities.descripcion',
                'activities.provincia',
                'activities.lugar',
                'films.id as id_film',
                'films.film_Titulo'
            )
            ->first();

        // return compact('activity');

        $dato['film'] = Film::orderBy('film_Titulo', 'asc')->get();
        $dato2["fecha"] = DB::table('fechaprgramacions')
            ->join('activities', 'fechaprgramacions.id', '=', 'activities.id_fechaprogramacions')  // Adjust the field names as necessary
            ->select('fechaprgramacions.descripcion as fecha', 'activities.*')  // Select the desired fields
            ->orderBy('fechaprgramacions.fecha', 'asc')
            ->get();

        return view('admin.editPeliActividad', [
            'activity' => $activity,  // Pasando la actividad
            'dato' => $dato,          // Pasando los films
            'dato2' => $dato2         // Pasando las fechas y actividades
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity_fim  $activity_fim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $id;
        $data = request()->except(['_token', '_method']);
        $activity = Activity_fim::where('id_activity_fims', $id)->first();
        $activity->update($data);

        // return $activity;
        return redirect('/lpeli_activity')->with('Mensaje','Peli modificada en Actividad con Exito');

        // return redirect('/epeli_activity/' . $id . '/edit')->with('Mensaje', 'Peli modificada en Actividad con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity_fim  $activity_fim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_peli_actividad)
    {
        $actividad=Activity_fim::findOrFail($id_peli_actividad);
        Activity_fim::destroy($id_peli_actividad);
        return redirect('/lpeli_activity')->with('Mensaje','Peli borrada de actividad con Exito');
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    public function api_listFilmForActivity($id_actividad)
    {

        $dato2 = DB::table('activity_fims')
            ->join('films', 'films.id', '=', 'activity_fims.id_film')  // Adjust the field names as necessary
            // ->select('fechaprgramacions.descripcion as fecha', 'activities.*')  // Select the desired fields
            ->where('activity_fims.id_activity', $id_actividad)
            ->orderBy('films.film_Titulo', 'asc')
            ->get();
        
        return $dato2;
    }



}

<?php

namespace App\Http\Controllers;

use App\Film;
use App\Noticia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Error\Notice;
use Intervention\Image\Facades\Image;


class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noticias(Noticia $noticia)
    {
        $datos['noticias'] = Noticia::orderBy('id', 'DESC')->get();
        $count['count'] = $noticia::count();
        return view('noticias', $datos, $count);
    }

    public function noticia(Noticia $noticia, $id)
    {
        //return

        $datos['noticia'] = Noticia::findOrFail($id);
        return view('noticia', $datos);
        return ($datos);
        $datos['noticias'] = Noticia::paginate(50);
        $count['count'] = $noticia::count();
        return view('noticia', $datos, $count);
    }

    public function index() {}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createNotice');
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
        $usuario = $request->except('_token');

        if ($request->file('Not_imagen')) {
            // Procesar la imagen usando Intervention Image
            $image = $request->file('Not_imagen');
            $imagePath = 'uploads/' . time() . '.' . $image->getClientOriginalExtension();

            // Redimensionar la imagen sin mantener la proporción, exactamente a 800x600
            $img = Image::make($image->getRealPath());

            // Ajustar la imagen a las dimensiones exactas (800x600), incluso si hay distorsión
            // $img->fit(800, 900);  // Esto recorta si es necesario y ajusta a la dimensión exacta

            // Guardar la imagen comprimida
            $img->save(public_path('storage/' . $imagePath), 75); // 75 es la calidad (en %)

            // Guardar la ruta en el array $usuario
            $usuario['Not_imagen'] = $imagePath;
        }
        if ($request->file('Not_imagen2')) {
            // Procesar la imagen usando Intervention Image
            $image = $request->file('Not_imagen2');
            $imagePath = 'uploads/' . time() . '.' . $image->getClientOriginalExtension();

            // Redimensionar la imagen sin mantener la proporción, exactamente a 800x600
            $img = Image::make($image->getRealPath());

            // Ajustar la imagen a las dimensiones exactas (800x600), incluso si hay distorsión
            // $img->fit(800, 900);  // Esto recorta si es necesario y ajusta a la dimensión exacta

            // Guardar la imagen comprimida
            $img->save(public_path('storage/' . $imagePath), 75); // 75 es la calidad (en %)

            // Guardar la ruta en el array $usuario
            $usuario['Not_imagen2'] = $imagePath;
        }

        $usuario['created_at'] = Carbon::now(); // Cambié 'Created_at' a 'created_at' por convención
        Noticia::insert($usuario);

        return redirect('/cnoticia')->with('Mensaje', 'Noticia Agregada con Éxito');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        $datos['notice'] = Noticia::paginate(50);
        return view('admin.listNotice', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia, $id)
    {
        $noti = Noticia::findOrFail($id);
        $noti['noticia'] = Noticia::findOrFail($id);
        //return($noti);
        return view('admin.editNotice', compact('noti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request;
        $noti2 = request()->except(['_token', '_method']);

        $noti = Noticia::findOrFail($id);
        if ($request->file('Not_imagen')) {
            Storage::delete('public/' . $noti->Not_imagen);
            $noti2['Not_imagen'] = $request->file('Not_imagen')->store('uploads', 'public');
        }
        if ($request->file('Not_imagen2')) {
            Storage::delete('public/' . $noti->Not_imagen);
            $noti2['Not_imagen2'] = $request->file('Not_imagen2')->store('uploads', 'public');
        }

        $noti->update($noti2);

        return redirect('/editnotice/' . $id . '/edit')->with('Mensaje', 'Noticia Modificadas con Éxito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia, $id)
    {
        $noti = Noticia::findOrFail($id);
        if (Storage::delete('public/' . $noti->Not_imagen)) {
            Noticia::destroy($id);
        }
        Noticia::destroy($id);


        return redirect('/listnotice')->with('Mensaje', 'Noticia eliminada con Éxito');
    }

    public function noticiaKuntur()
    {
        return view('noticiaKunturGanador');
    }


    //////////////////////////////////////API///////////////////////////////////////

    public function api_listar_noticias()
    {
        $datos['noticias'] = Noticia::orderBy('id', 'DESC')->get();
        // $count['count']=$noticia::count();
        return ($datos['noticias']);
    }
    
    public function api_news_by_id(Noticia $noticia, $id)
    {
        $noti = Noticia::findOrFail($id);
        $noti['noticia'] = Noticia::findOrFail($id);
        return($noti);
    }

}

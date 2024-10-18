<?php

namespace App\Http\Controllers;

use App\galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['film'] = galeria::get();
        //$count['count']=$film::count();

        return view('galeria', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createGallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $urlimages = []; // Inicializar el array para almacenar las rutas de las imágenes

        // Verificar si se han subido archivos
        if ($request->hasFile('Foto')) {
            $imagenes = $request->file('Foto'); // Obtener todas las imágenes enviadas

            foreach ($imagenes as $imagen) {
                if ($imagen) {
                    // Procesar la imagen usando Intervention Image
                    $imagePath = 'uploads/' . time() . '_' . $imagen->getClientOriginalName(); // Nombre único de la imagen con el tiempo

                    // Redimensionar la imagen a 800x600
                    $img = Image::make($imagen->getRealPath());

                    // Guardar la imagen redimensionada en la carpeta 'storage/uploads' con calidad 75%
                    $img->save(public_path('storage/' . $imagePath), 75); // Guardar con 75% de calidad

                    // Guardar la ruta en el array $urlimages
                    $urlimages[] = [
                        'Foto' => $imagePath
                    ];
                }
            }

            // Insertar todas las imágenes en la base de datos
            galeria::insert($urlimages);
        }

        // Obtener los datos paginados para la galería
        $datos['film'] = galeria::paginate(20);

        return view('admin.listGallery', $datos);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(galeria $galeria)
    {
        $datos['film'] = galeria::paginate(20);
        //$count['count']=$film::count();

        return view('admin.listGallery', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return ('destroy;');
        $film = galeria::findOrFail($id);
        if (Storage::delete('img/galeria/' . $film->Foto)) {
            galeria::destroy($id);
        }
        galeria::destroy($id);


        return redirect('/lgallery')->with('Mensaje', 'Foto eliminada con Éxito');
    }


    ///////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////

    public function api_show(galeria $galeria)
    {
        $datos = galeria::orderBy('id', 'DESC')->get();

        //$count['count']=$film::count();

        return ($datos);
    }
}

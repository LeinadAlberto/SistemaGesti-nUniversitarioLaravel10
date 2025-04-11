<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use App\Models\Matriculacion;
use App\Models\Estudiante;
use App\Models\Gestion;
use App\Models\Nivel;
use App\Models\Periodo;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Turno;
use App\Models\Paralelo;
use App\Models\AsignacionMateria;

use Barryvdh\DomPDF\Facade\Pdf;

use Milon\Barcode\Facades\DNS1DFacade as DNS1D;
use Milon\Barcode\Facades\DNS2DFacade as DNS2D;

use Illuminate\Http\Request;

class MatriculacionController extends Controller
{
    public function index()
    {
        $matriculaciones = Matriculacion::with("estudiante", "gestion", "nivel", "periodo", "carrera")->get();

        $materias = Materia::all();

        $turnos = Turno::all();

        $paralelos = Paralelo::all();

        $asignacionMaterias = AsignacionMateria::with("materia", "turno", "paralelo")->get();

        /* return response()->json($matriculaciones); */

        return view("admin.matriculaciones.index", compact("matriculaciones", 
                                                            "materias", 
                                                            "turnos", 
                                                            "paralelos", 
                                                            "asignacionMaterias"));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        $gestiones = Gestion::all();
        $niveles = Nivel::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();

        return view("admin.matriculaciones.create", compact("estudiantes", "gestiones", "niveles", "periodos", "carreras"));
    }

    public function buscar_estudiante($id) 
    {
        $estudiante = Estudiante::with("usuario", "matriculaciones.gestion", "matriculaciones.nivel", "matriculaciones.periodo", "matriculaciones.carrera")->find($id);

        if (!$estudiante) {
            return response()->json(["error" => "Estudiante no encontrado"]);
        }

        $estudiante->foto_url = url($estudiante->foto);

        return response()->json($estudiante);
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos);  */

        $request->validate([
            "estudiante_id" => "required",
            "gestion_id" => "required",
            "nivel_id" => "required",
            "periodo_id" => "required",
            "carrera_id" => "required"
        ]);

        $matriculacion = new Matriculacion();

        $matriculacion->estudiante_id = $request->estudiante_id;
        $matriculacion->gestion_id = $request->gestion_id;
        $matriculacion->nivel_id = $request->nivel_id;
        $matriculacion->periodo_id = $request->periodo_id;
        $matriculacion->carrera_id = $request->carrera_id;
        $matriculacion->fecha_matriculacion = now();

        $matriculacion->save();

        return redirect()->route("admin.matriculacion.index")
            ->with("mensaje", "Matriculación creada correctamente")
            ->with("icono", "success");
    }

    public function pdf_matricula($id) 
    {
        $configuracion = Configuracion::first();

        $matricula = Matriculacion::with("estudiante", "gestion", "nivel", "periodo", "carrera")->find($id);

        $asignacionMaterias = AsignacionMateria::with("materia", "turno", "paralelo")
            ->where("matriculacion_id", $matricula->id)->get();

        $barcodePNG = "data:image/png;base64," . DNS1D::getBarcodePNG($matricula->estudiante->ci, "C128", 1, 33);

        $pdf = PDF::loadView("admin.matriculaciones.pdf_matricula", compact("configuracion", "matricula", "barcodePNG", "asignacionMaterias"));
        
        $pdf->setPaper("letter", "portrait"); // Tamaño de papel Carta(A4), orientación vertical.
        $pdf->setOptions(["defaultFont" => "sans-serif"]); // Define fuente por defecto de tipo sans-serif
        $pdf->setOptions(["isHtml5ParserEnabled" => true]);
        $pdf->setOptions(["isRemoteEnabled" => true]);

        return $pdf->stream("matriculas.pdf", [
            "Attachment" => false 
        ]);
    }

    public function show(Matriculacion $matriculacion)
    {
        
    }

    public function edit(Matriculacion $matriculacion)
    {
        
    }

    public function update(Request $request, Matriculacion $matriculacion)
    {
        
    }

    public function destroy(Matriculacion $matriculacion)
    {
        
    }
}

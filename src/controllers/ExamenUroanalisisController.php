<?php

use \Illuminate\Routing\Controller;
use Jy\Consulta\Repo\ConsultaInterface;
use Jy\ExamenUroanalisis\Repo\ExamenUroanalisisInterface;

class ExamenUroanalisisController extends Controller {

    protected $examen_uroanalisis;
    protected $consulta;

    public function __construct(ConsultaInterface $consulta, ExamenUroanalisisInterface $examen_uroanalisis)
    {
        $this->consulta = $consulta;
        $this->examen_uroanalisis = $examen_uroanalisis;
    }

    public function index()
    {
        $consulta_activa = $this->consulta->obtenerConsultaActiva();
        if (!is_null($consulta_activa))
        {
            $examen_uroanalisis = $this->examen_uroanalisis->get($consulta_activa->id);

            if (!$examen_uroanalisis)
            {
                $paciente = $consulta_activa->paciente;
                $consultas = $paciente->consultas()->lists('id');
                $examen_uroanalisis = $this->examen_uroanalisis->getLast($consultas);
            }

            $formulario = [
                'empresa' => $consulta_activa->empresa,
                'sede' => $consulta_activa->sede,
                'paciente' => $consulta_activa->paciente,
                'consulta' => $consulta_activa,
                'examen_uroanalisis' => $examen_uroanalisis,
                'status' => Session::get('status')
            ];

            $datos = [
                'seccion' => Config::get('examen-uroanalisis::seccion_examen_uroanalisis'),
                'formulario' => View::make(Config::get('examen-uroanalisis::formulario'), $formulario)
            ];

            return View::make(Config::get('examen-uroanalisis::vista_formulario'), $datos);
        } else {

            return Redirect::to('error/C01/'.Config::get('examen-uroanalisis::seccion_examen_uroanalisis'));
        }
    }

    public function store()
    {
        $resultado = $this->examen_uroanalisis->store(Input::all());
        if ($resultado)
        {
            $this->consulta->updateHistoria(Input::get('id_consulta'), Config::get('examen-uroanalisis::seccion_examen_uroanalisis'));
            return Redirect::to(Config::get('examen-uroanalisis::prefijo_ruta'))
                            ->with('status', 'success');
        } else {
            return Redirect::to(Config::get('examen-uroanalisis::prefijo_ruta'))
                            ->withInput()
                            ->withErrors($this->examen_uroanalisis->errors())
                            ->with('status', 'error');
        }
    }

    public function update()
    {
        $resultado = $this->examen_uroanalisis->update(Input::all());
        
        if($resultado)
        {       
            return Redirect::to(Config::get('examen-uroanalisis::prefijo_ruta'))
                            ->with('status', 'success');
        } else {
            return Redirect::to(Config::get('examen-uroanalisis::prefijo_ruta'))
                            ->withInput()
                            ->withErrors( $this->examen_uroanalisis->errors() )
                            ->with('status', 'error');
        }
    }

    public function historialExamenUroanalisis()
    {
        $historiales = $this->consulta->historiales(Input::get('id_paciente'), Input::get('fecha_i', null), Input::get('fecha_f', null));

        $examen_uroanalisis = [];

        foreach ($historiales as $historial) 
        {
            if (count($historial->examenUroanalisis))
                array_push($examen_uroanalisis, $historial);
        }

        return Response::json($examen_uroanalisis);
    }

    public function getHistorialExamenUroanalisis()
    {
        $historial = $this->consulta->get(Input::get('id'));
        $datos = [
            'historial' => $historial,
            'examen_uroanalisis' => $historial->examenUroanalisis
        ];

        return View::make(Config::get('examen-uroanalisis::historial_examen_uroanalisis'), $datos)
                    ->render();
    }

}
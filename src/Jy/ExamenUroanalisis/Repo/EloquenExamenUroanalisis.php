<?php

namespace Jy\ExamenUroanalisis\Repo;


use Jy\Consulta\Repo\ConsultaInterface;
use Jy\ExamenUroanalisis\Repo\ExamenUroanalisisInterface;

class EloquentExamenUroanalisis implements ExamenUroanalisisInterface {

    private $app;
    private $errors;
    private $consulta;

    public function __construct($app = null, ConsultaInterface $consulta)
    {
        $this->app = $app ?: app();
        $this->consulta = $consulta;
    }

    public function model($model)
    {
        $this->model = $this->app['config']->get('examen-uroanalisis::'.$model);

        if ($this->model)
            return $this->app[$this->model];

        throw new \Exception("No se encuentra el modelo especificado (".$model.") en jy/examen-uroanalisis/config/config.php", 639);
    }

    public function store(array $input)
    {
        $model = $this->model(self::MODELO);
        $examen_uroanalisis = $model->newInstance([]);
        return $this->save($examen_uroanalisis, $input);
    }

    public function update(array $input)
    {
        $examen_uroanalisis = $this->get($input['id_consulta']);
        return $this->save($examen_uroanalisis, $input);
    }

    public function get($id_consulta)
    {
        $model = $this->model(self::MODELO);
        return $model->where('id_consulta', '=', $id_consulta)->first();
    }

    public function getLast($consultas)
    {
        $model = $this->model(self::MODELO);
        return $model->whereIn('id_consulta', $consultas)
                    ->orderBy('id', 'desc')
                    ->first();
    }

    public function save($examen_uroanalisis, $input)
    {

        $examen_uroanalisis->color = $input['color'];
        $examen_uroanalisis->aspecto = $input['aspecto'];
        $examen_uroanalisis->densidad_urinaria = $input['densidad_urinaria'];
        $examen_uroanalisis->ph = $input['ph'];
        $examen_uroanalisis->leucocitos = $input['leucocitos'];
        $examen_uroanalisis->proteinas = $input['proteinas'];
        $examen_uroanalisis->nitritos = $input['nitritos'];
        $examen_uroanalisis->glucosa = $input['glucosa'];
        $examen_uroanalisis->cuerpos_cetonicos = $input['cuerpos_cetonicos'];
        $examen_uroanalisis->urobilinogeno = $input['urobilinogeno'];
        $examen_uroanalisis->bilirrubinas = $input['bilirrubinas'];
        $examen_uroanalisis->sangre = $input['sangre'];
        $examen_uroanalisis->leucocitos_sedimento = $input['leucocitos_sedimento'];
        $examen_uroanalisis->bacterias = $input['bacterias'];
        $examen_uroanalisis->celulas_epiteliales = $input['celulas_epiteliales'];
        $examen_uroanalisis->hematies = $input['hematies'];
        $examen_uroanalisis->moco = $input['moco'];


        if ($examen_uroanalisis->validate())
        {
            $examen_uroanalisis->save();
            return $examen_uroanalisis;
        } else {
            $this->errors = $examen_uroanalisis->errors();
            return false;
        }
    }

    public function errors()
    {
        return $this->errors;
    }
}
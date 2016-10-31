<?php 

namespace Jy\ExamenUroanalisis\Repo;

use Illuminate\Support\Facades\Config;

trait TraitExamenUroanalisisConsulta {
	
    public function examenUroanalisis()
    {
        return $this->hasOne(Config::get('examen-uroanalisis::modelo'), 'id_consulta');
    }
}
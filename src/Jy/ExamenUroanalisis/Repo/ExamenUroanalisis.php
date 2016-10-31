<?php 

namespace Jy\ExamenUroanalisis\Repo;

use LaravelBook\Ardent\Ardent;
use Illuminate\Support\Facades\Config;

class ExamenUroanalisis extends Ardent {

    public static $rules = [
        'id_consulta' => 'required',
    ];
    
    protected $table = 'examen_uroanalisis';
    protected $primaryKey = 'id';
    protected $fillable = ['id_consulta','color','aspecto','densidad_urinaria','ph','leucocitos','proteinas','nitritos','glucosa','cuerpos_cetonicos','urobilinogeno','bilirrubinas','sangre','leucocitos_sedimento','bacterias','celulas_epiteliales','hematies','moco'];
    protected $activo = false;

    public function consulta()
    {
        return $this->belongsTo(Config::get('examen-uroanalisis::modelo_consulta'), 'id_consulta');
    }
}



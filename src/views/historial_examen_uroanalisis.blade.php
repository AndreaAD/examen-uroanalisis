<div class="row">
    <div class="col-xs-12 form-group">
          <label>{{ Lang::get('app.label.fecha').'/'.Lang::get('app.label.hora') }}</label>
          <p class="form-control-static"> 
               Fecha: {{ $historial['created_at'] }}
          </p>
    </div>
    <div class="col-xs-12">
        <div class="row">
            @if ($examen_uroanalisis['color'] != "")
                <div class="col-xs-12 form-group">
                    <label for="color">{{ Lang::get('app.label.color') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['color'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['aspecto'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="aspecto">{{ Lang::get('app.label.aspecto') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['aspecto'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['densidad_urinaria'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="densidad_urinaria">{{ Lang::get('app.label.densidad_urinaria') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['densidad_urinaria'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['ph'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="ph">{{ Lang::get('app.label.ph') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['ph'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['leucocitos'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="leucocitos">{{ Lang::get('app.label.leucocitos') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['leucocitos'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['proteinas'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="proteinas">{{ Lang::get('app.label.proteinas') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['proteinas'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['nitritos'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="nitritos">{{ Lang::get('app.label.nitritos') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['nitritos'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['glucosa'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="glucosa">{{ Lang::get('app.label.glucosa') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['glucosa'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['cuerpos_cetonicos'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="cuerpos_cetonicos">{{ Lang::get('app.label.cuerpos_cetonicos') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['cuerpos_cetonicos'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['urobilinogeno'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="urobilinogeno">{{ Lang::get('app.label.urobilinogeno') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['urobilinogeno'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['bilirrubinas'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="bilirrubinas">{{ Lang::get('app.label.bilirrubinas') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['bilirrubinas'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['sangre'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="sangre">{{ Lang::get('app.label.sangre') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['sangre'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['leucocitos_sedimento'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="leucocitos_sedimento">{{ Lang::get('app.label.leucocitos_sedimento') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['leucocitos_sedimento'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['bacterias'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="bacterias">{{ Lang::get('app.label.bacterias') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['bacterias'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['celulas_epiteliales'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="celulas_epiteliales">{{ Lang::get('app.label.celulas_epiteliales') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['celulas_epiteliales'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['hematies'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="hematies">{{ Lang::get('app.label.hematies') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['hematies'] }}</p>
                </div>
            @endif
            @if ($examen_uroanalisis['moco'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="moco">{{ Lang::get('app.label.moco') }}</label>
                    <p class="form-control-static">{{ $examen_uroanalisis['moco'] }}</p>
                </div>
            @endif
        </div>
    </div>
</div>
<div class="row cyan">
    <div class="col-xs-12">
        <h1>{{ Lang::get('app.examen_uroanalisis.titulo') }}</h1>
    </div>
</div>
<div class="contenido">
    <div class="row">
        <div class="col-xs-12">
            <h3><i class="fa fa-file-o"></i> {{ Lang::get('app.examen_uroanalisis.sub-titulo') }}</h3>
            <p class="text-muted">{{ Lang::get('app.examen_uroanalisis.mensaje.formulario') }}<br><br></p>
        </div>
    </div>
    @if ($status == 'error')
        @include('includes.msgerror')
    @elseif ( $status == 'success' )
        @include('includes.msgok')
    @endif
    {{ Form::open(['url' => Config::get('examen-uroanalisis::prefijo_ruta').'/', 'method' => (!$examen_uroanalisis || $examen_uroanalisis['id_consulta'] != $consulta['id']? 'post' : 'put')]) }}
        <fieldset>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="list-group">
                        <li class="list-group-item" >
                            @include('includes.paciente_consulta')
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="color">{{ Lang::get('app.label.color') }}</label>
                                    {{ Form::text('color', $examen_uroanalisis ? $examen_uroanalisis['color'] : Input::old('color'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="aspecto">{{ Lang::get('app.label.aspecto') }}</label>
                                    {{ Form::text('aspecto', $examen_uroanalisis ? $examen_uroanalisis['aspecto'] : Input::old('aspecto'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="densidad_urinaria">{{ Lang::get('app.label.densidad_urinaria') }}</label>
                                    {{ Form::text('densidad_urinaria', $examen_uroanalisis ? $examen_uroanalisis['densidad_urinaria'] : Input::old('densidad_urinaria'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="ph">{{ Lang::get('app.label.ph') }}</label>
                                    {{ Form::text('ph', $examen_uroanalisis ? $examen_uroanalisis['ph'] : Input::old('ph'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="leucocitos">{{ Lang::get('app.label.leucocitos') }}</label>
                                    {{ Form::text('leucocitos', $examen_uroanalisis ? $examen_uroanalisis['leucocitos'] : Input::old('leucocitos'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="proteinas">{{ Lang::get('app.label.proteinas') }}</label>
                                    {{ Form::text('proteinas', $examen_uroanalisis ? $examen_uroanalisis['proteinas'] : Input::old('proteinas'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="nitritos">{{ Lang::get('app.label.nitritos') }}</label>
                                    {{ Form::text('nitritos', $examen_uroanalisis ? $examen_uroanalisis['nitritos'] : Input::old('nitritos'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="glucosa">{{ Lang::get('app.label.glucosa') }}</label>
                                    {{ Form::text('glucosa', $examen_uroanalisis ? $examen_uroanalisis['glucosa'] : Input::old('glucosa'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="cuerpos_cetonicos">{{ Lang::get('app.label.cuerpos_cetonicos') }}</label>
                                    {{ Form::text('cuerpos_cetonicos', $examen_uroanalisis ? $examen_uroanalisis['cuerpos_cetonicos'] : Input::old('cuerpos_cetonicos'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="urobilinogeno">{{ Lang::get('app.label.urobilinogeno') }}</label>
                                    {{ Form::text('urobilinogeno', $examen_uroanalisis ? $examen_uroanalisis['urobilinogeno'] : Input::old('urobilinogeno'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="bilirrubinas">{{ Lang::get('app.label.bilirrubinas') }}</label>
                                    {{ Form::text('bilirrubinas', $examen_uroanalisis ? $examen_uroanalisis['bilirrubinas'] : Input::old('bilirrubinas'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="sangre">{{ Lang::get('app.label.sangre') }}</label>
                                    {{ Form::text('sangre', $examen_uroanalisis ? $examen_uroanalisis['sangre'] : Input::old('sangre'), array('class' => 'form-control')) }}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h6>{{ Lang::get('app.label.sedimento_urinario') }}</h6>
                                </div> 
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="leucocitos_sedimento">{{ Lang::get('app.label.leucocitos_sedimento') }}</label>
                                    {{ Form::text('leucocitos_sedimento', $examen_uroanalisis ? $examen_uroanalisis['leucocitos_sedimento'] : Input::old('leucocitos_sedimento'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="bacterias">{{ Lang::get('app.label.bacterias') }}</label>
                                    {{ Form::text('bacterias', $examen_uroanalisis ? $examen_uroanalisis['bacterias'] : Input::old('bacterias'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="celulas_epiteliales">{{ Lang::get('app.label.celulas_epiteliales') }}</label>
                                    {{ Form::text('celulas_epiteliales', $examen_uroanalisis ? $examen_uroanalisis['celulas_epiteliales'] : Input::old('celulas_epiteliales'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="hematies">{{ Lang::get('app.label.hematies') }}</label>
                                    {{ Form::text('hematies', $examen_uroanalisis ? $examen_uroanalisis['hematies'] : Input::old('hematies'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="moco">{{ Lang::get('app.label.moco') }}</label>
                                    {{ Form::text('moco', $examen_uroanalisis ? $examen_uroanalisis['moco'] : Input::old('moco'), array('class' => 'form-control')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::hidden('historial', true, ['data-url' => URL::to('historial/examen_uroanalisis'), 'data-id' => $consulta['id_paciente']]) }}
                {{ Form::hidden('id', $examen_uroanalisis ? $examen_uroanalisis['id'] : '0', array()) }}
                {{ Form::hidden('id_consulta', $consulta ? $consulta['id'] : '0', array()) }}
                <div class="col-xs-12">
                    <hr>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary">{{ Lang::get('app.interface.guardar') }}</button>
                    <a href="{{URL::to(Config::get('examen-uroanalisis::prefijo_ruta').'/')}}" class="btn btn-default back">{{ Lang::get('app.interface.volver') }}</a>
                </div>
            </div>
        </fieldset>
    {{ Form::close() }}
</div>

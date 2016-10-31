<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearModuloUroanalisis extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('examen_uroanalisis', function($table){
            $table->bigIncrements('id');
            $table->bigInteger('id_consulta')->unsigned();
            $table->string('color')->nullable();
            $table->string('aspecto')->nullable();
            $table->string('densidad_urinaria')->nullable();
            $table->string('ph')->nullable();
            $table->string('leucocitos')->nullable();
            $table->string('proteinas')->nullable();
            $table->string('nitritos')->nullable();
            $table->string('glucosa')->nullable();
            $table->string('cuerpos_cetonicos')->nullable();
            $table->string('urobilinogeno')->nullable();
            $table->string('bilirrubinas')->nullable();
            $table->string('sangre')->nullable();
            $table->string('leucocitos_sedimento')->nullable();
            $table->string('bacterias')->nullable();
            $table->string('celulas_epiteliales')->nullable();
            $table->string('hematies')->nullable();
            $table->string('moco')->nullable();

            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });

        if (Schema::hasTable('consultas'))
        {
            Schema::table('examen_uroanalisis', function($table){
                $table->foreign('id_consulta')->references('id')->on('consultas')->onDelete('cascade');
            });

        }

        if (Schema::hasTable('permissions') && Schema::hasTable('modulos'))
        {
            $id_modulo = DB::table('modulos')->insertGetId(
                ['nombre' => 'Examen Uroanalisis', 'icono' => 'fa-folder-o', 'descripcion' => 'Paquete para gestionar el examen de uroanalisis de sus pacientes', 'predeterminado' => 0, 'valor'  => 5000]
            );

            DB::table('permissions')->insert([
                ['name' => 'gestionar_examen_uroanalisis', 'display_name' => 'Examen Uroanalisis', 'id_modulo' => $id_modulo]
            ]);
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if (Schema::hasTable('permissions') && Schema::hasTable('modulos'))
        {
            DB::table('permissions')->where('name', '=', 'gestionar_examen_uroanalisis')->delete();
            DB::table('modulos')->where('nombre', '=', 'Examen Uroanalisis')->delete();
        }

        if (Schema::hasTable('consultas'))
        {
	        Schema::table('examen_uroanalisis', function(Blueprint $table){
	            $table->dropForeign('examen_uroanalisis_id_consulta_foreign');
	        });

        }

        Schema::drop('examen_uroanalisis');
	}

}

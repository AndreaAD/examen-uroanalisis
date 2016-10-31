<?php namespace Jy\ExamenUroanalisis;

use Illuminate\Support\ServiceProvider;
use Jy\ExamenUroanalisis\Repo\EloquentExamenUroanalisis;
use Jy\Consulta\Repo\EloquentConsulta;

class ExamenUroanalisisServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jy/examen-uroanalisis');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Jy\ExamenUroanalisis\Repo\ExamenUroanalisisInterface', function($app){
			return new EloquentExamenUroanalisis(
		 		$app,
		 		$app->make('Jy\Consulta\Repo\ConsultaInterface')
		 	);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}

<?php
/*
 * This file is part of the Forms package.
 *
 * (c) David Wright <dave@ritey.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Forms;

use Illuminate\Support\ServiceProvider;

class FormsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

   	/**
	* Bootstrap the app events.
	*
	* @return void
	*/
	public function boot()
	{

	}

	/**
	* Register the service provider.
	*
	* @return void
	*/
	public function register()
	{
		$this->app->singleton( 'forms', function ($app) {
			$instance = new Forms();
			return $instance;
		});
	}
}
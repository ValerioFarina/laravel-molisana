<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $footer = [
            'contacts' => [
                'Ragione sociale: La Molisana S.P.A.',
                'Sede Legale: Contrada Colle delle Api, 100/A',
                '86100 - Campobasso (CB)',
                'Pec: lamolisana@pec.it',
                'Tel: +39 0874 4981',
                'Fax: +39 0874 629584',
                'info@lamolisana.it (per segnalazioni degli utenti)',
                'commerciale@lamolisana.it',
                'export@lamolisana.it',
                'numero verde 800818081',
                'telefono 3801292455'
            ]
        ];

        view()->share('footer', $footer);
    }
}

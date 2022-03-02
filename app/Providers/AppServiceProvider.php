<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Psr\Http\Message\ServerRequestInterface;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(ServerRequestInterface $request)
    {
        $this->bindings($request);
    }

    public function bindings(ServerRequestInterface $request)
    {
        $this->app->bind('App\Interfaces\TransactionInterface', function () use ($request) {
            if ($request->getQueryParams()['source'] === 'db') {
                return (new TransactionDatabaseProvider(app()));
            }

            if ($request->getQueryParams()['source'] === 'csv') {
                return (new TransactionCsvProvider(app()));
            }
        });
    }
}

<?php

namespace App\Providers;

use App\Interfaces\TransactionInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;
use Response;
use \InfyOm\Generator\Utils\ResponseUtil;

class TransactionDatabaseProvider extends ServiceProvider implements TransactionInterface
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Display a listing of the Transaction.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function getAllTransactions()
    {
        return ResponseUtil::makeResponse("OK, results from database for you", (new TransactionRepository(app()))->all());
    }
}

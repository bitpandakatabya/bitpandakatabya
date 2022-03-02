<?php

namespace App\Providers;

use App\Interfaces\TransactionInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use League\Csv\Reader;
use Response;
use \InfyOm\Generator\Utils\ResponseUtil;


class TransactionCsvProvider extends ServiceProvider implements TransactionInterface
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
        $csv = Reader::createFromPath(\resource_path('transactions.csv'), 'r');
        $csv->setHeaderOffset(0);

        return ResponseUtil::makeResponse("OK, results from CSV for you", json_decode(json_encode($csv)));
    }
}

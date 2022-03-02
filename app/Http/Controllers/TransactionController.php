<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Interfaces\TransactionInterface;
use Psr\Http\Message\ServerRequestInterface;

class TransactionController extends AppBaseController
{

    public function service(TransactionInterface $transactionInterface, ServerRequestInterface $request = null)
    {

        return $transactionInterface->getAllTransactions(request());
    }
}

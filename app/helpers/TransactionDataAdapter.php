<?php

namespace App\helpers;

class TransactionDataAdapter
{
    public function __construct(public string $payment_system, public int $user_id, public string $status) {}
}

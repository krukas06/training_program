<?php
namespace App\Repositories;
use App\Order;
class OrdersRepository extends Repository
{
    public function __construct(Order $orders){
        $this->model=$orders;
    }
}

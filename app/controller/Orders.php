<?php

class Orders extends Base {

    public function __construct() {
        $this->orderModel = $this->model('order');
    }

    public function index() {
        $orders = $this->orderModel->getOrders();

        $this->view('orders/index', $orders);
    }
}
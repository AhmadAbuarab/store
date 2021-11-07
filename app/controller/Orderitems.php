<?php

class Orderitems extends Base {

    public function __construct() {
        $this->orderItemModel = $this->model('orderitem');
    }

    public function index() {
        $ordersitems = $this->orderItemModel->getOrderItems();

        $this->view('orderitems/index', $ordersitems);
    }
}
<?php

class Home extends Base {

    public function __construct() {
        $this->orderModel = $this->model('order');
        $this->orderItemModel = $this->model('orderitem');
        $this->customerModel = $this->model('customer');
    }

    public function index() {

        $orders = $this->orderModel->getTotal();
        $ordersItem = $this->orderItemModel->getTotal();
        $customers = $this->customerModel->getTotal();

        $dataArray = array(
            'order' => $orders,
            'order_item' => $ordersItem,
            'customer' => $customers,
            'test' => 'ahmad'
        );

        $this->view('home/index', $dataArray);
    }

    public function ajax() {
        $order_statistics = $this->orderModel->getStatstics();
        $customer_statistics = $this->customerModel->getStatstics();

        echo json_encode(array($order_statistics, $customer_statistics));
    }
}
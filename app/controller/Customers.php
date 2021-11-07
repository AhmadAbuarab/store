<?php

class Customers extends Base {

    public function __construct() {

        $this->customerModel = $this->model('customer');
    }

    public function index() {
        $customers = $this->customerModel->getCustomers();

        $this->view('customers/index', $customers);
    }
}
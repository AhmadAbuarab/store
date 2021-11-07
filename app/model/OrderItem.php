<?php

use Store\CoreModel\Model;

class OrderItem implements Model{

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getOrderItems() {

        $from = $_GET['date_from'];
        $to = $_GET['date_to'];

        $this->db->query(" SELECT * FROM order_items ");
        $result = $this->db->resultSet();

        return $result;
    }


    public function getTotal() {
        $this->db->query('SELECT sum(order_items.price) as revenue 
                          FROM orders 
                          JOIN order_items on (orders.order_item_id = order_items.id)'
        );
        $result = $this->db->resultSet();

        return $result;
    }
}
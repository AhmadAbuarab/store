<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use Store\CoreModel\Model;
class Order implements Model {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTotal() {
        $this->db->query('SELECT count(id) AS order_count FROM orders');
        $result = $this->db->resultSet();

        return $result;
    }

    public function getOrders() {

        $selected_date = 'WHERE YEAR(orders.purchase_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
                          AND MONTH(orders.purchase_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)';

        if(isset($_GET['date_from']) && $_GET['date_to']) {
            $from = $_GET['date_from'];
            $to = $_GET['date_to'];
            $selected_date = "WHERE (orders.purchase_date BETWEEN '$from' AND '$to')";
        }

        $this->db->query("SELECT 
                          CONCAT(customers.first_name , ' ', customers.last_name )as customer, order_items.ean, orders.purchase_date, orders.country, orders.device
                          FROM orders JOIN order_items on (orders.order_item_id = order_items.id)
                          JOIN customers on (orders.cutomer_id = customers.id)
                          $selected_date");
        $result = $this->db->resultSet();

        return $result;
    }

    public function getStatstics() {

        $this->db->query('SELECT count(id) as orders, MONTHNAME(purchase_date) as month, dayofmonth(purchase_date) as day
                          FROM orders
                          GROUP  BY  MONTHNAME(purchase_date), dayofmonth(purchase_date)');

        $result = $this->db->resultSet();

        return $result;
    }
}
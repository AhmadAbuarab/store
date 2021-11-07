<?php

use Store\CoreModel\Model;
class Customer implements Model {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTotal() {
        $this->db->query('SELECT count(id) as total_customers 
                          FROM customers');
        $result = $this->db->resultSet();

        return $result;
    }

    public function getCustomers() {

        $selected_date = 'WHERE YEAR(customers.reg_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
                          AND MONTH(customers.reg_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)';

        if(isset($_GET['date_from']) && $_GET['date_to']) {
            $from = $_GET['date_from'];
            $to = $_GET['date_to'];

            $selected_date = "WHERE (customers.reg_date BETWEEN '$from' AND '$to')";
        }

        $this->db->query("SELECT 
                          * FROM customers
                          $selected_date");
        $result = $this->db->resultSet();

        return $result;
    }

    public function getStatstics() {
        $this->db->query('SELECT count(id) as customers, MONTHNAME(reg_date) as month, dayofmonth(reg_date) as day
                          FROM customers
                          GROUP  BY  MONTHNAME(reg_date), dayofmonth(reg_date)');

        $result = $this->db->resultSet();

        return $result;
    }
}
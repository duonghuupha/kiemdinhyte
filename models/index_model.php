<?php
class Index_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function check_login($username, $password){
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_users WHERE username = '$username'
                                    AND password = '$password' AND active = 1");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }

    function get_data($username, $password){
        $query = $this->db->query("SELECT * FROM tbl_users WHERE username = '$username'
                                    AND password = '$password' AND active = 1");
        return $query->fetchAll();
    }
////////////////////////////////////////////////////////////////////////////////////////////////
    function updateLogin($username, $password, $data){
        $query = $this->update("tbl_users", $data, "username = '$username' AND password = '$password'");
        return $query;
    }
////////////////////////////////////////////////////////////////////////////////////////////////
    function get_total_seller_tomorrow(){
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_sellers WHERE 
                                DATE_FORMAT(date_seller, '%Y-%m-%d') = DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY)");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }

    function get_total_seller_now(){
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_sellers WHERE 
                                DATE_FORMAT(date_seller, '%Y-%m-%d') = CURRENT_DATE()");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }

    function get_total_seller(){
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_sellers");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }
    /****************************************************************************************** */
    function get_total_rev_to(){
        $query = $this->db->query("SELECT SUM(total_price) AS Total FROM tbl_sellers WHERE 
                                DATE_FORMAT(date_seller, '%Y-%m-%d') = DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY)");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }

    function get_total_rev_now(){
        $query = $this->db->query("SELECT SUM(total_price) AS Total FROM tbl_sellers WHERE 
                                DATE_FORMAT(date_seller, '%Y-%m-%d') = CURRENT_DATE()");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }

    function get_total_rev(){
        $query = $this->db->query("SELECT SUM(total_price) AS Total FROM tbl_sellers");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }
}
?>
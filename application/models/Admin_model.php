<?php
class Admin_model extends CI_Model {

    public function userData($user_id){
        $query = $this->db->query("SELECT * FROM signup WHERE id = $user_id");
        
        return $result = $query->row_array();
    }
    public function userstate(){
        $query = $this->db->query("SELECT * FROM location ORDER BY states");

        return $result = $query->result_array();
    }
    public function userdatacomplain($id){
        $query = $this->db->query("SELECT COUNT(complains) as comp_count FROM complaint WHERE Treatedby = $id");

        $result = $query->row_array();

        return $result['comp_count'];
    }
    public function userdatapending($id){
        $query = $this->db->query("SELECT COUNT(status) as pend_com FROM complaint WHERE status = 1 and Treatedby = $id");

        $result = $query->row_array();

        return $result['pend_com'];

    }
    public function userdataresolved($id){
        $query = $this->db->query("SELECT COUNT(status) as `re_com` FROM `complaint` WHERE status = 2 and Treatedby = $id");

        $result = $query->row_array();

        return $result['re_com'];

    }
    public function userdatatoday($id,$date){
        $query = $this->db->query("SELECT COUNT(date) as `today` FROM `complaint` WHERE date = '$date' and Treatedby = $id");

        $result = $query->row_array();

        return $result['today'];

    }
    public function pendingstate($id){
        $query = $this->db->query("SELECT * from complaint where status = 1 and Treatedby = $id");

        $result = $query->result_array();

        return $result;

    }
    public function resolvedstate($id){
        $query = $this->db->query("SELECT * from complaint where status = 2 and Treatedby = $id");

        $result = $query->result_array();

        return $result;

    }
    public function userinfo($id){
        $query = $this->db->query("
            SELECT * from complaint WHERE id = '$id'
        ");

        return $result = $query->row_array();
    }


//    public function jandata($year){
//        $query = $this->db->query("SELECT COUNT(complain) as `year` FROM `complaint` WHERE date = (1-01-$year) between "
//   ");
//
//        return $result = $query->row_array();
//    }



//    public function joininfo($idcard){
//        $query = $this->db->query("
//            SELECT s.*, p.* FROM doc p
//            LEFT JOIN patient s ON s.idcard = p.idcard
//            WHERE s.idcard = '$idcard'
//        ");
//
//        return $result = $query->row_array();
//    }
    
}
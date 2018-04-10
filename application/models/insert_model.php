<?php
class insert_model extends CI_Model{
function __construct() {
parent::__construct();
}
function getData(){
	$res = $this->db->get('comment');
	return $res->result_array();
}
function form_insert($tablename,$data){
// Inserting in Table() of Database()
	$res = $this->db->insert($tablename, $data);
	return $res;
}

}
?>

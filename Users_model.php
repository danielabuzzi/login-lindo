<?php
class Users_model extends CI_Model {
function __construct(){
parent::__construct();
$this->load->database();
}
public function login($login, $senha){
$query = $this->db->get_where('instituicao', array('login'=>$login,

'senha'=>$senha));

return $query->row_array();
}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Education_mod extends CI_Model{
public function edudb($data){
$this->db->insert('edudetails',$data);
}
}
?>

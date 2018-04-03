<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
  public function insertuser($data)
  {
	return $this->db->insert('administration', $data);
  } //end of insertuser

  public function verifyemail($key)
  {
	$data = array('status' => 1);
		$this->db->where('md5(email)', $key);
		return $this->db->update('administration', $data);
  }//end of verifyemail

  public function check_user($AdminEmail,$pass)
  {
	$sql = "SELECT AdminStatus, idAdmin, AdminName FROM administration where AdminEmail = ? and AdminPassword = ?";
	$data = $this->db->query($sql, array($AdminEmail,$pass));
		return ($data->result_array()) ;
  } // end of check_user

	public function GetGNForDash()
	{

		$this->db->select('heroes.h_name');
		$this->db->from('heroes');
		$data = $this->db->get();
		return($data->result());
	} //end of GetGiraffesNames

	public function insertGiraffe($data){

		return $this->db->insert('heroes', $data);

	} // end of insertGiraffe($data)

	public function getGiraffeByName($name){
		
		$this->db->select('heroes.*');
		$this->db->from('heroes');
		$this->db->where('h_name',$name);
		$data = $this->db->get();
		return($data->result());

	} // getGiraffeByName($name)


	public function updateGiraffe($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('heroes', $data);
	} //end public function updateGiraffe(){

} // end of User_model


?>
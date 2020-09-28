<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        
		/*function getAllRegiter(){
			$this->db->select('card_id, studentCode, name ,gender,birthday,address,p_tel,email,facebook');
			$result = $this->db->get('personal');
			return $result;
		} */

        function personal_insert($datapersonal){
			$this->db->insert('personal',$datapersonal);
			
        }
		function alumni_insert($dataalumni){
			$this->db->insert('alumni',$dataalumni);
		}
		function workinformation_insert($dataworkinformation){
			$this->db->insert('workinformation',$dataworkinformation);
		}
		
		

		
		/*function menu_delete($id){
			$this->db->where('menu_id', $id);
			$this->db->delete('menu');  
		}	

		function menu_edit($mid){
			$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
			$result = $this->db->get_where('menu', array('menu_id' => $mid));
			return $result;
		}
		        
		function menu_update($data,$menu_id){
			$this->db->where('menu_id', $menu_id);
			$this->db->update('menu', $data);
		}	*/
}
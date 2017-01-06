<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class get_hotels extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_hotels_list($place, $checkin, $checkout)
	{
		$where = '(country="'.$place.'" or city = "'.$place.'" or continent = "'.$place.'")';
		
		$this->db->where($where);
		$query = $this->db->get('js_hotels_general');
		$temp = array();
		$count = 0;
		foreach($query->result() as $row){
			$temp[$count]['id'] = $row->id;
			$temp[$count]['country'] = $row->country;
			$temp[$count]['city'] = $row->city;
			$temp[$count]['continent'] = $row->continent;
			$temp[$count]['total_rooms'] = $row->total_rooms;
			$temp[$count]['a_rooms'] = $row->a_rooms;
			$temp[$count]['website'] = $row->website;
			$temp[$count]['email'] = $row->email;
			$temp[$count]['description'] = $row->description;
			$count++;
		}
	
		//header('Access-Control-Allow-Origin: *');
		//header("Content-Type: application/json");
		//$result = json_encode($temp);
		if($temp > 0) return $temp;
	
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('js_user');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('js_user', $data);
	}
}
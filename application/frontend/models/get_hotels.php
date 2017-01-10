<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class get_hotels extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_hotels_list($place, $checkin, $checkout)
	{
		$place = str_replace('%20' , ' ' , $place);
		$where = '(name="'.$place.'" or city_hotel = "'.$place.'")';
		$this->db->where($where);
		$query = $this->db->get('js_hotels_middle_east');
		$temp = array();
		$count = 0;
		foreach($query->result() as $row){
			 
			$temp[$count]['id'] = $row->id;
			$temp[$count]['name'] = $row->name;
			$temp[$count]['address'] = $row->address;
			$temp[$count]['zip'] = $row->zip;
			$temp[$count]['city_hotel'] = $row->city_hotel;
			$temp[$count]['cc1'] = $row->cc1;
			$temp[$count]['ufi'] = $row->ufi;
			$temp[$count]['class'] = $row->class;
			$temp[$count]['currencycode'] = $row->currencycode;
			$temp[$count]['minrate'] = $row->minrate;
			$temp[$count]['maxrate'] = $row->maxrate;
			$temp[$count]['preferred'] = $row->preferred;
			$temp[$count]['nr_rooms'] = $row->nr_rooms;
			$temp[$count]['longitude'] = $row->longitude;
			$temp[$count]['latitude'] = $row->latitude;
			$temp[$count]['public_ranking'] = $row->public_ranking;
			$temp[$count]['hotel_url'] = $row->hotel_url;
			$temp[$count]['photo_url'] = $row->photo_url;
			$temp[$count]['desc_en'] = $row->desc_en;
			$temp[$count]['city_unique'] = $row->city_unique;
			$temp[$count]['city_preferred'] = $row->city_preferred;
			$temp[$count]['continent_id'] = $row->continent_id;
			$temp[$count]['review_score'] = $row->review_score;
			$temp[$count]['review_nr'] = $row->review_nr;
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

	function get_locations()
	{
		
		$this->db->select('name, city_hotel');
		$query = $this->db->get('js_hotels_middle_east');
		$temp = array();
		
		foreach($query->result() as $row){
			$data["name"][] = $row->name;
			$data["city_hotel"][] = $row->city_hotel;
			//print_r($row);
		}
		
		//header('Access-Control-Allow-Origin: *');
		//header("Content-Type: application/json");
		//$result = json_encode($temp);
		return $data;
	
	}

	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('js_user', $data);
	}
}
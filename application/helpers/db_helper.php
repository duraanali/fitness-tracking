<?php

function db_get_row($table_name, $where_array=array(), $order_array=array()){

    $CI =& get_instance();

    if(count($where_array) > 0){

		foreach($where_array as $key => $value){

			$CI->db->where($key, $value);

		}

	}

	if(count($order_array) > 0){

		foreach($order_array as $key => $value){

			$CI->db->order_by($key, $value);

		}

	}

 	$CI->db->limit(1, 0);

    $query = $CI->db->get($table_name);

    if($query->num_rows() > 0){

      	$return = $query->row();

    }else{

      	$return = FALSE;

    }

    return $return;

}

?>
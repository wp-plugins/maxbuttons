<?php


class maxButtonsAdmin
{
	
	protected $wpdb; 
	protected static $instance = null; 
	
	function __construct()
	{
		global $wpdb; 
		$this->wpdb = $wpdb;
	}
	
	public static function getInstance()
	{
		if (is_null(self::$instance)) 
			self::$instance = new maxButtonsAdmin(); 
		
		return self::$instance; 
	
	}


	/* Get multiple buttons 
	
		Used for overview pages, retrieve buttons on basis of passed arguments. 
		
		@return array Array of found buttons with argument
	*/	
	
	function getButtons($args = array())
	{
		
		$defaults = array(
			"status" => "publish", 
			"orderby" => "", 
			"order" => "asc",
			"limit" => 20, 
			"paged" => 1, 
		);
		$args = wp_parse_args($args, $defaults); 
		
		$limit = intval($args["limit"]); 
		$page = intval($args["paged"]);
		$escape = array(); 
		$escape[] = $args["status"];
		
		// 'white-list' escaping
		switch ($args["orderby"])
		{
			case "name": 
			default: 
				$orderby = "name"; 	
			break;

		}
		
		switch($args["order"])
		{
			case "DESC": 
				$order = "DESC"; 
			break;
			case "ASC": 
			default:
				$order = "ASC"; 
			break;
		}

		
		$sql = "SELECT id FROM " . maxButtonsUtils::get_buttons_table_name() . " WHERE status = '%s'"; 
		if ($args["orderby"] != '')
		{
			$sql .=  " ORDER BY $orderby $order"; 
 
		}	 
	 
	 	if ($limit > 0) 
	 	{

	 		if ($page == 1 ) 
	 			$offset = 0; 
	 		else 
	 			$offset = ($page-1) * $limit;
	 		
	 		$sql .= " LIMIT $offset, $limit "; 
		}
		
		$sql = $this->wpdb->prepare($sql,$escape , ARRAY_A); 
 
		$buttons = $this->wpdb->get_results($sql, ARRAY_A);
		return $buttons;
		
	}
	
	function getButtonCount($args = array())
	{
		$defaults = array(
			"status" => "publish", 
 
		);
		$args = wp_parse_args($args, $defaults); 
		
		$sql = "SELECT count(id) FROM " . maxButtonsUtils::get_buttons_table_name() . " WHERE status = '%s'"; 
		$sql = $this->wpdb->prepare($sql, $args["status"] ); 
		$result = $this->wpdb->get_var($sql);
		return $result;
		
	}
	
	function getButtonPages($args = array())
	{
		$defaults = array(
			"limit" => 20, 
			"paged" => 1, 
			"status" => "publish", 
			"output" => "list", 			// not used, future arg. 
			"view" => "all",

		);

		$args = wp_parse_args($args, $defaults); 

		$limit = intval($args["limit"]); 
		$page = intval($args["paged"]); 
		$view = $args["view"];

		$total = $this->getButtonCount(array("status" => $args["status"])); 
		
		$num_pages = ceil($total / $limit); 
		
		$output = ''; 
		$url = $_SERVER['REQUEST_URI'];

		$url = remove_query_arg("view", $url); 
		$url = add_query_arg("view", $view, $url);

		$first_url = ($page != 1 ) ? add_query_arg("paged", 1, $url) : false;
		$last_url = ($page != $num_pages) ? add_query_arg("paged", $num_pages, $url) : false;
		$next_url = ($page != $num_pages) ? add_query_arg("paged", ($page + 1), $url) : false;
		$prev_url = ($page != 1 ) ? add_query_arg("paged", ($page -1), $url) : false;
		

		$return = array(
			"first" => 1, 
			"base" => remove_query_arg("paged",$url), 
			"first_url" => esc_url($first_url),
			"last"  => $num_pages,
			"last_url" =>  esc_url($last_url),
			"next_url" => esc_url($next_url), 
			"prev_url" => esc_url($prev_url),
			"total" => $total, 
			"current" => $page, 
			
			
			
		);
		
		return $return;
	}
	



}

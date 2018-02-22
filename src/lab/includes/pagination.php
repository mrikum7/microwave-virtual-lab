<?php
class Pagination{
	
	var $conn;
	var $sql;
	var $result;
	
	var $get_var = "page";
	var $rows_on_page;
	var $str_forward = "&gt;&gt;";
	var $str_backward = "&lt;&lt;";
	var $num_links;
	
	var $all_rows;
	var $num_rows;
	
	var $page;
	var $number_pages;
	
	// constructor
	function Pagination($rows_on_page=10,$num_links=5) {
		//$this->connect_db();
		global $conn;
		$this->conn=$conn;
		$this->rows_on_page=$rows_on_page;
		$this->num_links=$num_links;
	}
	// sets the current page number
	function set_page() {
		$this->page = (isset($_REQUEST[$this->get_var]) && $_REQUEST[$this->get_var] != "") ? $_REQUEST[$this->get_var] : 0;
		return $this->page;
	}
	// gets the total number of records 
	function get_total_rows() {
		$tmp_result = $this->conn->Execute($this->sql);
		$this->all_rows = $tmp_result->RecordCount();
		return $this->all_rows;
	}
	// get the total number of result pages
	function get_num_pages() {
		$this->number_pages = ceil($this->get_total_rows() / $this->rows_on_page);
		return $this->number_pages;
	}
	// returns the records for the current page
	function get_page_result() {
		$start = $this->set_page() * $this->rows_on_page;
		$page_sql = sprintf("%s LIMIT %s, %s", $this->sql, $start, $this->rows_on_page);
		$this->result = $this->conn->Execute($page_sql);
		return $this->result;
	}
	// get the number of rows on the current page
	function get_page_num_rows() {
		$this->num_rows = $this->result->RecordCount();
		return $this->num_rows;
	}
	// free the database result
	function free_page_result() {
		//mysql_free_result($this->result);
	}
	// function to handle other querystring than the page variable
	function rebuild_qs($curr_var) {
		if (!empty($_SERVER['QUERY_STRING'])) {
			$parts = explode("&", $_SERVER['QUERY_STRING']);
			$newParts = array();
			foreach ($parts as $val) {
				if (stristr($val, $curr_var) == false)  {
					array_push($newParts, $val);
				}
			}
			if (count($newParts) != 0) {
				$qs = "&".implode("&", $newParts);
			} else {
				return false;
			}
			return $qs; // this is your new created query string
		} else {
			return false;
		}
	} 
	// this method will return the navigation links for the conplete recordset
	function navigation($separator = " | ", $css_current = "", $back_forward = false) {
		$max_links = $this->num_links;
		$curr_pages = $this->set_page(); 
		$all_pages = $this->get_num_pages() - 1;
		$var = $this->get_var;
		$navi_string = "";
		if (!$back_forward) {
			$max_links = ($max_links < 2) ? 2 : $max_links;
		}
		if ($curr_pages <= $all_pages && $curr_pages >= 0) {
			if ($curr_pages > ceil($max_links/2)) {
				$start = ($curr_pages - ceil($max_links/2) > 0) ? $curr_pages - ceil($max_links/2) : 1;
				$end = $curr_pages + ceil($max_links/2);
				if ($end >= $all_pages) {
					$end = $all_pages + 1;
					$start = ($all_pages - ($max_links - 1) > 0) ? $all_pages  - ($max_links - 1) : 1;
				}
			} else {
				$start = 0;
				$end = ($all_pages >= $max_links) ? $max_links : $all_pages + 1;
			}
			if($all_pages >= 1) {
				$forward = $curr_pages + 1;
				$backward = $curr_pages - 1;
				$navi_string = ($curr_pages > 0) ? "<a class=\"".$css_current."\" href=\"".$_SERVER['PHP_SELF']."?".$var."=".$backward.$this->rebuild_qs($var)."\">".$this->str_backward."</a>&nbsp;" : $this->str_backward."&nbsp;";
				if (!$back_forward) {
					for($a = $start + 1; $a <= $end; $a++){
						$theNext = $a - 1; // because a array start with 0
						if ($theNext != $curr_pages) {
							$navi_string .= "<a class=\"".$css_current."\" href=\"".$_SERVER['PHP_SELF']."?".$var."=".$theNext.$this->rebuild_qs($var)."\">";
							$navi_string .= $a."</a>";
							$navi_string .= ($theNext < ($end - 1)) ? $separator : "";
						} else {
							$navi_string .= ($css_current != "") ? "<span class=\"".$css_current."\">".$a."</span>" : $a;
							$navi_string .= ($theNext < ($end - 1)) ? $separator : "";
						}
					}
				}
				$navi_string .= ($curr_pages < $all_pages) ? "&nbsp;<a class=\"".$css_current."\" href=\"".$_SERVER['PHP_SELF']."?".$var."=".$forward.$this->rebuild_qs($var)."\">".$this->str_forward."</a>" : "&nbsp;".$this->str_forward;
			}
		}
		return $navi_string;
	}
	// this info will tell the visitor which number of records are shown on the current page
	function page_info($to = "-") {
		$first_rec_no = ($this->set_page() * $this->rows_on_page) + 1;
		$last_rec_no = $first_rec_no + $this->rows_on_page - 1;
		$last_rec_no = ($last_rec_no > $this->get_total_rows()) ? $this->get_total_rows() : $last_rec_no;
		$to = trim($to);
		$info = $first_rec_no." ".$to." ".$last_rec_no;
		return $info;
	}
	// simple method to show only the page back and forward link.
	function back_forward_link() {
		$simple_links = $this->navigation(" ", "", true);
		return $simple_links;
	}
}
?>
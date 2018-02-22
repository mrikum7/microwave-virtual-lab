<?php

/**
 * $Id: Grid.php,v 1.2 2005/11/14 13:19:40 scratch Exp $
 * Class grid
 * @access public
 * @name grid
 * @package grid
 * @version 1.0
 */
 
class Grid
{
    var $mName;
    var $mFields;
    var $mFrom;
    var $mWhere;
    var $mHaving;
    var $mGroupBy;
    var $mOrderBy;
    var $mOrderSort;
    var $mPortion;
    var $mPage;
    var $mSubWhere;
    var $mAdditional;
    var $mAllRows;
    var $mDebug;

    /**
    * Constructor
    * @access public
    * set default grid settings
    */
    function Grid($name, $fields)
    {
        $this->mName = (empty ($name)) ? 'testGrid': $name;
        $this->mFields = $fields;
        $this->mFrom = '';
        $this->mWhere = '';
        $this->mHaving = '';
        $this->mGroupBy = '';
        $this->mOrderBy = '';
        $this->mOrderSort = ' ASC';
        $this->mPortion = 15;
        $this->mPage = ($this->mPage>0) ? $this->mPage : 0;
        $this->mSubWhere = '';
        $this->mAdditional = '';
        $this->mAllRows = '';
    }
    
    /**
     * Function builds the SQL Query without any limits for the output data number 
     * @access private
     * @return string MySQL Query
     */
    function GetQuery()
    {
        $fields = '';
        foreach ($this->mFields as $key=>$value)
        {
            $fields .= $value['expr'].' AS '.$key.', ';
        }
        $fields = substr ($fields, 0, strlen ($fields)-2);
        if (strlen ($this->mFrom))
        {
            //all data get from class propertys
            //setup 'SELECT' - 'FROM' parts
            $query = "SELECT $fields FROM ".$this->mFrom.' WHERE ';
            //set WHERE part which was set at start
            $query .= (strlen ($this->mWhere)) ? $this->mWhere : 1;
            //add simple search condition
            $query .= (strlen ($this->mSubWhere)) ? ' AND ('.$this->mSubWhere.')' : '';
            //add extended search condition
            $query .= (strlen ($this->mAdditional)) ? ' AND ('.$this->mAdditional.')' : '';
            
            //add 'GROUP BY part
            if (strlen ($this->mGroupBy))//set GROUP BY condition
            {
                $query .= ' GROUP BY '.$this->mGroupBy;
            }
            
            //add 'HAVING' part
            if (strlen ($this->mHaving) && strlen ($this->mGroupBy))//set GROUP BY condition
            {
                $query .= ' HAVING ('.$this->mHaving.')';
            }
            
            if (strlen ($this->mOrderBy))//set ORDER BY condition
            {
                $query .= ' ORDER BY '.$this->mOrderBy;
                $query .= ' '.$this->mOrderSort;
            }
//			echo $query;
            return $query; 
        }
        return 0;
    }
	
	
	function CountQuery()
    {
        $fields = '';
		$i=0;
        foreach ($this->mFields as $key=>$value)
        {
			if($i==1)continue;
            $fields .= $value['expr'];
			$i++;
        }
        //$fields = substr ($fields, 0, strlen ($fields)-2);
		
        if (strlen ($this->mFrom))
        {
            //all data get from class propertys
            //setup 'SELECT' - 'FROM' parts
            $query = "SELECT $fields FROM ".$this->mFrom.' WHERE ';
            //set WHERE part which was set at start
            $query .= (strlen ($this->mWhere)) ? $this->mWhere : 1;
            //add simple search condition
            $query .= (strlen ($this->mSubWhere)) ? ' AND ('.$this->mSubWhere.')' : '';
            //add extended search condition
            $query .= (strlen ($this->mAdditional)) ? ' AND ('.$this->mAdditional.')' : '';
            
            //add 'GROUP BY part
            if (strlen ($this->mGroupBy))//set GROUP BY condition
            {
                $query .= ' GROUP BY '.$this->mGroupBy;
            }
            
            //add 'HAVING' part
            if (strlen ($this->mHaving) && strlen ($this->mGroupBy))//set GROUP BY condition
            {
                $query .= ' HAVING ('.$this->mHaving.')';
            }
            
/*            if (strlen ($this->mOrderBy))//set ORDER BY condition
            {
                $query .= ' ORDER BY '.$this->mOrderBy;
                $query .= ' '.$this->mOrderSort;
            }*/
//			echo $query;
            return $query; 
        }
        return 0;
    }
    
    /**
     * function builds part of query were set limit for outputed records
     * @access private
     * @return string - part of MySQL query
     */
    function GetPortion()
    {
        $begin = $this->mPage*$this->mPortion;
        $end = $this->mPortion;
        return " LIMIT $begin, $end";
    }
    
    /**
     * function return completed query (with all limits)
     * @access private
     * @return string
     */
    function GetCompleteQuery()
    {
        return $this->GetQuery().$this->GetPortion();
    }
    
    /**
     * function builts array of links with params
     * @access public
     * @param value which get from 'extended search' form
     * @return array
     */
    function GetPager($params=array())
    {
        if ('' == $this->mAllRows) {
            $query = $this->CountQuery();
			NDatabase::query($query);
			$all_rows=NDatabase::getNumRows();
            //$all_rows = count($params)?NDatabase::getOne($query):NDatabase::getOne($query, $params);
            $num_rows = $all_rows;
        } else  {
            $num_rows = NDatabase::getOne($this->mAllRows);
        }
        $portion = $this->mPortion;
        $num_links = ceil($num_rows/$portion);
		$num_links1 = ceil($num_rows/$portion);
		$this->last_page=$num_links1-1;
		$increment=0;

		/*sarav*/
		$cur_page=intval($this->mPage);
		
		if(!$cur_page){
			$cur_page=0;
		}
		
		if($num_links>2){
			$num_links=10+$cur_page;
			//$increment=$cur_page-1;
			$increment=$cur_page-4;
			if($increment<0){
				$increment=0;
			}

			if($num_links>$num_links1){
				$num_links=$num_links1;
			}
			
		}
		

//		echo $increment."<br />".$num_links."<br />";
//		echo $num_links;
		/*sarav*/

        $links = array();
        if ($num_links > 1)//don't show pager if portion value=1
        {
            for ($i = $increment; $i<$num_links; $i ++)
            {
                if ($i == $this->mPage)
                {
                    $links[$i]['current'] = 1;
                }
                $links[$i]['name'] = $i+1;
                $links[$i]['page'] = $i;
            }
        }
        return $links;
    }
    
    /**
     * function set all property for grid class
     * @access private
     * @return array
     */
    function InitGrid()
    {
        global $_SESSION;
        global $_GET;
        $_SESSION['ses'][$this->mName]['is_filters'] = 0;

        //set current page
        if (isset ($_GET['page']))
        {
            $this->mPage = $_GET['page'];
            $_SESSION['ses'][$this->mName]['page'] = $_GET['page'];
            $_SESSION['ses'][$this->mName]['is_filters'] = 1;
        }
        elseif (isset ($_SESSION['ses'][$this->mName]['page']))
        {
            $this->mPage = $_SESSION['ses'][$this->mName]['page'];
            $_SESSION['ses'][$this->mName]['is_filters'] = 1;
        }
        
        //set ordering
        if (isset ($_GET['order_by']) && array_key_exists ($_GET['order_by'], $this->mFields))
        {
            $this->mOrderBy = $_GET['order_by'];
            $_SESSION['ses'][$this->mName]['order_by'] = $_GET['order_by'];
            if (isset ($_GET['dir']))
            {
                $this->mOrderSort = ($_GET['dir'] == 'desc') ? ' DESC' : ' ASC';
                $_SESSION['ses'][$this->mName]['order_sort'] = $this->mOrderSort;
            }
			else
			{
			    $this->mOrderSort = ' ASC';
                $_SESSION['ses'][$this->mName]['order_sort'] = $this->mOrderSort;
			}
            $_SESSION['ses'][$this->mName]['is_filters'] = 1;
        }
        elseif (isset ($_SESSION['ses'][$this->mName]['order_by']))
        {
            $this->mOrderBy = $_SESSION['ses'][$this->mName]['order_by'];
            $this->mOrderSort = $_SESSION['ses'][$this->mName]['order_sort'];
            $_SESSION['ses'][$this->mName]['is_filters'] = 1;
        }
        
        foreach ($this->mFields as $key=>$value)
        {
            if ($this->mOrderBy != $key || $this->mOrderSort == ' DESC')
            {
                NTemplate::assign($key, 'asc');
            }
            else
            {
                NTemplate::assign($key, 'desc');
            }
        }
        
        //add 'simple search' filter
        if (isset ($_SESSION['ses'][$this->mName]['sub_where']) && strlen ($_SESSION['ses'][$this->mName]['sub_where']))
        {
            $this->SetSimpleFilter ($_SESSION['ses'][$this->mName]['sub_where']);
            $_SESSION['ses'][$this->mName]['is_filters'] = 1;
        }
        
        //add extended filter
        if (isset ($_SESSION['ses'][$this->mName]['ext_search']) && count ($_SESSION['ses'][$this->mName]['ext_search']))
        {
            $this->SetExtendedFilter ($_SESSION['ses'][$this->mName]['ext_search']);
            $_SESSION['ses'][$this->mName]['is_filters'] = 1;
        }
        
        //put all data in the session (for extended search)
        $_SESSION['ses'][$this->mName]['fields'] = $this->mFields;
    }
    
    
    /**
     * function inits dataset according to simple search form
     * @access public
     * @params string $string - substring for SQL 'WHERE' condition
     */
    function SetSimpleFilter($string)
    {
        global $_SESSION;
        
         $string = trim(mysql_escape_string ($string));

        $this->mSubWhere = '';
        foreach ($this->mFields as $key=>$value)
        {
			
			 $this->mName;
            //calculate fields can't be in the 'where' condition
            if (!isset($this->mFields[$key]['avg']))
                $this->mFields[$key]['avg'] = 0;
            if (1 != $this->mFields[$key]['avg'])
            {
				
                $this->mSubWhere .= ' '.$this->mFields[$key]['expr']." LIKE '%$string%' OR";
            }
        }
        $this->mSubWhere .= ' 0';
        $_SESSION['ses'][$this->mName]['sub_where'] = $string;
        $_SESSION['ses'][$this->mName]['is_filters'] = 1;
    }

    function SetSimpleFilterStats($string)
    {
        global $_SESSION;
        
        $string = trim(mysql_escape_string ($string));
 		 $this->mSubWhere .= " CONCAT(firstname,' ',lastname)  LIKE '%$string%' OR firstname like '%$string%' OR lastname like '%$string%' ";
//        $this->mSubWhere .= ' 0';
        $_SESSION['ses'][$this->mName]['sub_where'] = $string;
        $_SESSION['ses'][$this->mName]['is_filters'] = 1;

   }
    

    /**
     * function builts conditions for SQL query
     * conditions set according to data from 'extended search' form 
     * @access private
     * @params $_POST array from the 'extended search' form
     * @return current portion records with data
     */
    function SetExtendedFilter($data)
    {
        $this->mAdditional = '';
        foreach ($this->mFields as $key=>$value)
        {
            if (1 == $value['ext_search'] && 'on' == $data['checked'][$key])
            {
                switch ($value['field_type'])
                {
                    case 'text'://filed was in the text format
                    {
                        if (1 != $value['avg'] && $this->CheckValue ($data['from'][$key]))
                        {
                            $data['from'][$key] = mysql_escape_string ($data['from'][$key]);
                            $this->mAdditional .= $value['expr']." LIKE'%".$data['from'][$key]."%' AND ";
                        }
                        break;
                    }
                    case 'select'://filed was in the select list format
                    {
                        if (1 != $value['avg'] && $this->CheckValue ($data['from'][$key]))
                        {
                            $this->mAdditional .= $value['expr']."='".$data['from'][$key]."' AND ";
                        }
                        break;
                    }
                    case 'range'://filed was in the range format
                    {
                        if (1 != $value['avg'])
                        {
                            if ($this->CheckValue($data['from'][$key]))
                            {
                                $data['from'][$key] = mysql_escape_string ($data['from'][$key]);
                                $this->mAdditional .= $value['expr'].">='".$data['from'][$key]."' AND ";
                            }
                            if ($this->CheckValue($data['to'][$key]))
                            {
                                $data['to'][$key] = mysql_escape_string ($data['to'][$key]);
                                $this->mAdditional .= $value['expr']."<='".$data['to'][$key]."' AND ";
                            }
                        }
                        break;
                    }
                    case 'range_date'://filed was in the date range format
                    {
                        if (1 != $value['avg'])
                        {
                            if ($this->CheckValue($data['from'][$key]))
                            {
                                $from = date('Y-m-d', strtotime ($data['from'][$key]));
                                $this->mAdditional .= $value['expr'].">='".$from."' AND ";
                            }
                            if ($this->CheckValue ($data['to'][$key]))
                            {
                                $to = date('Y-m-d', strtotime ($data['to'][$key]));
                                $this->mAdditional .= $value['expr']."<='".$to."' AND ";
                            }
                        }
                        break;
                    }
                }
            }
        }
        $this->mAdditional .= '1';
        $_SESSION['ses'][$this->mName]['ext_search'] = $data;
        $_SESSION['ses'][$this->mName]['is_filters'] = 1;
    }
    
    /**
     * function checks field's values
     * conditions set according to data from 'extended search' form 
     * @access private
     * @params $value - value from the 'extended search' form
     * @return 1 if value is valid
     */
    function CheckValue($value=null)
    {
        if (isset ($value) && '' != $value) return 1;
        else return 0;
    }


    /**
     * function resets all current filters 
     * @access public
     */
    function ResetAllFilters()
    {
        global $_SESSION;
        global $_GET;
        unset ($_SESSION['ses'][$this->mName]);
        unset ($_GET);
        $this->InitGrid ();
        $this->mSubWhere = '';
        $this->mAdditional = '';
        $this->mOrderBy = '';
        $this->mOrderSort = '';
        $this->mPage = 0;
        $this->mDebug = false;
    }

    /**
     * function checks equals scriptname & referer
     * @param string $referer
     * @param string $scriptName
     * @access public
     * @return 1 if referer equals script name, 0 if not
     */
    function IsRefererCondition($referer, $scriptName, $params=null)
    {
        $scriptName = explode('/', $scriptName);
        $referer_info = pathinfo($referer);
        $referer_script = explode('?', $referer_info['basename']);
        if ($referer_script[0] == $scriptName[count($scriptName)-1]) return 1;
        else return 0;
    }
    /**
     * function resets all current filters 
     * @access public
     * @return current portion records with data
     */
    function GetGrid($params=array ())
    {
        $query = $this->GetCompleteQuery();
        if (true == $this->mDebug)
        e($query);
		
	//	echo $query;
		$data1=array();
		$data = NDatabase::getAllAssoc($query, $params);
		foreach($data as $id=>$head){ // loop added by siraj to strip slashes.
			foreach($head as $key=>$value){
				$data1[$id][$key] = stripslashes($value);
			}
		}
        return $data1;
    }
}
?>
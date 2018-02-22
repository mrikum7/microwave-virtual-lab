<?php
class Pagination {
    var $conn;
	var $pages;
    var $totalItems;
    var $perPage;
	var $linksCount;
    var $currentPageNum;
	var $currentLinkSet;
	var $linkSetCount;
    var $baseURL;
	var $appendLink;
	var $index;
	var $firstPage;
	var $lastPage;
	var $nextPage;
	var $prevPage;
	var $firstLastCSS;
	var $nextPrevCSS;
	var $data=array();
	var $pageLinks=array();
		
    function pagination($query,$totalItems, $perPage, $currentPageNum, $baseURL,$appendLink='',$linkCSS='') {        
		$this->pages = 0;
		$this->totalItems = 0;
		$this->perPage = 0;
		$this->currentPageNum = 0;
		$this->linksCount = 5;
		$this->baseURL = '';
		$this->appendLink = '';
		$this->firstLastCSS = '';
		$this->nextPrevCSS = '';
		$this->firstPage = '&lt;First&nbsp;';
		$this->lastPage = '&nbsp;Last&gt;';
		$this->nextPage = '&nbsp;&gt;&gt;&nbsp;';
		$this->prevPage = '&nbsp;&lt;&lt;&nbsp;';
		$this->conn = ADONewConnection('mysql'); # create a connection 
		$this->conn->Connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		$this->index=(($currentPageNum-1)*$perPage)+1;
		if(!isset($totalItems) || $totalItems=='') {
			$result = $this->conn->Execute($query);
			$totalItems=$result->RecordCount();
		}
		$this->pages = ceil($totalItems / $perPage);
		//print("Pages : $this->pages<br>");
        $this->totalItems = $totalItems;
        $this->perPage = $perPage;
		$this->appendLink=$appendLink;
		if($this->appendLink!='') {
			$this->appendLink='&'.$this->appendLink;
		}
        $this->currentPageNum = (!is_numeric($currentPageNum) || $currentPageNum > $this->pages || $currentPageNum < 1) ? 1 : intval($currentPageNum);
        $this->baseURL = $baseURL;
		$q=$query.' LIMIT '.(($this->currentPageNum-1)*$this->perPage).','.$this->perPage;
		$result = $result = $this->conn->Execute($q);
		$this->data=$result->GetRows();
		$j=1;
		$k=1;
		for ($i = 1; $i <= $this->pages; $i++) {
			//print("$i : ".$this->currentPageNum."<br>");
			$this->pageLinks[]=($i != $this->currentPageNum) ? '<a class="'.$linkCSS.'" href="' . $this->baseURL . '?page=' . $i . '&n='.$this->totalItems.''.$this->appendLink.'">' . $i . '</a>' : '<span class="active">' . $i . '</span>';
			if($i==$this->currentPageNum) {
				$this->currentLinkSet=$j;
			}
			if($i==$this->pages) {
				$this->linkSetCount=$j;
			}
			if($k>=$this->linksCount) {
				$j++;
				$k=1;
			}else {
				$k++;
			}
			//print("K : $k<br>");
        }
		//print("currentLinkSet : ".$this->currentLinkSet."<br>");
		//print("linkSetCount : ".$this->linkSetCount."<br>");
    }

    function displayPagination($paginationClass='') {
        echo '<div class="'.$paginationClass.'">';
		if($this->currentPageNum>1) {
			echo '<a class="'.$this->firstLastCSS.'" href="' . $this->baseURL . '?page=1&n='.$this->totalItems.''.$this->appendLink.'">'.$this->firstPage.'</a>&nbsp;';
		}
		else {
			echo $this->firstPage;
		}
		if($this->currentLinkSet>1) {
			echo '<a class="'.$this->firstLastCSS.'" href="' . $this->baseURL . '?page='.(($this->currentLinkSet-1)*$this->linksCount).'&n='.$this->totalItems.''.$this->appendLink.'">'.$this->prevPage.'</a>&nbsp;';
		}
		else {
			echo $this->prevPage;
		}
		$displayLinks=array_slice($this->pageLinks,(($this->currentLinkSet-1)*$this->linksCount),$this->linksCount);
		$i=1;
		$dcount=count($displayLinks);
		foreach ($displayLinks as $arr)
        {
            echo $arr;
			$i++;
			echo ($i > $dcount) ? '' : ' | ';
        }
		if($this->currentLinkSet<$this->linkSetCount) {
			echo '<a class="'.$this->firstLastCSS.'" href="' . $this->baseURL . '?page='.(($this->currentLinkSet*$this->linksCount)+1).'&n='.$this->totalItems.''.$this->appendLink.'">'.$this->nextPage.'</a>&nbsp;';
		}
		else {
			echo $this->nextPage;
		}
		if($this->currentPageNum<$this->pages) {
			echo '  <a  class="'.$this->firstLastCSS.'" href="' . $this->baseURL . '?page='.$this->pages.'&n='.$this->totalItems.''.$this->appendLink.'">Last&gt;</a> ';
		}
		else {
			echo '  Last&gt; ';
		}
        echo '</div>' . "\n";
    }
	
	function setFirstLastCSS($style) {
		$this->firstLastCSS=$style;
	}
	function setNextPrevCSS($style) {
		$this->nextPrevCSS=$style;
	}
}
?>
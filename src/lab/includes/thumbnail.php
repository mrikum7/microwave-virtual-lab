<?php
	function createThumbnail($image,$newWidth,$newHeight,$destFile,$quality) {	
		$ret=array();
		$err=false;
		$h = getimagesize($image); // specs for resource image
		if(trim($image)!='') {
			//$file_ext = trim(strtolower(strrchr($image,'.')));
			switch($h[2]) {
				case 1:
				case 2:
				case 3:
					break;
				default:
					$err=true;
					$ret[0]=false;
					$ret[1]='Only image files of type JPG,PNG or GIF are allowed';
			}
		}
		else {
			$err=true;
			$ret[0]=false;
			$ret[1]='No filename specified';
		}
		if($err) {
			return $ret;
		}
		else {
			$srcWidth = $h[0];
			$srcHeight = $h[1];
			$srcType = $h[2];
			
			if( ($newWidth=='') || ($newHeight=='') ){
				$newWidth=$srcWidth;
				$newHeight=$srcHeight;
			}
			$ratioWidth = ($srcWidth / $newWidth);
			$ratioHeight = ($srcHeight / $newHeight);
			if( $ratioWidth < $ratioHeight){ 
				$destWidth = $srcWidth/$ratioHeight;
				$destHeight = $newHeight; 
			}else{ 
				$destWidth = $newWidth; 
				$destHeight = $srcHeight/$ratioWidth; 
			} 
			
			switch($srcType) {
				case 1:
					$src=imagecreatefromgif($image);
					break;
				case 2:
					$src=imagecreatefromjpeg($image);
					break;
				case 3:
					$src=imagecreatefrompng($image);
					break;
			}
			$dest = imagecreatetruecolor($destWidth, $destHeight); // created thumbnail reference
			//$dest = imagecreate($destWidth, $destHeight); // created thumbnail reference
			imagecopyresampled($dest, $src, 0, 0, 0, 0, $destWidth, $destHeight, $srcWidth, $srcHeight);
			//imagejpeg($dest,$destFile,$quality);
			switch($srcType) {
				case 1:
					imagegif($dest,$destFile,$quality);
					break;
				case 2:
					imagejpeg($dest,$destFile,$quality);
					break;
				case 3:
					imagepng($dest,$destFile,$quality);
					break;
			}
			imagedestroy($src); 
			imagedestroy($dest);
			$ret[0]=true;
			$ret[1]='Success';
			return $ret;
		}
	}
	
	function createCropedThumbnail($image,$newWidth,$newHeight,$destFile,$quality) {	
		$ret=array();
		$err=false;
		$ratio=$newWidth/$newHeight;
		$h = getimagesize($image); // specs for resource image
		if(trim($image)!='') {
			//$file_ext = trim(strtolower(strrchr($image,'.')));
			switch($h[2]) {
				case 1:
				case 2:
				case 3:
					break;
				default:
					$err=true;
					$ret[0]=false;
					$ret[1]='Only image files of type JPG,PNG or GIF are allowed';
			}
		}
		else {
			$err=true;
			$ret[0]=false;
			$ret[1]='No filename specified';
		}
		if($err) {
			return $ret;
		}
		else {
			$srcWidth = $h[0];
			$srcHeight = $h[1];
			$srcType = $h[2];
			$aspectRatio=$srcWidth/$srcHeight;
			if($aspectRatio>=$ratio) {
				$thumbWidth=($newHeight*$aspectRatio);
				$thumbHeight=$newHeight;
			}
			else {
				$thumbWidth=$newWidth;
				$thumbHeight=($newWidth/$aspectRatio);
			}
			
			switch($srcType) {
				case 1:
					$src=imagecreatefromgif($image);
					break;
				case 2:
					$src=imagecreatefromjpeg($image);
					break;
				case 3:
					$src=imagecreatefrompng($image);
					break;
			}
			$dest = imagecreatetruecolor($thumbWidth, $thumbHeight); // created thumbnail reference
			imagecopyresampled($dest, $src, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $srcWidth, $srcHeight);
			$dest2 = imagecreatetruecolor($newWidth, $newHeight); // created croped thumbnail reference
			imagecopyresampled($dest2, $dest, 0, 0, 0, 0, $newWidth, $newHeight, $newWidth, $newHeight);
			switch($srcType) {
				case 1:
					imagegif($dest2,$destFile,$quality);
					break;
				case 2:
					imagejpeg($dest2,$destFile,$quality);
					break;
				case 3:
					imagepng($dest2,$destFile,$quality);
					break;
			}
			imagedestroy($src); 
			imagedestroy($dest);
			imagedestroy($dest2);
			$ret[0]=true;
			$ret[1]='Success';
			return $ret;
		}
	}
?>
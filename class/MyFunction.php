<?php
class MyFunction{
	//Chenge file name--------------------------------------	
	public function renameFile($prename,$file_name){
			$lastname=strstr($file_name,".");			//ตัดเอานามสกุล
			$ran=rand(111, 999);
			$datepic=date("jnyGis");					//Format: day,month,year,hour,minutes,seconds
				  if ($file_name<>""){
						  $new_file_name="$prename$datepic$ran".$lastname;	
				  }
			return $new_file_name;
	}
	
	//Upload Image--------------------------------
		public function uploadImage($pic,$pic_name,$dir,$width,$newPicName){
				  $ext = strtolower(end(explode('.', $pic_name)));
				  
					  if ($ext=="jpg" or $ext=="jpeg" or $ext=="gif" or $ext=="png"){
						 copy($pic,"$dir/".$newPicName);
					  if($ext =="jpg" or $ext =="jpeg" ){
						 $ori_img=imagecreatefromjpeg ($pic);
					  }
					  else if($ext =="gif"){
						 $ori_img=imagecreatefromgif ($pic);
					  }
					  else if($ext =="png"){
						 $ori_img=imagecreatefrompng ($pic);
					  }
				  
				  $ori_size=getimagesize ($pic);
				  $ori_w=$ori_size[0];
				  $ori_h=$ori_size[1];
				  
				  if ($ori_w>$width){
					  $new_w =$width;
					  $new_h = round (($new_w/$ori_w) * $ori_h);
					  $new_img = imagecreatetruecolor ($new_w, $new_h);
					  imagecopyresized ($new_img,$ori_img,0,0,0,0,
					  $new_w,$new_h,$ori_w,$ori_h);
					  
						  if ($ext =="jpg" or $ext == "jpeg"){
							  imagejpeg($new_img,"$dir/$newPicName");
						  }else if ($ext == "png"){
							  imagepng($new_img,"$dir/$newPicName");
						  }else if ($ext == "gif"){
							  imagegif($new_img,"$dir/$newPicName");
						  }
				  
					  imagedestroy ($ori_img);
					  imagedestroy ($new_img);
					  
					  return "done";
				  }
				  
			  }
	}//End function***
	
	//Upload Image สาามารถลบไฟล์ภาพเดิมได้--------------------------------
		public function uploadImage2($oldPic,$pic,$pic_name,$dir,$width,$newPicName){
				//Delete old images-------
				  if(!empty($oldPic)){
					  unlink($dir.'/'.$oldPic);
				  }
				  
				//Begin upload image-----------------
				  $ext = strtolower(end(explode('.', $pic_name)));
				  
					  if ($ext=="jpg" or $ext=="jpeg" or $ext=="gif" or $ext=="png"){
						 copy($pic,"$dir/".$newPicName);
					  if($ext =="jpg" or $ext =="jpeg" ){
						 $ori_img=imagecreatefromjpeg ($pic);
					  }
					  else if($ext =="gif"){
						 $ori_img=imagecreatefromgif ($pic);
					  }
					  else if($ext =="png"){
						 $ori_img=imagecreatefrompng ($pic);
					  }
				  
				  $ori_size=getimagesize ($pic);
				  $ori_w=$ori_size[0];
				  $ori_h=$ori_size[1];
				  
				  if ($ori_w>$width){
					  $new_w =$width;
					  $new_h = round (($new_w/$ori_w) * $ori_h);
					  $new_img = imagecreatetruecolor ($new_w, $new_h);
					  imagecopyresized ($new_img,$ori_img,0,0,0,0,
					  $new_w,$new_h,$ori_w,$ori_h);
					  
						  if ($ext =="jpg" or $ext == "jpeg"){
							  imagejpeg($new_img,"$dir/$newPicName");
						  }else if ($ext == "png"){
							  imagepng($new_img,"$dir/$newPicName");
						  }else if ($ext == "gif"){
							  imagegif($new_img,"$dir/$newPicName");
						  }
				  
					  imagedestroy ($ori_img);
					  imagedestroy ($new_img);
					  
					  return "done";
				  }
				  
			  }
	}//End function***
	
	//Delete file----------------------------------------
		public function DEL_FILE($file,$dir){
				$rs = unlink($dir.$file); 
				return  $rs;
		}
		
	function getData($conn,$field,$table,$condition){
			$sql="SELECT $field AS result FROM $table $condition";
			$rs=mysqli_query($conn,$sql);
			
			if($rs){
				$data=mysqli_fetch_assoc($rs);
				return $data['result'];
			}else{
				return "null";
			}
	}//end***
	
	
	function getDataList($conn,$field,$table,$condition){
		$sql="SELECT $field FROM $table $condition";
		$rs=mysqli_query($conn,$sql);
		return $rs;
	}
	
	function getPageInfo($conn,$field,$specName,$lang){
			$sql="SELECT $field FROM page WHERE spec_name='$specName' AND lang='$lang' LIMIT 1";
			$rs=mysqli_query($conn,$sql)or die($sql);
			$data=mysqli_fetch_assoc($rs);
			
			return $data["$field"];
	}//end***
	
	function getWord($conn,$specName,$lang){
		$sql="SELECT * FROM yss_word WHERE name='$specName' LIMIT 1";
		$rs=mysqli_query($conn,$sql);
		$data=mysqli_fetch_assoc($rs);
		
		return $data["$lang"];
	}
	
	//Function Get Mac Address-------------------------
		function getMacAddress(){
			system('ipconfig /all'); 						//Execute external program to display output
			$mycom=ob_get_contents(); 						// Capture the output into a variable
			ob_clean(); 									// Clean (erase) the output buffer
			$findme = "Physical";
			$pmac = strpos($mycom, $findme); 				// Find the position of Physical text
			$macid=substr($mycom,($pmac+36),17);			// Get Physical Addresss
			return $macid;
		}
	
	//Get IP Address----------------------------------
		public function getIpAddress(){
			$ip=$_SERVER['REMOTE_ADDR'];
			return $ip;
		}	
		
	//Function for random string--------------------------
		public function randomString($length){
			$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
			return $randomString;
		}	
	
	//Limit String for Display---------------------------
		public function limitStrDisplay($limit,$str){
			$result=iconv_substr($str,0,$limit,"UTF-8")."...";	// สำหรับภาษาไทย
			return $result;
		}
				
		//Endcoding Password===============================================================================
			public function EnCodingPw($password){
				unset($pwdtxt);	
				$password = strtoupper($password);
					 for($i=1;$i<=strlen($password);$i++){
					if(($i%5)==0){
					$pwdtxt .= chr(ord($password[$i-1])+5);	
				}else{
					$pwdtxt .= chr(ord($password[$i-1])-5);
				}
					 }
					 return $pwdtxt;	
			}//End
			
		//Decoding Password===============================================================================
			public function DeCodingPw($password){
				unset($pwdtxt);
				$password = strtoupper($password);    	
					 for($i=1;$i<=strlen($password);$i++){
					if(($i%5)==0){
					$pwdtxt .= chr(ord($password[$i-1])-5);	
				}else{
					$pwdtxt .= chr(ord($password[$i-1])+5);
				}
					 }
					 return $pwdtxt;	
			}//End
}
?>
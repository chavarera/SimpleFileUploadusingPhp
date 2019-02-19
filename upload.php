<?php
	$file_name = $_FILES['image']['name'];
				if(isset($_FILES['image'])){
	      				$errors= array();
	      				
	      				$dir="images/";	      				//Destination Directory Where We Can Upload Images
					$file_name = $_FILES['image']['name'];	      	// Image  name Taken From html
	      				$file_size =$_FILES['image']['size'];           //File Size  of an image
	      				$file_tmp =$_FILES['image']['tmp_name'];	//Temporary Folder Where First Images uploaded
		    	 		$file_type=$_FILES['image']['type'];            //File Type
		    	 		
		    	 		
	      				$file_ext=strtolower(end(explode('.',$file_name))); //To get the File Type Extenssion
	      
	      				$expensions= array("jpeg","jpg","png");		    //Allow Imgae type 
	      
	      
	      			 	//Check File Type If File Type is other Than $expensions it will store the error in array
	      				if(in_array($file_ext,$expensions)=== false){
	         				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	     				 }
	      
	      
	      				//This Will Define the Size Of an Image
	      				if($file_size > 2097152){
	        			 $errors[]='File size must be excately 2 MB';
	     				 }
	      				
	      				
	      				//if $erros is Empty then It Will Move Image From temporary Folder to Ower Destination Folder Directory
	     				 if(empty($errors)==true){
	         				move_uploaded_file($file_tmp,"$dir$file_name");
	      				}else{
	         			print_r($errors);//This will Show Errors If any there
	     				 }
	  			}
	  	
  				 
  	
?>

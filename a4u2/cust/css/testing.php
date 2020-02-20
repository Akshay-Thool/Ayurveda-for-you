<?php 

//	compress("a1.jpg","compress.jpg",50); //function calling

	$source = "a1.jpg";
	$destination = "compress.jpg";
	$quality = 50;

	//Function

		function compress($source, $destination, $quality) {

		$info = getimagesize($source = "a1.jpg");

		if ($info['mime'] == 'image/jpeg') 
			$image = imagecreatefromjpeg($source);

		elseif ($info['mime'] == 'image/gif') 
			$image = imagecreatefromgif($source);

		elseif ($info['mime'] == 'image/png') 
			$image = imagecreatefrompng($source);

		imagejpeg($image, $destination, $quality);

		return $destination;
	}

	$source_img = 'source.jpg';
	$destination_img = 'destination .jpg';

	if(compress($source_img, $destination_img, 20) )
	{
		echo "Successfull";
	}
	else
	{
		echo "something went wrong";
	}


 ?>
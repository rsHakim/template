<?php

namespace Controller;
use Controller\Database as DB;

class Upload extends DB
{

	public function insert($data)
	{
		
		// move_uploaded_file($data['move_upload'], "images/".$data['original_name']);

		// move uploaded ke cloudinary
		\Cloudinary\Uploader::upload($data['move_upload']);

		$sql = $this->prepare("INSERT INTO upload(image_name, slug, original_name) VALUES('$data[image_name]', '$data[slug]', '$data[original_name]')");
		$sql->execute();
		header('location: index.php');
	}

}
<?php 

require 'vendor/autoload.php';

$upload = new \Controller\Upload;

if(isset($_POST["upload"])) {
    $data = array(
        'image_name'    => $_POST['image-name'],
        'slug'          => $_POST['slug'],
        'original_name' => $_FILES["original-name"]["name"],
        'move_upload'   => $_FILES["original-name"]["tmp_name"]
    );
    $upload->insert($data);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Upload</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
  				<center>
                    <form class="contact100-form validate-form" action="" method="POST" enctype="multipart/form-data" >
                        <span class="contact100-form-title">
                            Upload Gambar Anda
                        </span>
                
                        <div class="wrap-input100 validate-input" data-validate = "Image is required">
                            <input class="input100" type="text" name="image-name" placeholder="Nama gambar" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                
                        <div class="wrap-input100 validate-input" data-validate = "Image is required">
                            <input class="input100" type="text" name="slug" placeholder="slug"  required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                
                        <div class="wrap-input100 validate-input" data-validate = "Image is required">
                            <input class="input100" type="file" name="original-name"  required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn" type="submit" name="upload">
                                Upload To Cloudinary
                            </button>
                        </div>
                    </form>
	            </center>
                <!-- <img src="" alt=""> --> 
			</div>
		</div>
	</div>
    <br>
    <br>
    <?php 
        echo cl_image_tag("vwqgaykkjgwndwc6xfce.png") 
    ?> 

<!--===============================================================================================-->
	<script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="asset/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script>

</script>

</body>
</html>

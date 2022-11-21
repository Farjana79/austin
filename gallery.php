<!DOCTYPE html>
<html lang="en">
<!--One Black Dog Media / Gillzsoft---->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Aztec Electic photo gallery">
	<meta name="author" content="Aztec Electric">
	<link rel="icon" href="favicon.ico">
	<title>Photo gallery for Aztec Electric | Austin electrician</title>
	<!-- Bootstrap core CSS -->
	<link href="css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="css/plugins/bootstrap-submenu.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link href="css/plugins/animate.min.css" rel="stylesheet">
	<link href="css/plugins/nivo-slider.css" rel="stylesheet">
	<link href="css/plugins/slick.css" rel="stylesheet">
	<link href="css/plugins/magnific-popup.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Icon Font-->
	<link href="iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDGZ9aC-2VFg3bfVglsBpZ6tbFTVllWNQ"> </script>
</head>

<body class="home">
	<!-- Loader -->
	<div id="loader-wrapper" class="loader-on">
		<div id="loader">
			<div class="loader">
				<div class="bolt one">
					<div class="other"></div>
				</div>
				<div class="bolt two">
					<div class="other"></div>
				</div>
				<div class="bolt three">
					<div class="other"></div>
				</div>loading
			</div>
		</div>
	</div>
	<!-- //Loader -->
	<!-- Header -->
	<header class="page-header">
		<!-- Fixed navbar -->
		<nav class="navbar" id="slide-nav">
			<div class="container">
				<div class="navbar-header">
					<div class="header-top">
						<div class="row">
							<div class="col-sm-4">
								<div class="social-links">
									<ul>

										<li>
										<a  href="https://www.bbb.org/us/tx/austin/profile/electrician/aztec-electric-0825-58863">
											    <img src="images/blogo.png" alt="" class="img-responsive">
											    
											</a>
										</li>

									</ul>
								</div>
							</div>
							<div class="col-sm-4 text-center">
								<div class="logo">
								<h5>AZTEC Electric</h5>
									<a href="index.html"><img src="images/logo.jpg" alt="Austin electrician photo gallery"></a>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="phone">
									<div class="number"><i class="icon icon-telephone"></i><span>512-836-9582</span></div>
									<div class="number"><i class="icon icon-telephone"></i><span>512-913-2392</span></div>
									<div class="under-number">Call us now!</div>
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="navbar-toggle"><i class="icon icon-interface icon-menu"></i><i class="icon icon-cancel"></i></button>
				</div>
				<div id="slidemenu" data-hover="dropdown" data-animations="fadeIn">
					<ul class="nav navbar-nav">
						<li><a href="index.html"><span class="electric-btn"><span class="text">Home</span></span></a></li>
						<li><a href="services.html"><span class="electric-btn"><span class="text">Services</span></span></a></li>
						<li class="dropdown"><a href="aboutus.html" data-toggle="dropdown" data-submenu=""><span class="electric-btn"><span class="text">About Us</span></span><span class="ecaret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="austin-electrical-contractor.html">Electrical Contractor</a></li>	
								<li><a href="testimonials.html">Testimonials</a></li>
								<li><a href="feedback.html">Feedback</a></li>
						</li>
							</ul>
						</li>
						
						<li><a href="products.html"><span class="electric-btn"><span class="text">PRODUCTS</span></span></a>
						</li>
						<li class="active"><a href="gallery.php"><span class="electric-btn"><span class="text">Gallery</span></span></a>
						</li>
						<li><a href="contact.php"><span class="electric-btn"><span class="text">Contact</span></span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- // Header -->
	<!-- Content  -->
	<div id="page-content">
		<!-- Breadcrumbs Block -->

		<div class="container">
			<div class="breadcrumbs">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Gallery</li>
				</ul>
			</div>
		</div>

		<!-- //Breadcrumbs Block -->
		<!-- About us Block -->
		<div class="block">
			<div class="container">
				<h1 class="text-center">Gallery</h1>
				<div class="row">
					
						<?php
/**
  *Link file used create connection 
   and directory Path
   
 */
include_once("Gadmin/link.php");

$categoryName=!empty($_GET['category'])?trim($_GET['category']):'';
$categoryId=!empty($_GET['id'])?trim($_GET['id']):'34';
if(empty($categoryId)){
	header("Location:".$out_access_dir.'/gallery.php');
	exit();
}
 
 
$sql_Category = "SELECT *  FROM  category where id=".$categoryId." ORDER BY id desc";
$resultCat = mysqli_query($conn, $sql_Category); 
if (mysqli_num_rows($resultCat) > 0) {

}else{
	echo "No Category Found";
	exit;
}?>

<?php
  
 
  $sql = "SELECT *  FROM  gallery where category_id=".$categoryId."  ORDER BY title desc";
$resultGallery = mysqli_query($conn, $sql); 
if (mysqli_num_rows($resultGallery) > 0) {
// output data of each row
while($row_gallery = mysqli_fetch_assoc($resultGallery)) {  ?>
        					<div class="col-md-3" style="margin-bottom:15px;">
        					    <a data-fancybox="gallery" style="width:100%; float:left; height:180px; overflow:hidden;" href="<?php echo $imageDir.'/gallery_image/'.$row_gallery['image'];?>"><img src="<?php echo $imageDir.'/gallery_image/'.$row_gallery['image'];?>"></a>
        					</div>
<?php
// print_r($row_cat);
}
}else{
	echo "No Image Found In this Category";
}?>		
				
				
						
				</div>
				<div class="divider"></div>
			</div>
		</div>
		<!-- //About us Block -->
	
	<!-- // Content  -->
	
	<!-- Footer -->
	<div class="page-footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">24/Hour Emergency Service</div>
					<div class="col-sm-1 hidden-xs">&nbsp;</div>
					<div class="col-sm-3">Free Consultations</div>
					<div class="col-sm-1 hidden-xs">&nbsp;</div>
					<div class="col-sm-3">(512) 836-9582</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row footer-row">
				<div class="col-sm-3 col-lg-3">
					<div class="logo">
					<h5>AZTEC ELECTRIC</h5>
						<a href="index.html"><img src="images/logo.jpg" alt="Aztec Electric"></a>
					</div>
					<div class="hidden-xs">
						<div class="copyright">© 2016-20 AZTEC Electric</div>
					</div>
				</div>
				<div class="col-sm-4">
					<ul class="contact-list">
					<div class="title"><h4>Address</h4></div>
						<li><span class="list-label"><b>P</b>hone:  </span> <span class="text">(512) 836-9582 </span></li>
						<li><span class="list-label"><b>P</b>hone:  </span> <span class="text">(512) 913-2392 </span></li>
						<li><span class="list-label"><b>E</b>-mail:</span> <span class="text"><a href="mailto:austinaztecelectric@gmail.com">AustinAztecElectric@gmail.com</a></span></li>
						<li><span class="list-label"><b>A</b>ddress:</span> <span class="text">PO Box 201422 Austin, TX 78720 </span></li>
					</ul>
				</div>
				<div class="col-sm-5">
				<div class="title"><h4>Location On Map</h4></div>
					<div id="footer-map"></div>
				</div>
				<div class="visible-xs text-center">
					<div class="copyright">© 2016-20 AZTEC Electric</div>
					<div class="social-links">
						<!--<ul>
							<li>
								<a class="icon icon-twitter" href="#"></a>
							</li>
							<li>
								<a class="icon icon-facebook" href="#"></a>
							</li>
							<li>
								<a class="icon icon-instagram" href="#"></a>
							</li>
						</ul>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Footer -->

	    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="js/plugins/bootstrap.min.js"></script>
	<script src="js/plugins/jquery.nivo.slider.js"></script>
	<script src="js/plugins/slick.min.js"></script>
	<script src="js/plugins/jquery.magnific-popup.min.js"></script>
	<script src="js/plugins/imagesloaded.pkgd.min.js"></script>
	<script src="js/plugins/isotope.pkgd.min.js"></script>
	<script src="js/custom.js"></script>


</body>

</html>
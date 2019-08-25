<?php 
include'config.php';
// $newsCatagory =  $_REQUEST['newsCatagory'];
// $sqlForNews = "select * from news where nId !=(select max(nId) from news) and newsCatagory='$newsCatagory' order by nId desc" ;
// $queryForNews = mysqli_query($con,$sqlForNews);
?>
<!DOCTYPE html>
<html lang="bn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Portal</title>
    <!-- favicon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
	 <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Off Canvas Menu -->
    <link href="assets/css/offcanvas.min.css" rel="stylesheet">

    <!--Theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style type="text/css">
		.footenavbar {
	    border-radius  : 0;
	    padding        : 0px 0;
	    background     : transparent;
	    margin         : 0;
	    line-height: 30px;
	    font-size      : 16px;
	    text-transform : uppercase;
	    }
		.footenavbar li a {
	    color       : #fff;
	    font-weight : 400;
	    padding     : 15px 15px 15px 5px;
	    font-size   : 16px;
	    font-family: 'Oswald', sans-serif;
	    }
		.footenavbar li a:hover,
		.footenavbar li.active a {
	    color      : #ff6102;
	    background : transparent;
	    }
    </style>

  </head>
<body>
<div id="main-wrapper">

        <!-- Header Section -->
	<header>
	    <div class="container">

	     	<div class="header-section" style="border-bottom: 1px solid #e4d7d7;">
				<div class="row">
		    	 	<div class="col-md-3">
						<div>
						<a href="index.php" style="padding: 5px;"><img class="img-responsive" src="assets/img/logo.png" alt=""></a>
						</div><!--logo-->

		    	 	</div><!--col-md-3-->

		    	 	<div class="col-md-6">
						<div class="header_ad_banner">
						<a  style="padding: 5px;"><img class="img-responsive" src="assets/img/banner.png" alt=""></a>
						</div>
						<div class="text-center">
							<script type="text/javascript" src="http://bangladate.appspot.com/index1.php"></script> 
							<?php
							$currentDate = date("l, F j, Y");
							$engDATE = array(1,2,3,4,5,6,7,8,9,0, 'January', 'February', 'March','April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
							$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার',' বুধবার','বৃহস্পতিবার','শুক্রবার' );
							$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
							echo "$convertedDATE";
							?>
						</div>
		    	 	</div><!--col-md-6-->

		    	 	<div class="col-md-3">
						<div class="pull-right">
							<form class="navbar-form" method="GET" action="searchResult.php" role="search">
								<div class="input-group">
									<input class="form-control" placeholder="Search" name="q" type="text">
									<div class="input-group-btn">
										<button class="btn btn-default" name="search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
								</div>
							</form>
						</div>
		    	 	</div><!--col-md-3-->
		    	</div> <!--row--><br>
	     	</div><!--header-section-->
	    </div><!-- /.container -->

		<nav class="navbar main-menu navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>
				<div id="navbar" class="collapse navbar-collapse sidebar-offcanvas" style="background-color: #353434;color: white;">
					<ul class="nav navbar-nav">
						<li><a href="index.php">প্রচ্ছদ</a></li>
						<?php 
						$sqlForViewMenu = "select * from menu";
	                    $queryForViewMenu = mysqli_query($con,$sqlForViewMenu);
	                    while($infoMenu = mysqli_fetch_array($queryForViewMenu)) {
						?>
						<li><a href="news.php?newsCatagory=<?php echo $infoMenu['menuName']; ?>"><?php echo $infoMenu['menuName']; ?></a></li>
						<?php } ?>
						<li><a href="video.php"> ভিডিও </a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- .navbar -->
	</header>

    <!-- breaking news -->
    <div class="container" style="padding:5px 0 0 0;">
		<div class="col-md-2 col-sm-4">
			<marquee behavior="alternate" style="color: white; background: #ff6102; font-size: 20px;">
				<p>সদ্য সংবাদ</p>
			</marquee>
		</div>
		<div class="col-md-10 col-sm-8" style="padding:5px 0 0 0;">
			<marquee style="color: black; font-size: 18px;">
				<ul class="list-inline">
					<?php 
						$sqlForViewBreaking = "select * from breakingnews order by bId desc limit 7";
		                $queryForViewBreaking = mysqli_query($con,$sqlForViewBreaking);
		                while($infoBreaking = mysqli_fetch_array($queryForViewBreaking)) {
					 ?>
					 <li class="list-inline-item fa fa-envelope-open-o"><?php echo '&nbsp;&nbsp;'.$infoBreaking['news']; ?></li>
					<?php } ?>
				</ul>
			</marquee>
		</div>
	</div>

    <!-- Feature Video Item -->
    <section id="feature_video_item" class="feature_video_item section_wrapper">
		<div class="container">
			<div id="more_news_item" class="more_news_item">
				<div class="more_news_heading"><h2><a href="#">ভিডিও </a></h2></div>
				<div class="ad">
					<img class="img-responsive" src="assets/img/ad9.gif" alt="img" />
				</div><!--ad-->
				<div class="row">
					
					<?php 
						$sqlForVideo = "select * from video order by vId limit 18";
	                    $queryForVideo = mysqli_query($con,$sqlForVideo);
	                    while($infoVideo = mysqli_fetch_array($queryForVideo)) {
	                    	?>
					<div class="col-md-4">
						<div class="feature_news_item">
	            			<div class="item">
								<div class="video_thumb"><?php echo $infoVideo['video']; ?></div>
								<div class="video_info">
									<div class="video_item_title"><h3><a href="singleVideo.php?vId=<?php echo $infoVideo['vId']; ?>"><?php echo $infoVideo['tittle']; ?></a></h3></div><!--video_item_title-->
									<div class="item_meta"><a><?php echo $infoVideo['postDate']." by ".$infoVideo['postedBy']; ?></a></div><!--item_meta-->
									<div class="item_content" style="height:auto; max-height:68px; overflow:hidden; text-justify: inter-word;"><?php echo $infoVideo['description']; ?></div><!--item_content-->
								</div><!--video_info-->
							    
							</div><!--item-->
	        			</div><!--feature_news_item-->
					</div><!--col-xs-4-->
					<?php } ?>
					
				</div><!--row-->
				<div class="ad">
					<img class="img-responsive" src="assets/img/ad10.png" alt="img" />
				</div><!--ad-->
			</div><!--more_news_item-->
		</div><!--container-->
	</section>

<!-- Footer Section -->
<footer class="footer_section section_wrapper" >
	<div class="footer_top_section">
		<div class="container">
			<div class="row">
				<div class="footenavbar">
				<div class="col-md-3 col-xs-6">
					<ul>
						<li><a href="index.php">প্রচ্ছদ</a></li>
						<li><a href="news.php?newsCatagory=বাংলাদেশ">বাংলাদেশ</a></li>
						<li><a href="news.php?newsCatagory=আন্তর্জাতিক">আন্তর্জাতিক</a></li>
						<li><a href="news.php?newsCatagory=তথ্য ও প্রযুক্তি">তথ্য ও প্রযুক্তি</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-6">
					<ul>						
						<li><a href="news.php?newsCatagory=শিক্ষা">শিক্ষা</a></li>
						<li><a href="news.php?newsCatagory=খেলাধুলা">খেলাধুলা</a></li>
						<li><a href="news.php?newsCatagory=বিনোদন">বিনোদন</a></li>
						<li><a href="news.php?newsCatagory=চাকরী বাজার">চাকরী বাজার</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-6">
					<ul>
						<li><a href="news.php?newsCatagory=লাইফস্টাইল">লাইফস্টাইল</a></li>
						<li><a href="news.php?newsCatagory=শিল্প সাহিত্য">শিল্প সাহিত্য</a></li>
						<li><a href="news.php?newsCatagory=অক্ষর-ম্যাগাজিন">অক্ষর-ম্যাগাজিন</a></li>
						<li><a href="news.php?newsCatagory=ক্যাম্পাস">ক্যাম্পাস</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-6">
					<ul>												
						<li><a href="news.php?newsCatagory=আইন-কানুন">আইন-কানুন</a></li>
						<li><a href="news.php?newsCatagory=স্বাস্থ্য সেবা ">স্বাস্থ্য সেবা </a></li>
						<li><a href="news.php?newsCatagory=আবহাওয়া ও জলবায়ু ">আবহাওয়া ও জলবায়ু </a></li>
						<li><a href="video.php"> ভিডিও </a></li>
					</ul>
				</div>
			</div>
			</div><!--row-->
		</div><!--container-->
	</div><!--footer_top_section-->
	<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

	<div class="copyright-section">
		<div class="container">
			<div class="row">

				<div class="col-md-12 text-left">
					<div class="copyright">© স্বত্ব  নিউজ নেশন  2018<br>প্রকাশকঃ রবিউল আলম সাহীন<br>সম্পাদকঃ এবি এ শাকিল<br>পান্থপথ, ঢাকা-১২০৫। ই-মেইলঃ info@newsnationbd.com</div>
				</div><!--col-xs-6-->
			</div><!--row-->
		</div><!--container-->
	</div><!--copyright-section-->
</footer>
</div> <!--main-wrapper-->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/jquery.min.js"></script>

<!-- Owl carousel -->
<script src="assets/js/owl.carousel.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Theme Script File-->
<script src="assets/js/script.js"></script>

<!-- Off Canvas Menu -->
<script src="assets/js/offcanvas.min.js"></script>



</body>
</html>

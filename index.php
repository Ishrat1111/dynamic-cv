<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">
  <head>
<meta name="p:domain_verify" content="5aa6f08e04d1f8e7c26f25c3f1baa316"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128940987-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128940987-1');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Portal</title>
    <meta property="og:url"           content="https://newsnationbd.com/" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="" />
	<meta property="og:description"   content="24H Online Update" />
	<meta property="og:image"         content="https://newsnationbd.com/assets/img/logo.png" />
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
    	/*font*/
    	
    
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
	    @font-face {
		    font-family: 'myFirstFont';
		    src: url('asset/fonts/NikoshBAN.ttf');
		}
		html, body, div, span, h1, h2, h3, h4, h5, h6, p{
		  font-family: myFirstFont;
		  font-weight: 72px;
		}
    </style>

  </head>
<body>
	<div class="loader"></div>
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
 <!-- Feature Carousel Section -->
    <section id="feature_category_section" class="feature_category_section section_wrapper">
	<div class="container">
	    <div class="row">
	    	<div class="col-md-6">
	    		<div class="feature_news_carousel">
					<div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
					    <!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<?php 
							$sqlForEdu = "select * from news where newsCatagory='খেলাধুলা' order by nId desc";
		                    $queryForEdu = mysqli_query($con,$sqlForEdu);
		                    $infoEdu = mysqli_fetch_array($queryForEdu);
							?>
							<div class="item active feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
										<img style="height: 260px; width: 100%;" class="img-responsive" src="images/<?php echo $infoEdu['img']; ?>" alt="<?php echo $infoEdu['newsCatagory']; ?>">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="single.php?nId=<?php echo $infoEdu['nId']; ?>"><?php echo $infoEdu['tittle']; ?></a></h2>
										</div>
										<div class="item_meta"><a><?php echo $infoEdu['postDate'].", by:"; ?></a><a><?php echo $infoEdu['postedBy']; ?></a></div>
									</div> <!--item_title_date-->
								</div>	<!--item_wrapper-->
							    <div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoEdu['description']; ?>
								</div><!--item_content-->

							</div><!--feature_news_item-->
						

							<?php 
							$sqlForFun = "select * from news where newsCatagory='বিনোদন' order by nId desc";
		                    $queryForFun = mysqli_query($con,$sqlForFun);
		                    $infoFun = mysqli_fetch_array($queryForFun);
							?>
							<div class="item feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
										<img style="height: 260px; width: 100%;" class="img-responsive" src="images/<?php echo $infoFun['img']; ?>" alt="<?php echo $infoFun['newsCatagory']; ?>">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="single.php?nId=<?php echo $infoFun['nId']; ?>"><?php echo $infoFun['tittle']; ?></a></h2>
										</div>
                                        <div class="item_meta"><a><?php echo $infoFun['postDate'].", by:"; ?></a><a><?php echo $infoFun['postedBy']; ?></a></div>
									</div> <!--item_title_date-->
								</div> <!--item_wrapper-->

								<div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoFun['description']; ?>
								</div><!--item_content-->
							</div><!--feature_news_item-->

							<?php 
							$sqlForCampus = "select * from news where newsCatagory='বাংলাদেশ' order by nId desc";
		                    $queryForCampus = mysqli_query($con,$sqlForCampus);
		                    $infoCampus = mysqli_fetch_array($queryForCampus);
							?>
							<div class="item feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
										<img style="height: 260px; width: 100%;" class="img-responsive" src="images/<?php echo $infoCampus['img']; ?>" alt="<?php echo $infoCampus['newsCatagory']; ?>">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="single.php?nId=<?php echo $infoCampus['nId']; ?>"><?php echo $infoCampus['tittle']; ?></a></h2>
										</div>
                                        <div class="item_meta"><a><?php echo $infoCampus['postDate'].", by:"; ?></a><a><?php echo $infoCampus['postedBy']; ?></a></div>
									</div> <!--item_title_date-->
								</div> <!--item_wrapper-->

								<div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoCampus['description']; ?>
								</div><!--item_content-->
							</div><!--feature_news_item-->
					  		<!-- Left and right controls -->
							<div class="control-wrapper">
								<a class="left carousel-control" href="#featured-news-carousal" role="button" data-slide="prev">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</a>
								<a class="right carousel-control" href="#featured-news-carousal" role="button" data-slide="next">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</a>
							</div>
						</div><!--carousel-inner-->
	    			</div><!--carousel-->
	    		</div><!--feature_news_carousel-->
	    	</div><!--col-md-6-->

	    	<div class="col-md-6">
	    		<div class="feature_news_static">
		    		<div class="row">
						<div id="more_news_item" class="more_news_item">
					<div class="row">
						<?php 
						$sqlForJob = "select * from news where newsCatagory='চাকরী বাজার' order by nId desc";
	                    $queryForJob = mysqli_query($con,$sqlForJob);
	                    $infoJob = mysqli_fetch_array($queryForJob);
						?>
						<div class="col-md-6">
							<div class="feature_news_item">
	                			<div class="item">
									<div class="item_wrapper">
										<div class="item_img">
											<img style="height: 260px; width: 100%;" class="img-responsive" src="images/<?php echo $infoJob['img']; ?>" alt="<?php echo $infoJob['newsCatagory']; ?>">
										</div><!--item_img-->
										<div class="item_title_date">
											<div class="news_item_title">
												<h3><a href="single.php?nId=<?php echo $infoJob['nId']; ?>"><?php echo $infoJob['tittle']; ?></a></h3>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a><?php echo $infoJob['postDate'].", by:"; ?></a><a><?php echo $infoJob['postedBy']; ?></a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoJob['description']; ?>
									</div><!--item_content-->

								</div><!--item-->
	            			</div><!--feature_news_item-->
						</div><!--col-xs-6-->



						<?php 
						$sqlForSilpo = "select * from news where newsCatagory='শিল্প সাহিত্য' order by nId desc";
	                    $queryForSilpo = mysqli_query($con,$sqlForSilpo);
	                    $infoSilpo = mysqli_fetch_array($queryForSilpo);
						?>
						<div class="col-md-6">
							<div class="feature_news_item">
	                			<div class="item">
									<div class="item_wrapper">
										<div class="item_img">
											<img style="height: 260px; width: 100%;" class="img-responsive" src="images/<?php echo $infoSilpo['img']; ?>" alt="<?php echo $infoSilpo['newsCatagory']; ?>">
										</div><!--item_img-->
										<div class="item_title_date">
											<div class="news_item_title">
												<h3><a href="single.php?nId=<?php echo $infoSilpo['nId']; ?>"><?php echo $infoSilpo['tittle']; ?></a></h3>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a><?php echo $infoSilpo['postDate'].", by:"; ?></a><a><?php echo $infoSilpo['postedBy']; ?></a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoSilpo['description']; ?>
									</div><!--item_content-->

								</div><!--item-->
	            			</div><!--feature_news_item-->
						</div><!--col-xs-6-->

					</div><!--row-->
				</div><!--more_news_item-->

					</div><!--row-->
	    		</div><!--feature_news_static-->
	    	</div><!--col-md-6-->
	    </div><!--row-->
	</div><!--container-->
</section><!--feature_news_section-->
    

    <!-- Feature Category Section & sidebar -->
<section id="feature_category_section" class="feature_category_section section_wrapper">
	<div class="container">
		<div class="row">
		   	<div class="col-md-9">
		   		<div class="category_layout">
		   			<div class="item_caregory blue"><h2><a href="#">খেলাধুলা</a></h2></div>
					<div class="row">
			   			<div class="col-md-7">
							<div class="item active feature_news_item">
								<?php 				   				
				   				$sqlForPlay = "select * from news where newsCatagory='খেলাধুলা' order by nId desc";
		                        $queryForPlay = mysqli_query($con,$sqlForPlay);
		                        $infoPlay = mysqli_fetch_array($queryForPlay);
				   				?>

								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="images/<?php echo $infoPlay['img']; ?>" alt="<?php echo $infoPlay['newsCatagory']; ?>">
									</div><!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="single.php?nId=<?php echo $infoPlay['nId']; ?>"><?php echo $infoPlay['tittle']; ?></a></h2>
										</div><!--news_item_title-->
                                        <div class="item_meta"><a><?php echo $infoPlay['postDate'].", by:"; ?></a><a><?php echo $infoPlay['postedBy']; ?></a></div>
									</div><!--item_title_date-->
								</div><!--item_wrapper-->
							    <div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoPlay['description']; ?>
							    </div>

							</div><!--feature_news_item-->
			   			</div><!--col-md-7-->

			   			<div class="col-md-5">
							<div class="media_wrapper">
								<?php 
								$sqlForPlay2 = "select * from news where nId != (select max(nId) from news) and newsCatagory='খেলাধুলা' order by nId desc limit 3";
		                        $queryForPlay2 = mysqli_query($con,$sqlForPlay2);
		                        while($infoPlay2 = mysqli_fetch_array($queryForPlay2)) {
								?>
								<div class="media" style="height: 120px;">
									<div class="media-left">
										<a href="single.php?nId=<?php echo $infoPlay2['nId']; ?>"><img class="media-object" src="images/<?php echo $infoPlay2['img']; ?>" alt="<?php echo $infoPlay2['newsCatagory']; ?>" height="80" width="80"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="single.php?nId=<?php echo $infoPlay2['nId']; ?>"><?php echo $infoPlay2['tittle']; ?>
										</a></h3>

										<p style="height:auto; max-height:40px; overflow:hidden; text-justify: inter-word;"><?php echo $infoPlay2['description']; ?></p>

									</div><!--media-body-->
								</div><!--media-->
								<?php 
								}
								?>
							</div><!--media_wrapper-->
			   			</div><!--col-md-5-->
			   		</div><!--row-->
		   		</div><!--category_layout-->

		   		<div class="category_layout">
			   		<div class="item_caregory red"><h2><a href="category.php"></a>বাংলাদেশ</h2></div>
						<div class="row">
				   			<div class="col-md-7">
				   				<?php 				   				
				   				$sqlForBang = "select * from news where newsCatagory='বাংলাদেশ' order by nId desc";
		                        $queryForBang = mysqli_query($con,$sqlForBang);
		                        $infoBang = mysqli_fetch_array($queryForBang);
				   				?>
								<div class="item feature_news_item">
									<div class="item_wrapper">
										<div class="item_img">
											<img class="img-responsive" src="images/<?php echo $infoBang['img']; ?>" alt="<?php echo $infoBang['newsCatagory']; ?>">
										</div><!--item_img-->
										<div class="item_title_date">
											<div class="news_item_title">
												<h2><a href="single.php?nId=<?php echo $infoBang['nId']; ?>"><?php echo $infoBang['tittle']; ?></a></h2>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a href="#"><?php echo $infoBang['postDate'].", by:"; ?></a><a href="#"><?php echo $infoBang['postedBy']; ?></a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoBang['description']; ?>
								    </div><!--item_content-->

								</div><!--feature_news_item-->
				   			</div><!--col-md-7-->

				   			<div class="col-md-5">
								<div class="media_wrapper">
									<?php 
									$sqlForBang2 = "select * from news where nId != (select max(nId) from news) and newsCatagory='বাংলাদেশ' order by nId desc limit 3";
			                        $queryForBang2 = mysqli_query($con,$sqlForBang2);
			                        while($infoBang2 = mysqli_fetch_array($queryForBang2)) {
									?>
									<div class="media" style="height: 120px;">
										<div class="media-left">
											<a href="single.php?nId=<?php echo $infoBang2['nId']; ?>"><img class="media-object" src="images/<?php echo $infoBang2['img']; ?>" alt="<?php echo $infoBang2['newsCatagory']; ?>" height="80" width="80"></a>
										</div><!--media-left-->
										<div class="media-body">
											<h3 class="media-heading"><a href="single.php?nId=<?php echo $infoBang2['nId']; ?>"><?php echo $infoBang2['tittle']; ?>
											</a></h3>

											<p style="height:auto; max-height:40px; overflow:hidden; text-justify: inter-word;"><?php echo $infoBang2['description']; ?></p>

										</div><!--media-body-->
									</div><!--media-->
									<?php 
									}
									?>
								</div><!--media_wrapper-->

				   			</div><!--col-md-5-->
				   		</div><!--row-->
			   		</div><!--category_layout-->

		   		<div class="category_layout">
		   			<div class="item_caregory blue"><h2><a href="#">আন্তর্জাতিক </a></h2></div>
					<div class="row">
			   			<div class="col-md-7">
							<div class="item active feature_news_item">
								<?php 				   				
				   				$sqlForInter = "select * from news where newsCatagory='আন্তর্জাতিক' order by nId desc";
		                        $queryForInter = mysqli_query($con,$sqlForInter);
		                        $infoInter = mysqli_fetch_array($queryForInter);
				   				?>

								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="images/<?php echo $infoInter['img']; ?>" alt="<?php echo $infoInter['newsCatagory']; ?>">
									</div><!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="single.php?nId=<?php echo $infoInter['nId']; ?>"><?php echo $infoInter['tittle']; ?></a></h2>
										</div><!--news_item_title-->
                                        <div class="item_meta"><a><?php echo $infoInter['postDate'].", by:"; ?></a><a><?php echo $infoInter['postedBy']; ?></a></div>
									</div><!--item_title_date-->
								</div><!--item_wrapper-->
							    <div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoInter['description']; ?>
							    </div>

							</div><!--feature_news_item-->
			   			</div><!--col-md-7-->

			   			<div class="col-md-5">
							<div class="media_wrapper">
								<?php 
								$sqlForInter2 = "select * from news where nId != (select max(nId) from news) and newsCatagory='আন্তর্জাতিক' order by nId desc limit 3";
		                        $queryForInter2 = mysqli_query($con,$sqlForInter2);
		                        while($infoInter2 = mysqli_fetch_array($queryForInter2)) {
								?>
								<div class="media" style="height: 120px;">
									<div class="media-left">
										<a href="single.php?nId=<?php echo $infoInter2['nId']; ?>"><img class="media-object" src="images/<?php echo $infoInter2['img']; ?>" alt="<?php echo $infoInter2['newsCatagory']; ?>" height="80" width="80"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="single.php?nId=<?php echo $infoInter2['nId']; ?>"><?php echo $infoInter2['tittle']; ?>
										</a></h3>

										<p style="height:auto; max-height:40px; overflow:hidden; text-justify: inter-word;"><?php echo $infoInter2['description']; ?></p>

									</div><!--media-body-->
								</div><!--media-->
								<?php 
								}
								?>
							</div><!--media_wrapper-->
			   			</div><!--col-md-5-->
			   		</div><!--row-->
		   		</div><!--category_layout-->



		   		<div class="category_layout">
		   			<div class="item_caregory teal"><h2><a>তথ্য ও যোগাযোগ প্রযুক্তি</a></h2></div>
					<div class="row">
			   			<div class="col-md-7">
							<div class="item active feature_news_item">
								<?php 				   				
				   				$sqlForICT = "select * from news where newsCatagory='তথ্য ও প্রযুক্তি' order by nId desc";
		                        $queryForICT = mysqli_query($con,$sqlForICT);
		                        $infoICT = mysqli_fetch_array($queryForICT);
				   				?>

								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="images/<?php echo $infoICT['img']; ?>" alt="<?php echo $infoICT['newsCatagory']; ?>">
									</div><!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="single.php?nId=<?php echo $infoICT['nId']; ?>"><?php echo $infoICT['tittle']; ?></a></h2>
										</div><!--news_item_title-->
                                        <div class="item_meta"><a><?php echo $infoICT['postDate'].", by:"; ?></a><a><?php echo $infoICT['postedBy']; ?></a></div>
									</div><!--item_title_date-->
								</div><!--item_wrapper-->
							    <div class="item_content" style="height:auto; max-height:52px; overflow:hidden; text-justify: inter-word;"><?php echo $infoICT['description']; ?>
							    </div>

							</div><!--feature_news_item-->
			   			</div><!--col-md-7-->

			   			<div class="col-md-5">
							<div class="media_wrapper">
								<?php 
								$sqlForICT2 = "select * from news where nId != (select max(nId) from news) and newsCatagory='তথ্য ও প্রযুক্তি' order by nId desc limit 3";
		                        $queryForICT2 = mysqli_query($con,$sqlForICT2);
		                        while($infoICT2 = mysqli_fetch_array($queryForICT2)) {
								?>
								<div class="media" style="height: 120px;">
									<div class="media-left">
										<a href="single.php?nId=<?php echo $infoICT2['nId']; ?>"><img class="media-object" src="images/<?php echo $infoICT2['img']; ?>" alt="<?php echo $infoICT2['newsCatagory']; ?>" height="80" width="80"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="single.php?nId=<?php echo $infoICT2['nId']; ?>"><?php echo $infoICT2['tittle']; ?>
										</a></h3>

										<p style="height:auto; max-height:40px; overflow:hidden; text-justify: inter-word;"><?php echo $infoICT2['description']; ?></p>

									</div><!--media-body-->
								</div><!--media-->
								<?php 
								}
								?>
							</div><!--media_wrapper-->
			   			</div><!--col-md-5-->
			   		</div><!--row-->
		   		</div><!--category_layout-->

		   		<div id="more_news_item" class="more_news_item">
		   			<div class="more_news_heading"><h2><a href="#">অন্যান্য খবর </a></h2></div>
					<div class="row">

						<div class="single_related_news">
							<div class="media_wrapper">
								<?php

								$sqlForNews = "select * from news  where nId !=(select max(nId) from news) order by nId desc limit 6" ;
								$queryForNews = mysqli_query($con,$sqlForNews);

		                        while($infoMore = mysqli_fetch_array($queryForNews)) {
								?>
								<div class="col-md-6">
									<div class="media" style="height: 120px;">
										<div class="media-left">
											<a href="#"><img class="media-object" src="images/<?php echo $infoMore['img']; ?>" alt="<?php echo $infoMore['newsCatagory']; ?>"  height="100" width="100"></a>
										</div><!--media-left-->
										<div class="media-body">
											<h4 class="media-heading"><a href="single.php?nId=<?php echo $infoMore['nId']; ?>"><?php echo $infoMore['tittle']; ?>
											</a></h4>
											<div class="media_meta"><a><?php echo $infoMore['postDate'].", by:"; ?></a><a><?php echo $infoMore['postedBy']; ?></a></div>
											<div class="media_content"><p style="height:auto; max-height:60px; overflow:hidden;"><?php echo $infoMore['description']; ?></p>
		                                    </div><!--media_content-->
										</div><!--media-body-->
									</div><!--media-->
								</div>
								<?php
								}
								?>
							</div><!--media_wrapper-->
						</div><!--single_related_news-->
						<div class="ad">
							<img class="img-responsive" src="assets/img/ad4.png" alt="img" />
						</div><!--ad-->

					</div><!--row-->
				</div><!--more_news_item-->
		   	</div><!--col-md-9-->

		   	<div class="col-md-3">

				<div class="tab sitebar">
					<ul class="nav nav-tabs">
						<li class="active"><a  href="#1" data-toggle="tab">সর্বশেষ</a></li>
						<li><a href="#2" data-toggle="tab">জনপ্রিয়</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="1">
							<?php 
							$sqlForSes = "select * from news order by nId desc limit 6";
	                        $queryForSes = mysqli_query($con,$sqlForSes);
	                        while($infoSes = mysqli_fetch_array($queryForSes)) {
							?>
							<div class="media">
								<div class="media-left">
									<a href="#"><img class="media-object" src="images/<?php echo $infoSes['img']; ?>" alt="<?php echo $infoSes['newsCatagory']; ?>" height="80" width="80"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h4 class="media-heading"><a href="single.php?nId=<?php echo $infoSes['nId']; ?>"><?php echo $infoSes['tittle']; ?></a></h4>
								</div><!--media-body-->
							</div><!--media-->
							<?php } ?>
						</div><!--tab-pane-->

						<div class="tab-pane" id="2">
							<?php 
							$sqlForJonoprio = "select * from news order by nId asc limit 6";
	                        $queryForJonoprio = mysqli_query($con,$sqlForJonoprio);
	                        while($infoJonoprio = mysqli_fetch_array($queryForJonoprio)) {
							?>
							<div class="media">
								<div class="media-left">
									<a href="single.php?nId=<?php echo $infoJonoprio['nId']; ?>"><img class="media-object" src="images/<?php echo $infoJonoprio['img']; ?>" alt="<?php echo $infoJonoprio['newsCatagory']; ?>" height="80" width="80"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h4 class="media-heading"><a href="single.php?nId=<?php echo $infoJonoprio['nId']; ?>"><?php echo $infoJonoprio['tittle']; ?></a></h4>
								</div><!--media-body-->
							</div><!--media-->
							<?php } ?>

						</div><!--tab-pane-->
					</div><!--tab-content-->
				</div><!--tab-->

				<div class="ad">
					<a href="http://www.bdjobs.com/"><img class="img-responsive" src="images/adjob.jpg" alt="img" /></a>
				</div><!--ad-->

                <div class="most_comment">
                    <div class="sidebar_title">
                        <!-- <h2> জনপ্রিয় পোষ্টগুলি</h2> -->
                    </div>
                    <?php 
                    $sqlForJonoprio2 = "select * from news order by nId asc limit 0";
                    $queryForJonoprio2 = mysqli_query($con,$sqlForJonoprio2);
                    while($infoJonoprio2 = mysqli_fetch_array($queryForJonoprio2)) {
                    ?>
                    <div class="media">
                        <div class="media-left">
                            <a href="single.php?nId=<?php echo $infoJonoprio2['nId']; ?>"><img class="media-object" src="images/<?php echo $infoJonoprio2['img']; ?>" alt="<?php echo $infoJonoprio2['newsCatagory']; ?>" height="80" width="80"></a>
                        </div><!--media-left-->
                        <div class="media-body">
                            <h3 class="media-heading"><a href="single.php?nId=<?php echo $infoJonoprio2['nId']; ?>"><?php echo $infoJonoprio2['tittle']; ?></a></h3>
                             <div class="comment_box">
                                <!-- <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                 <div class="comments"><a href="#">9 Comments</a></div> -->
                             </div><!--comment_box-->
                        </div><!--media-body-->
                    </div><!--media-->
                	<?php } ?>

                </div><!--most_comment-->
                <div class="ad">
					<img class="img-responsive" src="assets/img/ad3.gif" alt="img" />
				</div><!--ad-->
			</div>
		</div>
	</section><!--feature_category_section-->
	
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

<script type="text/javascript">
	// page loader function
	$(window).load(function() {
	    $(".loader").fadeOut("slow");
	});

</script>

</body>
</html>

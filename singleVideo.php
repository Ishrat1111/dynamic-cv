<?php 
include'config.php';
$message = "";
$vId =  $_REQUEST['vId'];
$sqlForNews = "select * from video where vId='$vId'";
$queryForNews = mysqli_query($con,$sqlForNews);
$info = mysqli_fetch_array($queryForNews);
if (isset($_POST['submitComment'])) {
	$name = $_POST['name'];
	$comment = $_POST['message'];
	$date = date("d-m-Y");
	$sqlForComment = " insert into vcomment (name,message,vId,date) values ('$name','$comment','$vId','$date') ";
    $queryForComment = mysqli_query($con,$sqlForComment);

    if ($queryForComment) {
      $message = '<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Thanks for your comment..</strong>
    </div>';
  }
  else{
     $message = '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sending faild</strong>
    </div>';
  }
}
$sql="select * from video where vId='".$vId."' ";
 
$res=mysqli_query($con,$sql);
$data=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="bn">
  <head>
  	<meta property="og:url"           content="https://www.newsnationbd.com/singleVideo.php?vId=<?php echo $data['vId']; ?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo $data['tittle']; ?>" />
	<meta property="og:description"   content="<?php echo $data['description']; ?>" />
	<meta property="og:image"         content="https://www.newsnationbd.com/assets/img/banner.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $info['newsCatagory'] ?></title>
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
    <link href="assets/css/owl.theme.css" rel="stylesheet">

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
<body id="page-top" data-spy="scroll" data-target=".navbar">
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

	<!-- Feature Category Section & sidebar -->
	<section id="feature_category_section" class="feature_category_section single-page section_wrapper">
	<div class="container">
		<div class="row">
		   	 <div class="col-md-9">
				<div class="single_content_layout">
					<div class="item feature_news_item">
						<div class="item_img">
							<?php echo $info['video']; ?>
						</div><!--item_img-->
							<div class="item_wrapper">
								<div class="news_item_title">
									<h2><a href="#"><?php echo $info['tittle']; ?></a></h2>
								</div><!--news_item_title-->
								<div class="item_meta"><a href="#"><?php echo $info['postDate']; ?>,</a> by:<a href="#"><?php echo $info['postedBy']; ?></a></div>

									<div class="single_social_icon">
										<!-- <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fnewsnationbd.com%2FsingleVideo.php%3FvId%3D<?php echo $vId;?>&layout=button_count&size=large&mobile_iframe=true&appId=711090262605353&width=84&height=28" width="84" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
										<!-- google plus-->
										<!-- Place this tag where you want the share button to render. -->
										<!-- <div class="g-plus" data-action="share" data-height="24" data-href="https://newsnationbd.com/singleVideo.php?vId=<?php echo $vId; ?>"></div> -->

										<!-- Place this tag after the last share tag. -->
										<!-- <script type="text/javascript">
										  (function() {
										    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
										    po.src = 'https://apis.google.com/js/platform.js';
										    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
										  })();
										</script> -->
										<div class="ad">
											<img class="img-responsive" src="assets/img/ad9.gif" alt="Advertisement">
										</div>

									</div> <!--social_icon1-->

									<div class="item_content" style="height:auto; overflow:hidden;text-align: justify; text-justify: inter-word;">
										<?php echo $info['description']; ?>
										<br /><br />
									</div><!--item_content-->

							</div><!--item_wrapper-->
					</div><!--feature_news_item-->

					<div class="ad">
						<img class="img-responsive" src="assets/img/ad10.png" alt="Advertisement">
					</div>

					<div class="add_a_comment">
						<div class="single_media_title"><h2>Add a Comment</h2></div>
						<div class="comment_form">
							<div class="col-xs-8">
								<span><?php echo $message; ?></span>
								<form method="post">
		                            <div class="form-group">
		                                <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
		                            </div>
		                            <div class="form-group comment">
		                                <textarea class="form-control" name="message" id="inputComment" placeholder="Comment"></textarea>
		                            </div>
		                            <button type="submit" class="btn btn-submit red" name="submitComment">Submit</button>
		                        </form>
		                        <?php 
			                    $sqlForSeeComment = "select * from vcomment order by vcId desc";
		                        $queryForSeeComment = mysqli_query($con,$sqlForSeeComment);
		                        while($infoSeeComment = mysqli_fetch_array($queryForSeeComment)) {
		                        	echo '=> '.$infoSeeComment['name'].'<br>'.$infoSeeComment['message'].'<br>';
		                        }
			                    ?>
		                    </div>
		                    <div class="col-xs-4">
		                    	<div class="ad">
									<img class="img-responsive" src="assets/img/ad12.png" alt="Advertisement">
								</div>
		                    </div>
		                    
                        </div><!--comment_form-->
					</div><!--add_a_comment-->

					    <!-- Feature Video Item -->
    <section id="feature_video_item" class="feature_video_item section_wrapper">
		<div class="container">
			<div id="more_news_item" class="more_news_item">
				<div class="more_news_heading"><h2><a href="#">অন্যান্য খবর </a></h2></div>
				<div class="row">
					<?php 
						$sqlForVideo = "select * from video where vId != '$vId' order by vId desc limit 6";
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
			</div><!--more_news_item-->
		</div><!--container-->
	</section>
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


				</div><!--single_content_layout-->
		   	 </div>

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
							$sqlForJonoprio = "select * from news order by nId asc limit 4";
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
					<img class="img-responsive" src="assets/img/ad2.jpg" alt="img" />
				</div><!--ad-->

                <div class="most_comment">
                    <div class="sidebar_title">
                        <!-- <h2> জনপ্রিয় পোষ্টগুলি</h2> -->
                    </div>
                    <?php 
                    $sqlForJonoprio2 = "select * from news order by nId asc limit 6";
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


</body>
</html>

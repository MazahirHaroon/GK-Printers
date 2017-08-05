<!DOCTYPE html>
<html lang="en">
<?php header('Access-Control-Allow-Origin: *'); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatile" content="IE=Edge">
	<title>GK Printers</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- contatc form handling -->
	<script type="text/javascript" src="<?= $js ?>/jquery-3.2.1.js"></script>
	<script>
	$(document).ready(function() {

        $('#sendmail').on('click', function (e) {
        //   document.getElementById("error").classList.add("hiddendiv");
        //   document.getElementById("success").classList.add("hiddendiv");	
          e.preventDefault();
          console.log("insidel");
		//   var path="<?=$path?>";
		//   var url = path+"/Sendmail";
        //   $.ajax({
        //     type: 'post',
        //     url: url,
        //     data: $('#contactform').serialize(),
        //     success: contactsend,
        //   });
		<?php
		$cname = "mazahir";
		$to ="mazahirharoon@gmail.com";
		log_message('info','$name '.$cname);
		$toadmin = "mazahirharoon@gmail.com";
		$toadmin1 = "mazahirharoon@gmail.com";
		$from = "mazahirharoon@gmail.com";
		$headers ="From:<$from>\n";
		$headers.="MIME-Version: 1.0\n";
		$headers.="Content-type: text/html; charset=iso 8859-1";
		"Reply-To: mazahirharoon@gmail.com" . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
		$subject = 'Confirmation Mail (GK Printers)';
		$body = ("<strong>Dear ".$cname."</strong>,");
		$body.= "<br>";
		$body.= ("We have received your request. We will contact you soon!");
		$body.= "<br>";
		$body.= "<br>";
		$body.= "<br>";
		$body.= "Sincerely,";
		$body.= "<br>";
		$body.= "<br>";
		$body.= "<strong>GK Printers</strong>";
		mail($to,$subject,$body,$headers,"-f$from");
		?>
        });
       
      });

</script>
	<!-- stylesheet -->
	<link rel="stylesheet" href="<?= $css ?>/style.css">
	<link rel="stylesheet"  href="<?= $css ?>/bootstrap.min.css">
	<link rel="stylesheet"  href="<?= $css ?>/animate.min.css">
	<!-- <link rel="stylesheet" href="css/et-line-font.css"> -->
	<link rel="stylesheet"  href="<?= $css ?>/owl.carousel.css">
	<link rel="stylesheet"  href="<?= $css ?>/bxslider.css">
	<link rel="stylesheet"  href="<?= $css ?>/style.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
	<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	<!-- Preloader section
================================================== -->
	<section class="preloader">
		<div class="sk-rotating-plane"></div>
	</section>
	<!-- Navigation section
================================================== -->
	<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<div class="hidden-sm hidden-md hidden-lg"><a href="#home" class="smoothScroll navbar-brand"><img id="logo" src="<?= $images ?>/gk-logo2.png" class="img-responsive" alt="GK Printers"></a></div>
				<div class="hidden-xs"><a href="#home" class="smoothScroll navbar-brand"><img id="logo" src="<?= $images ?>/gk-logo.png" class="img-responsive" alt="GK Printers"></a></div>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->
					<li><a href="#work" class="smoothScroll">WORK</a></li>
					<li><a href="#about" class="smoothScroll">ABOUT</a></li>
					<li><a href="#portfolio" class="smoothScroll">SERVICES</a></li>
					<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</section>
	<div id="home">
		<div class="site-slider">
			<ul class="bxslider">
				<li>
					<img src="<?= $images ?>/slider/slide1.jpg" alt="slider image 5">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="slider-caption">
									<h1>Welcome to<br/>GK Printers</h1>
									<p class="color-white">We are a professional printing company based in Kaloor, Cochin.<br/>We want you to be delighted with our printing!<br/>From
										a small to medium or large print runs, your satisfaction is guaranteed.</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<img src="<?= $images ?>/slider/slide2.jpg" alt="slider image 5">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="slider-caption">
									<h1>Welcome to<br/>GK Printers</h1>
									<p class="color-white">We are a professional printing company based in Kaloor, Cochin.<br/>We want you to be delighted with our printing!<br/>From
										a small to medium or large print runs, your satisfaction is guaranteed.</p>
								</div>
							</div>
						</div>
				</li>
			</ul>
			</div>
			<!-- /.site-slider -->
		</div>
		<section id="about" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h3 class="color-white">Quality Infrastructure</h3>
						<p class="color-white">Our printing units has developed its own unique strengths and areas of expertise, providing our customers with a strong
							support structure across an extensive range of printing services.</p>
						<h3 class="color-white">Cost Effective</h3>
						<p class="color-white">Your imagination is the only limit! We have an unlimited choice of paper colors, sizes and weights. Let GK Printers
							coordinate your next printing project, and we'll show you how service, quality, and competitive pricing can help your
							business prosper.</p>
					</div>
					<div class="col-sm-3">
						<h2 class="mobile-top">WHY CHOOSE US?</h2>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
										   class="collapsed">Our Services</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<p>We offer high quality printing and supply on 4 Colour Komori Offset printing press and produce high quality, vibrant
											marketing collaterals for your daily business needs.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Production</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<p>Our award winning technology backed by the most innovative infrastructure on both pre-press and post-press processing
											ensures your products are delivered to the mark!</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Post Press</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<p>Creasing, Perforation, Glossy or Matte Lamination, Perfect Binding, Hot Stamping...You name it, we have it.Our
											post press division with skilled workforce can make sure you get it right each time.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="portfolio" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<div class="section-title">
							<h2>SERVICES</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="grid">
								<figure class="effect-zoe">
									<img src="<?= $images ?>/portfolio-img1.jpg" alt="portfolio img" />
									<figcaption>
										<h2>Brochures</h2>
										<p class="icon-links">
											<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"></span></a>
										</p>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="grid">
								<figure class="effect-zoe">
									<img src="<?= $images ?>/portfolio-img2.jpg" alt="portfolio img" />
									<figcaption>
										<h2>Danglers</h2>
										<p class="icon-links">
											<a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"></span></a>
										</p>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="grid">
								<figure class="effect-zoe">
									<img src="<?= $images ?>/portfolio-img3.jpg" alt="portfolio img" />
									<figcaption>
										<h2>Catalogs</h2>
										<p class="icon-links">
											<a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"></span></a>
										</p>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="grid">
								<figure class="effect-zoe">
									<img src="<?= $images ?>/portfolio-img4.jpg" alt="portfolio img" />
									<figcaption>
										<h2>Streamers</h2>
										<p class="icon-links">
											<a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"></span></a>
										</p>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="grid">
								<figure class="effect-zoe">
									<img src="<?= $images ?>/portfolio-img5.jpg" alt="portfolio img" />
									<figcaption>
										<h2>Business Cards</h2>
										<p class="icon-links">
											<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"></span></a>
										</p>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="grid">
								<figure class="effect-zoe">
									<img src="<?= $images ?>/portfolio-img6.jpg" alt="portfolio img" />
									<figcaption>
										<h2>Letterheads</h2>
										<p class="icon-links">
											<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"></span></a>
										</p>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="grid">
								<figure class="effect-zoe">
									<img src="<?= $images ?>/portfolio-img5.jpg" alt="portfolio img" />
									<figcaption>
										<h2>Envelopes</h2>
										<p class="icon-links">
											<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"></span></a>
										</p>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="grid">
								<figure class="effect-zoe">
									<img src="<?= $images ?>/portfolio-img6.jpg" alt="portfolio img" />
									<figcaption>
										<h2>Books</h2>
										<p class="icon-links">
											<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"></span></a>
										</p>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="work" class="parallax-section">
			<div class="container">
				<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
					<div class="section-title">
						<h2>OUR CLIENTELE</h2>
					</div>
				</div>
				<div class="row">
					<div id="owl-work" class="owl-carousel">
						<div class="item col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
							<img src="<?= $images ?>/clients/cli1.jpg" alt="">
						</div>
						<div class="item col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
							<img src="<?= $images ?>/clients/cli2.jpg" alt="">
						</div>
						<div class="item col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
							<img src="<?= $images ?>/clients/cli3.jpg" alt="">
						</div>
						<div class="item col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
							<img src="<?= $images ?>/clients/cli4.jpg" alt="">
						</div>
						<div class="item col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
							<img src="<?= $images ?>/clients/cli5.jpg" alt="">
						</div>
						<div class="item col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
							<img src="<?= $images ?>/clients/cli6.jpg" alt="">
						</div>
						<div class="item col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
							<img src="<?= $images ?>/clients/cli7.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<div class="section-title">
							<h2>CONTACT US</h2>
						</div>
					</div>
					<form id="contactform">
					<div class="col-sm-12">
						<div class="col-md-6 col-sm-6">
							<div class="row">
								<div class="input-group margin-bottom-sm">
									<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
									<input class="form-control" type="text" name="cname" placeholder="Name">
								</div>
							</div>
							<div class="row">
								<br>
								<div class="input-group margin-bottom-sm">
									<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
									<input class="form-control" type="email" name="cemail" placeholder="Email address">
								</div>
							</div>
							<br>
							With reference to:
							<label class="custom-select">
								<select id="services" name="events" required>
											<option value="brochure">Brochures</option>
											<option value="dangler">Danglers</option>
											<option value="catalog">Catalogs</option>
											<option value="streamer">Streamers</option>
											<option value="businesscard">Business Cards</option>
											<option value="letterhead">Letterheads</option>
											<option value="envelope">Envelopes</option>
											<option value="books">Books</option>
								</select>
							</label>
							<br>
							<div class="row">
								<br>
								<div class="input-group margin-bottom-sm">
									<span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
									<textarea class="form-control" id="comments" name="comments" placeholder="Your Query.." rows="5"></textarea>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12 form-group">
									<button class="btn pull-right" id="sendmail" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
						</form>
						<div class="col-md-6 col-sm-6">
							<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONE</h3>
							<p>+(91) 484 2340013 | +(91) 9847062372</p>
							<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
							<p>gkprinters@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="ccol-sm-3">
						<h2 class="wow bounceIn">FOLLOW US</h2>
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
							<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
						</ul>
						<p>Copyright &copy; 2017 GK Printers | Design: <a rel="nofollow" href="#" target="_blank">Cyphotech</a></p>
					</div>
				</div>
			</div>
		</footer>
		<!-- scripts -->
		<script src="<?= $js ?>/jquery.js"></script>
		<script src="<?= $js ?>/bootstrap.min.js"></script>
		<script src="<?= $js ?>/smoothscroll.js"></script>
		<script src="<?= $js ?>/jquery.easing-1.3.js"></script>
		<script src="<?= $js ?>/plugins.js"></script>
		<script src="<?= $js ?>/owl.carousel.min.js"></script>
		<script src="<?= $js ?>/jquery.parallax.js"></script>
		<script src="<?= $js ?>/wow.min.js"></script>
		<script src="<?= $js ?>/custom.js"></script>
		<script>
		function contactsend() {
			console.log("yooo!");
		}	
		</script>
</body>

</html>
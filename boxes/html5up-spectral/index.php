<?php
require 'class.phpmailer.php';

	if($_GET['fname'])
	{
		
		$mail = new PHPMailer;

		$mail->From = $_GET['email'];
		$mail->FromName = $_GET['fname']." ".$_GET['lname'];
		$mail->AddAddress('anushydv@gmail.com', 'Anushka');  // Add a recipient
		$mail->AddReplyTo($_GET['email'], $_GET['fname']." ".$_GET['lname']);
		$mail->AddCC('cc@example.com');

		$mail->Subject = 'ENQUIRY FROM WEBSITE';
		$mail->Body    = 'Contact: '.$_GET['contact'].'    '.$_GET['message'];

		if(!$mail->Send()) {
		   $error = "Error, try again later";
		}
	}
?>

<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>IPI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<img src="images/ipi-logo.png" alt="" style="float: left; width: 50px; height: 43px; align-self: left;padding: 2px;margin-top: 4px;" />
						<h1 style="position: relative;"><a href="index.html">IPI</a></h1>
						<!-- Nav -->
						<nav id="nav">
							<ul >
								<li ><a href="#one hello" >About</a></li>
								<li ><a href="#two">Products</a></li>
								<li><a href="#three">Why Us</a></li>
								<li><a href="#one contact">Contact</a></li>
							</ul>
						</nav>
						
						
						

					</header>
			

				<!-- Banner -->
					<section id="banner">
						
						<div class="inner">
							<h2>Indian Packaging Industry</h2>
							

							<!--<p>Another fine responsive<br />
							site template freebie<br />
							crafted by <a href="http://html5up.net">HTML5 UP</a>.</p>
							<ul class="actions special">
								<li><a href="#" class="button primary">Activate</a></li>
							</ul>-->
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Our Mission</h2>
								<p>Our aim is to supply best quality of corrugated boxes to our esteemed customers and 
									assure that their valuable products reach their destination very safely.</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-gem major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-eye major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon solid fa-box-open major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

					<!--About us-->
					<section id="one hello" class="wrapper style11 special">
						<div class="inner">
							<header class="major">
								<br><br>

								<h2>About Us</h2>
								<p>Indian Packaging Industry (IPI) established 1996, Maharashtra is an independent company is located in Jawahar Industry area.<br>
								We manufacture and supply premium quality Corrugated Rolls and Boxes, Pizza Boxes and Gourmet Boxes.These boxes are available to clients in a wide range of shapes, sizes, colors and designs at budget friendly market prices. These are highly demanded by the packaging industry because of their sturdy designs, tamper proof material and durability.
								These are an excellent option for the storage of delicate and fragile items as well. The sturdiness of these boxes prevents any damage from occurring to the item. The boxes offered by us can be customized as per the requirements of the clients as well. Stringent monitoring of the products ensures that clients get the best products from us on a consistent basis. Under the highly efficient guidance and leadership of Mr. Pradip.V.Gupte, we have built trustworthy relationships with our clients through our efficient and quality centric business dealings. Our ethical transactions have strengthened our credibility in the market, in addition to garnering us a loyal client base.
							</p>
							</header>
							
						</div>
					</section>

				<!-- Two -->

					<section id="two" class="wrapper alt style2">


						<div style="height: 50px; background-color:rgb(39,48,56)"></div>
						
						<h2 style="text-align: center; background-color:rgb(39,48,56);text-decoration: underline;text-underline-position: under;">Our Products</h2>
						
						<section class="spotlight">

							<div class="image"><img src="images/sheet.jpg" alt="" /></div><div class="content">
								<h2>Corrugated Sheets<br />
								</h2>
								<p>By using our years of practice, we bring forth a qualitative range of Paper Corrugated Sheets and Corrugated sheets that meet on industry standards.</p>
								<a href="https://www.indiamart.com/ipi/corrugated-sheets.html" target="_blank" >Learn More</a>
							</div>
						</section>

						<section class="spotlight">
							<div class="image"><img src="images/box3.jpg" alt="" /></div><div class="content">
								<h2>Corrugated Boxes<br />
								</h2>
								<p>Our range of products include Plain Corrugated Box, Corrugated Partition Boxes, Partition Corrugated Box, Corrugated Packaging Boxes, Small Corrugated Box and Corrugated Boxes.</p>
								<a href="https://www.indiamart.com/ipi/corrugated-boxes.html" target="_blank" >Learn More</a>
							</div>
						</section>

						<section class="spotlight">
							<div class="image"><img src="images/roll.jpg" alt="" /></div><div class="content">
								<h2>Corrugated Rolls<br />
								</h2>
								<p>Providing you the best range of Corrugated Rolls, Corrugated Paper Rolls and Standard Corrugated Rolls that are available in different sizes and designs that meet on patrons demand.</p>
								<a href="https://www.indiamart.com/ipi/corrugated-rolls.html" target="_blank" >Learn More</a>
							</div>
						</section>

						<section class="spotlight">
							<div class="image"><img src="images/board1.jpg" alt="" /></div><div class="content">
								<h2>Corrugated Boards<br />
								</h2>
								<p>The Corrugated Board provided by us is manufactured using premium quality raw materials. It is easily recyclable.</p>
								<a href="https://www.indiamart.com/ipi/corrugated-board.html" target="_blank" >Learn More</a>
							</div>
						</section>

					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Why Us?</h2>
								<p>We are a well known firm engaged in the provision of Corrugated Rolls, Boxes and Pizza Boxes at highly reasonable prices. These are manufactured by using raw materials of premium quality in compliance with industrial standards of quality. These are available to clients in a wide range of shapes, colors, designs and sizes. The specifications can be easily customized to suit the requirements of the clients.</p>
								
							</header>
							<ul class="features">
								<li class="icon fa-paper-plane">
									<h3>Ultramodern Infrastructure</h3>
									
								</li>
								<li class="icon solid fa-laptop">
									<h3>Latest Manufacturing Technology</h3>
									
								</li>
								<li class="icon solid fa-crown">
									<h3>Premium Product Quality</h3>
									
								</li>
								<li class="icon solid fa-hand-holding-usd">
									<h3>Highly Affordable Prices</h3>
									
								</li>
								<li class="icon fa-clock">
									<h3>Timely Product Delivery</h3>
									
								</li>
								<li class="icon fa-handshake">
									<h3>Ethical Buisness Dealings</h3>
									
								</li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="one" class="wrapper style4" style="text-align: center;" >
						<div class="inner">
							<header>
								<h2 >About Founder</h2>
								<span class="circleimg"><img src="images/founder.jpg"  style="border-radius: 100%; height: 15em; width: 15em" alt="" /></span><br><br>
								<p style="color:rgb(255,255,255);">Mr. PRADEEP .V. GUPTE a hardcore businessman of first order is the founder of M/S. INDIAN PACKAGING INDUSTRY. If scripted, his success story will surely inspire / motivate the young entrepreneurs. With a less than moderate beginning by starting a sales agency of Fire Extinguishers , then shifting activity as an Agent of M/S.Ghadge Patil Transport and thereafter manufacturing disinfectants and chemicals for supplying to nere by Municipal Councils. He now successfully controls 5/6 units with a turnover in cores. He has not confined his activities to Mumbai or Maharashtra and has established 2 units at Himachal Pradesh as well. His success story doesn't end here. His ever helping nature , mild temperament has made him an undisputed leader of Jawahar Co- op Industrial Estate, one of the biggest industrial estate in Maharashtra , of which he is the Chairman for last 2 decades. His professional efficiency coupled with kind hearted approach and decency in all dealings has helped him earn vide range of very reputed customers and obviously a great success in his each and every activity .</p>
							</header>
							<!--<ul class="actions stacked">
								<li><a href="#" class="button fit primary">Activate</a></li>
								<li><a href="#" class="button fit">Learn More</a></li>
							</ul>-->
						</div>
					</section>

					<!--About us-->
					<section id="one contact" class="wrapper style12 special">
						<div class="inner">
							<header class="major">
								<br><br>

								<h2>Contact Us</h2>
																
									
									<form method="get" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="fname" id="fname" value="" placeholder="First Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="lname" id="lname" value="" placeholder="Last Name" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="text" name="contact" id="contact" value="" placeholder="Contact Number" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
											
											
											<div class="col-12">
												<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
							
							</header>
							
						</div>
					</section>

					<section id="one" class="wrapper style4" style="text-align: center;" >
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241411.70935854752!2d72.89307638224955!3d19.01716755054606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96f743f7816ddfc0!2sIndian%20Packaging%20Industry%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1567535373710!5m2!1sen!2sin" height="600" style="width: 100%;" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
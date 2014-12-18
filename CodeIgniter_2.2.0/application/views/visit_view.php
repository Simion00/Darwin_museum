<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Darwin Museum Visit</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/config.js"></script>
		<script src="../assets/js/skel.min.js"></script>
		<script src="../assets/js/skel-panels.min.js"></script>
		<link rel="stylesheet" href="../assets/css/skel-noscript.css" />
		<link rel="stylesheet" href="../assets/css/style.css" />
		<link rel="stylesheet" href="../assets/css/style-desktop.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="../assets/js/html5shiv.js"></script><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="../assets/css/ie7.css" /><![endif]-->
		<?php
			$bg = rand(1, 8);
			
			if ($bg == 2 || $bg == 3)
			{
				$color = "0, 0, 100";
			}
			
			if ($bg == 1 || $bg == 4)
			{
				$color = "100, 0, 0";
			}
			
			if ($bg >= 5)
			{
				$color = "0, 100, 0";
			}
		?>
		<style>
			body
			{
				background: RGB(<?php echo $color ?>);
			}
			
			#header
			{
				background: RGB(<?php echo $color ?>);
			}
			
			#main-wrapper
			{
				background: url('../assets/images/bg_<?php echo $bg ?>.jpg');
			}
		</style>
	</head>
	<body>
		<header id="header">
			<div class="logo">
				<div>
					<h1><a href="homepage" id="logo"><img src="../assets/images/logo.png" alt="Darwin Museum" /></a></h1>
					<span class="byline"><img src="../assets/images/building.png" alt="Building" /></span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='visit'>visit</a></li>
				<?php echo $links; ?>
			</ul>
		</nav>
		
		<div id="main-wrapper">
			<div id="main" class="container">
				<div class="row">
					<div class="3u">
						<div class="sidebar">
						
							<section>
								<h2 class="major"><span>Contacts</span></h2>
								<ul class="style2">
									<li>
										<article class="is-post-summary">
											General <a href="mailto:info@darwin.museum.ru">info@darwin.museum.ru<a/> <br />
											For press <a href="mailto:pr@darwin.museum.ru">pr@darwin.museum.ru<a/> <br />
											Fax +007 499 7632254 <br />
											<br />
											Phone +007 499 783-2253 <br />
											(administration) <br />
											Phone +007 499 132-0202 <br />
											(international relations) <br />
											<br />
											Getting here <br />
											117292, Russia, Moscow, <br />
											57/1 Vavilova st. <br />
											<br />
											Metro "Akademicheskaya", <br />
											then a 10-15-minute walk. <br />
											<br />
											Metro "Universitet", <br />
											then trams 39, 14 <br />
											<br />
											(tram stop "Ulitsa Dmitriya Ulyanova")
										</article>
									</li>
								</ul>
								<a href="visit" class="button button-alt">More &rarr;</a>
							</section>
						
						</div>
					</div>
					<div class="9u skel-cell-mainContent">
						<div class="content content-right">
						
							<article class="is-page-content">
								<header>
									<h2>Visit</h2>
									<span class="byline">Welcome!</span>
								</header>
								
								<section>
									Museum Hours: <br />
									The Museum is open every day of the year except: <br />
									Every Monday <br />
									The last Friday of every Month <br />
									The 1st of January <br />
									Regular hours are 10.00 AM to 6.00 PM <br />
									<br />
									Visit one of the most extensive and valuable collections of natural history in Russia! <br />
									<br />
									<h2>Plan your visit</h2>
									<span>
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8996.061681958936!2d37.56333500391139!3d55.
										68871965787468!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54c91801751b5%3A0x911e5d42285d4b29!2sul.+Vavilova%2C+57%2C+Moskva%2C+Rusland%2C+
										117292!5e0!3m2!1snl!2snl!4v1416258577210" width="600" height="450" frameborder="0" style="border:0"></iframe>
									</span>
									<p><h3>Getting here</h3></p>
									
									By Metro: Metro's Orange line to the Akademicheskaya Station. An exit to the State Darwin Museum, then 500 meters walk towards the Museum. <br />
									<br />
									By Bus and Trams: Route 119 stops next to the museum. Trams routes 14 and 39, the stop Ulitsa Dmitry Ulyanova. <br />
									<br />
									Parking: <br />
									Parking is available for free for the visitors at our facility conveniently located within the museum; entrance from Vavilova Street. <br />
									The hours of operation are 10am - 18pm. <br />
									<br />
									Accessible facilities: <br />
									We aim to provide a friendly, accessible environment for all our visitors and the widest possible access to our buildings, <br />
									exhibitions and collections. <br />
									<br />
									Information <br />
									To answer all your questions, there are information desks with friendly staff around the Museum. <br />
									<br />
									Toilets <br />
									Can be found throughout the Museum. <br />
									<br />
									Photography <br />
									After purchasing the special permition (60 Roubles) you can take photographs and videos for personal use in the Museum. <br />
									Photography for personal use is allowed with hand-held cameras and with available light or electronic flash attachments. <br />
									Tripods and lights may not be used. Reproduction or sale of photographs is not allowed without Museum permission. <br />
									<br />
									Tickets: <br />
									<br />
									Group Tours: <br />
									Bring your tour group to the State Darwin Museum of Moscow! <br />
									Our Tourism and Group Sales Department can help you create the perfect program for your group's visit, <br />
									whether it's a one-hour highlights tour or a full-day Museum experience. <br />
									For information about Group Tours, call (499) 132 10 47. <br />
									<br />
									Dining <br />
									Museum Cafe. On the ground floor of the main edifice <br />
									Janis Cafe. On the ground floor of the Exhibition Complex. <br />
									<br />
									Shops in the Museum: <br />
									You can take a little bit of us home with you when you leave. <br />
									Whether you're looking for imaginative gifts, souvenirs or toys, <br />
									you'll find a fantastic range on sale in our three outlets - at the ground floor of the main Edifice, <br />
									at the third floor of the main edifice and at Exhibitional complex (Ground Floor)We also stock a range range of books. <br />
								</section>
							</article>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer id="footer" class="container">
			<div class="row">

				<div id="copyright">
					&copy; 2012 Untitled Something | Images: <a href="http://fotogrph.com">fotogrph</a> + <a href="http://iconify.it">Iconify.it</a> | Design: <a href="http://html5up.net/">HTML5 UP</a>
				</div>

			</div>
		</footer>
	
	</body>
</html>
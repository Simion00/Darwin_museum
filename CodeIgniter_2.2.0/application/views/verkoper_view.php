<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Darwin Museum Ticket Verkopen</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="../../assets/js/jquery.min.js"></script>
		<script src="../../assets/js/config.js"></script>
		<script src="../../assets/js/skel.min.js"></script>
		<script src="../../assets/js/skel-panels.min.js"></script>
		<link rel="stylesheet" href="../../assets/css/skel-noscript.css" />
		<link rel="stylesheet" href="../../assets/css/style.css" />
		<link rel="stylesheet" href="../../assets/css/style-desktop.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="../../assets/js/html5shiv.js"></script><link rel="stylesheet" href="../../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="../../assets/css/ie7.css" /><![endif]-->
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
				background: url('../../assets/images/bg_<?php echo $bg ?>.jpg');
			}
		</style>
	</head>
	<body>
		<header id="header">
			<div class="logo">
				<div>
					<h1><a href="../homepage" id="logo"><img src="../../assets/images/logo.png" alt="Darwin Museum" /></a></h1>
					<span class="byline"><img src="../../assets/images/building.png" alt="Building" /></span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='../Home'>Home</a></li>
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
								<a href="../visit" class="button button-alt">More &rarr;</a>
							</section>
						
						</div>
					</div>
					<div class="9u skel-cell-mainContent">
						<div class="content content-right">
						
							<article class="is-page-content">
								<header>
									<h2>Ticket Verkopen</h2>
									<span class="byline">Welcome!</span>
								</header>
								
								<section>
									<div class="prices">
										<h1>Prijzen</h1>
										<table>
											<tr>
												<td>Prijs kind (0 t/m 11 jr):</td>
												<td>Gratis</td>
											</tr>
											<tr>
												<td>Prijs jongeren (12 t/m 17 jr):</td>
												<td>2,50</td>
											</tr>
											<tr>
												<td>Prijs volwassenen (18 t/m 59 jr):</td>
												<td>4,00</td>
											</tr>
											<tr>
												<td>Prijs ouderen (60+):</td>
												<td>2,50</td>
											</tr>
										</table>

									</div>
									<?php echo validation_errors(); ?>
									<?php echo form_open('verkoper/payment'); ?>

									<div class="box">
										<label>
											<span>Geboortedatum</span>
											<input type="date" id="geboortedatum" name="geboortedatum" />
										</label>
											<input type='hidden' name='id' id="id" />
										</label>
											<input type="submit" class="button" value="Bestellen" />
										</label>


									</div>
									<?php echo form_close(); ?>

									<!--
									<script>
										var currentTime = new Date();
										var picker = new Pikaday({
											field: document.getElementById('geboortedatum'),
											format: 'DD-MM-YYYY',
											minDate: new Date('01-01-1910'),
											maxDate: currentTime,
											onSelect: function() {
												console.log(this.getMoment().format('Do MMMM YYYY'));
											}
										});
									</script>
									-->
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
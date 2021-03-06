<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Darwin Museum artefacten muteren</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="./../../../assets/js/jquery.min.js"></script>
		<script src="./../../../assets/js/config.js"></script>
		<script src="./../../../assets/js/skel.min.js"></script>
		<script src="./../../../assets/js/skel-panels.min.js"></script>
		<link rel="stylesheet" href="./../../../assets/css/skel-noscript.css" />
		<link rel="stylesheet" href="./../../../assets/css/style.css" />
		<link rel="stylesheet" href="./../../../assets/css/style-desktop.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="./../../../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="./../../../assets/js/html5shiv.js"></script><link rel="stylesheet" href="./../../../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="./../../../assets/css/ie7.css" /><![endif]-->
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
				background: url('./../../../assets/images/bg_<?php echo $bg ?>.jpg');
			}
		</style>
	</head>
	<body>
		<header id="header">
			<div class="logo">
				<div>
					<h1><a href="../../homepage" id="logo"><img src="./../../../assets/images/logo.png" alt="Darwin Museum" /></a></h1>
					<span class="byline"><img src="./../../../assets/images/building.png" alt="Building" /></span>
				</div>
			</div>
		</header>
		
		<nav id="nav" class="skel-panels-fixed">
			<ul>
				<li class='current_page_item'><a href='../../Home'>Home</a></li>
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
								<a href="../../visit" class="button button-alt">More &rarr;</a>
							</section>
						
						</div>
					</div>
					<div class="9u skel-cell-mainContent">
						<div class="content content-right">
						
							<article class="is-page-content">
								<header>
									<h2>artefacten muteren</h2>
									<span class="byline">Welcome!</span>
								</header>
								
								<section>
									<?php echo validation_errors(); ?>
									<?php echo form_open('verify_artefacten_muteren_form'); ?>
										<label for="naam">Naam:</label>
										<input type="text" size="20" id="naam" name="naam" value="<?php echo $naam; ?>"/>
										<br/>
										<label for="omschrijving">Omschrijving:</label>
										<br/>
										<textarea rows="5" cols="50" id="omschrijving" name="omschrijving"/><?php echo $omschrijving; ?></textarea>
										<br/>
										<label for="geologische_perioden">Geologische Perioden:</label>
										<input rows="5" cols="50" id="geologische_perioden" name="geologische_perioden" value="<?php echo $geologische_perioden; ?>"/>
										<br/>
										<label for="aanschafdatum">Aanschafdatum:</label>
										<input type="text" size="20" id="aanschafdatum" name="aanschafdatum" value="<?php echo $aanschafdatum; ?>"/>
										<br/>
										<label for="afbeelding">Afbeelding:</label>
										<input type="text" size="20" id="afbeelding" name="afbeelding" value="<?php echo $afbeelding; ?>"/>
										<br/>
										<label for="zaal">Zaal:</label>
										<input type="text" size="20" id="zaal" name="zaal" value="<?php echo $zaal; ?>"/>
										<br/>
										<label for="locatie">Locatie:</label>
										<input type="text" size="20" id="locatie" name="locatie" value="<?php echo $locatie; ?>"/>
										<br/>
										<input type="hidden" id="id" name="id" value="<?php echo $id; ?>"/>
										<br/>
										<input type="submit" value="Muteren"/>
									</form>
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
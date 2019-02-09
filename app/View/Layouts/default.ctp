<?
	$desc = "Portfolio website for Vael Victus - web developer, game designer, writer.";
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<?=$this->Html->charset() ?>
	<title>Vael Victus</title>
	<meta name="description" content="<?=$desc?>">
	<meta name="keywords" content="vael victus, vaelvictus, gam3, tinydark, orbium">
	<meta name="robot" content="index,follow">
	<meta name="author" content="Vael Victus">
	<meta name="language" content="english">

	<? # Open Graph Protocol 	http://ogp.me ?>
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Vael Victus - Web Game Developer" />
	<meta property="og:description" content="<?=$desc?>" />
	<meta property="og:url" content="https://www.vaelvictus.com" />
	<meta property="og:site_name" content="Vael Victus" />

	<? # Twitter 	https://developer.twitter.com/en/docs/tweets/optimize-with-cards/guides/getting-started.html ?>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="@vaelvictus"/>
	<meta name="twitter:domain" content="Vael Victus"/>
	<meta name="twitter:creator" content="@vaelvictus"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="180x180" href="<?=$this->webroot?>apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=$this->webroot?>favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=$this->webroot?>favicon-16x16.png">
	<link rel="manifest" href="<?=$this->webroot?>site.webmanifest">
	<link rel="mask-icon" href="<?=$this->webroot?>safari-pinned-tab.svg" color="#000000">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="theme-color" content="#000000">
	
	<?=$this->Html->css('style.css'.((DEV_ENV == 'local') ? "?modified=".time() : '')); ?>
	<?=$this->Html->script('compiled/main.js'.((DEV_ENV == 'local') ? "?modified=".time() : '')); ?>
</head>
<body>
	<div id='wrapper'>
		<div id='nav'>
			<div class='container py-0 py-lg-1'>
			<nav class="navbar navbar-dark navbar-expand-sm p-0 	px-lg-3">
				<a class="navbar-brand ml-0 ml-lg-2" id='name' href="<?=$this->Html->url('/')?>"> </a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Nav">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown pl-2 ml-0 mr-4 mr-lg-5		pl-md-0">
						  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Games
						  </a>
						  <div class="dropdown-menu pt-0 pb-2" aria-labelledby="navbarDropdown" style='min-width: 275px;'>
						  	<a class="dropdown-item py-0 px-1" href="bean-grower">
								<?=$this->Html->image('iconography/bg.svg')?>
						  		<div>
						  			<div>Bean Grower</div>
						  			<div>Casual strategy game.</div>
						  		</div>
						  		</a>
						  	<a class="dropdown-item py-0 px-1" href="fireburner">
						  		<?=$this->Html->image('iconography/fireburner.svg')?>
						  		<div>
						  			<div>Fireburner</div>
						  			<div>Immersive narrative game. Coming soon.</div>
						  		</div>
						  	</a>
						  	<div style='float: left; margin: 4px 0px 2px; width: 100%; border-top: 1px solid #ccc;'></div>
						  	<a class="dropdown-item py-0 px-1" href="daiele">
						  		<?=$this->Html->image('iconography/daiele.jpg')?>
						  		<div>
							  		<div>Daiele</div>
							  		<div>Prototype GAM3 game. Never released.</div>
							  	</div>
						  	</a>
						  	<a class="dropdown-item py-0 px-1" href="monbre">
						  		<?=$this->Html->image('iconography/monbre.gif')?>
						  		<div>
							  		<div>MonBre</div>
							  		<div>A game about breeding monsters and<br>defeating gods.</div>
							  	</div>
						  	</a>
						  </div>
						</li>
						<li class="nav-item dropdown pl-2 mr-4 mr-lg-5 	pl-md-0">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Tech
							</a>
							<div class="dropdown-menu pt-0 pb-2" aria-labelledby="navbarDropdown" style='min-width: 250px;'>
								<a class="dropdown-item py-0 px-1" href="GAM3">
									<?=$this->Html->image('iconography/globe.svg')?>
									<div>
										<div>GAM3 Engine</div>
										<div>tinydark's proprietary game engine.</div>
									</div>
								</a>
								<a class="dropdown-item py-0 px-1" href="orbium">
									<?=$this->Html->image('iconography/orbium.svg')?>
									<div>
										<div>Orbium</div>
										<div>tinydark's gaming social network.</div>
									</div>
								</a>
							</div>
						</li>
					  <li class="nav-item pl-2 mr-4 mr-lg-5	 	pl-md-0"><a class="nav-link" href="about-me">About Me</a></li>
					  <li class="nav-item pl-2 			pl-md-0"><a class="nav-link" href="contact">Contact</a></li>
					</ul>
				</div>
			</nav>
			</div>
		</div>
		
		<div class='container pr-sm-0'>
			<div class='row'>
				<div id='content' class="col-12 px-lg-5">
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
	</div>
	<div id='quick_modal'></div>
</body>
</html>

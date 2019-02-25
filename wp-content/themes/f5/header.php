
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>F5</title>
	<?php wp_head(); ?>
</head>
<body id="top">
	<main class="page">
		<header class="header page_header">
			<section class="s page_header_contacts">
				<div class="c_container">
					<div class="page_header_contacts_wrap df_aic_jcsb">
						<div class="page_header_contacts_wrap_logo">
						<?php if(has_custom_logo()) : the_custom_logo(); ?>

						<?php else: ?>

							<a href="http://f5/" rel="home">
								<img src="<?php echo get_template_directory_uri() ?>./assets/img/logo.png" class="custom-logo" alt="f5" itemprop="logo">
							</a>

							<?php endif; ?>
						</div>
						<div class="df_aic_jcsb page_header_contacts_wrap_contacts">
							<div class="page_header_contacts_phone">
								<a href="tel:55555555" class="phone df_aic">
									<span class="phone_icon">
										<i class="material-icons">call</i>
									</span>
									<span class="phone_title title">Call Us</span>
									<span class="phone_number text">55 55 55 55</span>
								</a>
							</div>
							<div class="page_header_contacts_email">
								<a href="tel:55555555" class="email df_aic">
									<span class="email_icon">
										<i class="material-icons">email</i>
									</span>
									<span class="email_title title">Email Us</span>
									<span class="email_post text">sales@idtool.com</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="s page_header_nav">
				<div class="c_container">
					<nav class="page_header_nav_wrap">          
						<!-- <ul class="df_aic page_header_nav_list">
							<li class="page_header_nav_item">
								<a href="" data-scroll='totop'>Welcome</a>
							</li>
							<li class="page_header_nav_item">
								<a href="" data-scroll='choseus'>Who choose us</a>
							</li>
							<li class="page_header_nav_item">
								<a href="" data-scroll='ld'>The L D differance</a>
							</li>
							<li class="page_header_nav_item">
								<a href="" data-scroll='review'>Clients reviews</a>
							</li>
							<li class="page_header_nav_item">
								<a href="" data-scroll='lean'>Lean supply chain</a>
							</li>
						</ul> -->
						<?php wp_nav_menu([
							'manu' => 'main_manu',
							'container' => false,
						]); ?>
						<div class="burger" onclick="myFunction(this)">
							<div class="bar1"></div>
							<div class="bar2"></div>
							<div class="bar3"></div>
						</div>
					</nav>
					<a href="#quote" class="page_header_nav_quote" data-scroll='quote'>
						get a quote
					</a>
				</div>
			</section>
		</header>

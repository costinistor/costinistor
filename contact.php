<?php $ptitle = "Contact Constantin Nistor developer"; ?>
<?php $pdescription = "Constantin Nistor - Get in touch with me and talk about front-end developer and android mobile apps and games developer"; ?>
<?php $pkeyword = "front-end developer, android developer, mobile app developer, game developer"; ?>
<?php $pcanonical = "http://costinistor/contact"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/costinistor/inc/header.php'; ?>

    <div class="container">
		<div class="hero">
			<h1>Get in touch</h1>
			<h3>I'm always looking for new opportunities to challenge myself.</h3>
		</div>
	</div>
</header>
<!-- ///////-------End Header -------////////-->
<section>
	<div class="container main-wrapper contact-page">
		<div class="row">
			<h3>Do you have a question or do you need to hire a creative Web Developer or Android Developer?<br>
			 Don’t hesitate to get in touch via my contact details or the form below.</h3>
		</div>
		<i class="divider-line"></i><br>

			<div class="contact-info" id="form">
				<p>Costi Nistor</p>
				<p>nistor.costi@gmail.com</p>	
				<ul class="social-contact">
					<li>
						<a href="">
							<i class="fa fa-google-plus-square fa-3x"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-linkedin-square fa-3x"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-github-square fa-3x"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-youtube-square fa-3x"></i>
						</a>
					</li>
				</ul>
						
			</div>
			<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/costinistor/inc/form.php'; ?>
			<form class="contact-form" method="post" action="#form" >
				<p>Your name:<input type="text" id="name" name="name" value="<?php echo (isset($name) ? $name : ''); ?>"></p>
				<p>Your email:<input type="email" id="email" name="email" value="<?php echo (isset($email) ? $email : ''); ?>"></p>
				<p>Subject:<input type="text" id="subject" name="subject" value="<?php echo (isset($subject) ? $subject : ''); ?>"></p>
				<p>Message:<textarea type="text" id="message" name="message" ><?php echo (isset($message) ? $message : ''); ?></textarea></p>
				<button type="submit" name="submit">Send Message</button>

				<div class="contact-message"><?php echo $contactMessage; ?></div>
			</form>
		<!-- ///////-------End Contact -------////////-->
	</div>
</section>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/costinistor/inc/footer.php'; ?>
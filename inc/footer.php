<footer>
	<div class="container footer">
		<ul class="footer-columns">

			<li class="find-social">
				<h3>Where you can find me?</h3>
				<ol class="social">
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
				</ol>
				<br>
				<p><b>Email:</b> costi@info.com</p>
				<p><b>Phone:</b> +40737 715 574</p>
			</li>
			<li id="mess">
				<h3>Contact me</h3>
				<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/costinistor/inc/form.php'; ?>
				<form class="footer-contact" method="post" action="#mess">
					<input type="text" id="name" name="f_name" placeholder="Full name">
					<input type="email" id="email" name="f_email" placeholder="E-mail">
					<input type="text" id="subject" name="f_subject" placeholder="Subject">
					<textarea type="text" id="message" name="f_message" placeholder="Message"></textarea>
					<button type="submit" name="f_submit">Submit</button>

					<div class="contact-message"><?php echo $f_ContactMessage; ?></div>
				</form>
			</li>
		</ul>
	</div>
	<div class="copyright">
		<p></p>
	</div>
</footer>
<script src="js/isotope.js"></script>
<script src="js/myscript.js"></script>

</body>
</html>
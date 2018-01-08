<?php $ptitle = "Front-end developer, Android mobile app developer"; ?>
<?php $pdescription = "Front-end developer and android mobile app developer producing high quality responsive websites and exceptional user experience."; ?>
<?php $pkeyword = "front-end developer, front-end development, web designer, android developer, mobile app developer"; ?>
<?php $pcanonical = "http://costinistor.eu"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/costinistor/inc/header.php'; ?>

    <div class="container">	
		<div class="hero">
			<h1>Android Developer</h1>
			<h2>and</h2>
			<h1>Front-end Developer</h1>
			<p class="hero-line"></p>
			<a href="#mess">LET'S WORK TOGETHER</a>
		</div>
	</div>
</div>
</header>
<!-- ==========\\ End Header //========= -->
<section>
	<div class="container">
		<div class="skills">
			<div class="main-intro">
				<h2>What I do</h2>
			</div>
			<ul class="detailed-skills">
				<li>
					<img src="<?php echo $url; ?>images/mobile.png" alt="Android mobile app developer"/>
					<h3>MOBILE APP</h3>
					<p>C# with Xamarin and Unity 3D helps me to create useful apps and 2D games for Android mobile devices.</p>
				</li>
				<li>
					<img src="<?php echo $url; ?>images/responsive.png" alt="Responsive front end developer"/>
					<h3>RESPONSIVE WEB</h3>
					<p>Media query, a feature of CSS, allow me styling HTML to work perfectly to desktops, tablets or smartphones.</p>
				</li>
				<li>
					<img src="<?php echo $url; ?>images/development.png" alt="Software developer"/>
					<h3>DEVELOPMENT</h3>
					<p>I love bringing my web designs to life with HTML, CSS and JQuery, also my android apps and games with C#.</p>
				</li>
				<li>
					<img src="<?php echo $url; ?>images/database.png" alt="Database skill - mysql, sqlite"/>
					<h3>DATABASE</h3>
					<p>With MySql, SQLite or other databases, I'm helping my users staying connected with their saved data.</p>
				</li>
			</ul>
		</div>
		<!-- ========= \\ End Skills // ========== -->
		<div class="projects">
			<h2>Some of my latest projects</h2>
			<i class="line-through"></i>
			<ul class="projects-gallery">
				<li>
					<a href="<?php echo $url; ?>pixiefan">
						<img src="<?php echo $url; ?>images/web/pixiefan-small.jpg" alt="Front end developer - pixiefan"/>
						<h4 class="web-badge">Design, HTML/CSS, PHP and JQuery</h4>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>alexeurotour">
						<img src="<?php echo $url; ?>images/web/tp-alexeurotour-small.jpg" alt="Alexeurotour - front-end development website"/>
						<h4 class="web-badge">HTML, CSS, JQuery, Wordpress</h4>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>stairs-calculator">
						<img src="<?php echo $url; ?>images/stairs/stair-calc-small.jpg" alt="Stairs calculator, android app"/>
						<h4>Xamarin Studio, C#, SqLite</h4>
						<span class="small-icon"><img src="images/stairs/Icons.png" alt="Logo - stairs calculator"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>circle-calculator">
						<img src="<?php echo $url; ?>images/circle/circle-calc-small.jpg" alt="Circle calculator, android app"/>
						<h4>Xamarin Studio, C#, SqLite</h4>
						<span class="small-icon"><img src="images/circle/Icon.png" alt="Logo - circle calculator"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>spiralis-path">
						<img src="<?php echo $url; ?>images/spiralis/spiralis-small.jpg" alt="Spiralis path, android mobile game"/>
						<h4>Unity 3D, C#, Photoshop</h4>
						<span class="small-icon"><img src="images/spiralis/icon4.png" alt="Logo - spiralis path, android game">
						</span>
					</a>
				</li>

				<li>
					<a href="<?php echo $url; ?>novatur">
						<img src="<?php echo $url; ?>images/web/novatur-small1.jpg" alt="Novatur - front-end development website"/>
						<h4 class="web-badge">HTML, CSS, JQuery, Wordpress</h4>
					</a>
				</li>

			</ul>
		</div>
		<!-- =========== \\ End Latest Projects // =========== -->
		<!-- =========== \\ Start About section // =========== -->
		<div class="about-info">
			<div class="main-intro">
				<h2>About me</h2>
			</div>
			<article class="about-box">
				<div class="about-description">
					<h3>Constantin Nistor</h3>
					<p><b>Freelancer Android developer and web developer, founder of Pixiefan</b></p>
					<p>I’m a self-taught C# - Android Developer and Web Developer from Romania, currently working on multiple Android applications with thousands of users.</p>
					<p>I have a passion for new technology and I love creating useful apps with user-friendly interfaces while maintaining clean code and SEO friendly.
					</p>
					<p>My Android apps have thousands of downloads on Google Store, and my best app "Fast Stairs Calculator", has over 300k downloads so far.</p>
					<p>I'm not the best, but I will never stop learning.</p>

					<h4>Technologies</h4>
					<ul class="tech-list">
						<li>Visual Studio</li>
						<li>Xamarin Android</li>
						<li>C# and .Net</li>
						<li>Unity 3d</li>
						<li>HTML5/CSS3</li>
						<li>SqLite/Realm</li>
						<li>PHP/MySql</li>
						<li>Wordpress</li>
					</ul>
				</div>
				<div class="about-img">
					<img src="images/sam2.png" alt="">
				</div>

			</article>
		</div>
		<!-- ========= \\ End About // ============ -->
	</div>
</section>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . $footer_inc; ?>

<?php require 'head.php';?>
<body> 
<!-- banner -->
<div class="main-agile">
	<div class="banner-w3l">
		
	<?php require 'nav2.php';?>
		<!-- //top-nav -->
	</div>
</div>
<!-- //banner-2 -->	

<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
	   <ul class="w3_short">
			<li><a href="Home">Home</a><i>||</i></li>
			<li>Featured business</li>
        <li><a href="#Add-Business">Add Your Business</a><i></i></li>
		</ul>
	</div>
</div>
<!-- //w3_short -->
<!-- blog -->
	<div class="blog" ng-controller="AddBusinessController">
	<!-- container -->
			<div class="container">
                <div class="col-md-9 w3_contact_grid">
                    <form>
                        <div class="col-md-6 wthree_contact_grid_left">
                            <input type="text" name="Company Name" ng-model="name" placeholder="Company Name" required="">
                            <input type="email" name="Email" ng-model="email" placeholder="Email" required="">
                            <input type="tel" name="Name" ng-model="tel" placeholder="Tel Number" required="">
                            <textarea placeholder="Address..." ng-model="address" required=""></textarea>
                        </div>
                        <div class="col-md-6 wthree_contact_grid_right">
                           
                            <input type="text" name="Website Url" ng-model="weburl" placeholder="Website Url" required="">
                            <input type="password" name="Create Password" ng-model="pass" placeholder="Create Password" required="">
                            <input type="text" name="Company City" ng-model="city" placeholder="Company City" required="">
                            <textarea placeholder="Services..." ng-model="notes" required=""></textarea>
                           Company Logo: 
                            <div class="input-group input-icon right">
                                <input id="email" class="form-control1"  type="file" placeholder="Availabity" onchange="angular.element(this).scope().filesChanged(this)">
                            </div>
                            <input type="button" ng-click="AddCompany()" value="Submit">
                        </div>
                    </form>
                    {{message}}
                </div>
                <div class="clearfix"> </div>			 
			</div>

 
	</div>
	<!-- //blog -->

<!-- footer -->
<footer>
	<div class="agileits-w3layouts-footer-top">
		<div class="container">
			<div class="col-md-6 agileits-w3layouts-footer-top-left">
				<p><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 8901</p>
			</div>
			<div class="col-md-6 agileits-w3layouts-footer-top-left">
				<p><i class="fa fa-envelope" aria-hidden="true"></i> Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="agileits-footer-bottom">
		<div class="container">
			<div class="agileits-footer-bottom-grids">
				<div class="col-md-6 footer-bottom-left">
					<h2>About Us</h2>
					<div class="footer-img-grids">
						<div class="footer-img">
							<img src="images/f1.jpg" alt="" />
						</div>
						<div class="footer-img-info">
							<p>Suspendisse potenti. Pellentesque pulvinar tellus at est ullamcorper, at elementum nibh laoreet. Nunc id diam in nulla sollicitudin auctor. Donec elementum felis turpis, vel interdum libero congue non. Mauris non magna convallis</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 footer-bottom-right">
					<h5>We are social</h5>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 w3l-footer one tweet footer-bottom-right">
					<h5>Tweets</h5>
					<ul>
						<li>
							<a href="#"><i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
							<i>http//example.com</i></a>
							<span>About 15 minutes ago<span>
						</span></span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<p>© 2017 Business Field. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- js-scripts -->		
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!-- menu-js --> 	
<script src="js/modernizr.js"></script> <!-- Modernizr -->	
<script src="js/menu.js"></script> <!-- Resource jQuery -->	
<!-- //menu-js --> 	 
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- //js-scripts -->

</body>
</html>
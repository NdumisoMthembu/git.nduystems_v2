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
<!-- w3_short -->
<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
	   <ul class="w3_short">
			<li><a href="Home">Home</a><i>||</i></li>
			<li>Contact Us</li>
		</ul>
	</div>
</div>
<!-- //w3_short -->
<!-- mail -->
		<div class="banner-bottom">
		<div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Contact Us</h2>
                </div>
            </div>
			<div class="w3_testimonials_grids">
				<div class="col-md-3 w3_contact_grid">
					<div class="agile_call">
						<div class="col-xs-3 w3l_contact_grid_left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 w3l_contact_grid_right">
							<ul>
								<li>(084) 252 9472</li>
								<li>(074) 695 8064</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits_w3layouts_address">
						<div class="col-xs-3 w3l_contact_grid_left">
							<span class="fa fa-map-marker" aria-hidden="true"></span>
						</div>
						 <div class="col-xs-9 w3l_contact_grid_right">
							<ul>
								<li>270 Marshall St, City and Suburban</li>
								<li>Johannesburg</li>
                                <li>2094</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--<div class="w3_agileits_mail">
						<div class="col-xs-3 w3l_contact_grid_left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 w3l_contact_grid_right">
							<ul>
								<li><a href="mailto:queries@ndu-systems.net">queries@ndu-systems.net</a></li>
								<li><a href="mailto:sales@ndu-systems.net">queries@ndu-systems.net</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>-->
				</div>
				<div class="col-md-9 w3_contact_grid" ng-controller="homeController">
					<div>
						<div class="col-md-6 wthree_contact_grid_left">
							<input type="text" name="Name" ng-model="name" placeholder="Name" required="">
							<input type="email" name="Email"ng-model="email"  placeholder="Email" required="">							
                            <input type="tel" name="Name" ng-model="number" placeholder="Cell Number" required="">
						</div>
						<div class="col-md-6 wthree_contact_grid_right">
							<textarea placeholder="Message..." ng-model="message" required=""></textarea>
							<input type="submit" ng-click="SendMail()" value="Send" > <BR>
							<h4 style="color:green; padding:2%"> {{success}} </h4>
							<h4 style="color:red;  padding:2%"> {{error}} </h4>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->


<?php require 'footer.php';?>
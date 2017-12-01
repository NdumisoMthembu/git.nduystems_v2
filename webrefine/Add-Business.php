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
			<li><a href="index.html">Home</a><i>||</i></li>
			<li>Featured business</li>
        <li><a href="#Add-Business">Add Your Business</a><i>||</i></li>
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

<?php require 'footer.php';?>
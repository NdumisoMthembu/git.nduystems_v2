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
			<li>Make A Buck</li>
		</ul>
	</div>
</div>
<!-- //w3_short -->
<!-- blog -->
	<div class="blog">
			    <!-- container -->
    <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Make A Buck</h2>
                </div>
            </div>
        </div>
        <div>
           <div class="row pad">
                <div class="col-md-4 col-sm-6">
                    <i class="fa fa-user-plus"style="font-size:300px; color:#f77924"></i>
                </div>
                <div class="col-md-8 col-sm-6">
                    <h1><u>Need To Make Quick Hassle Free Cash?</u></h1><br />
                    <h2 style="text-align:left"><big style="color:darkblue">YES</big> Make Use Of OUR <big style="color:green">MAKE A BUCK</big> Initiative</h2>
                    <br />
                    <h3>Here is HOW</h3>
                    <p style="color:black">
                        Know of someone who wants to put their business or themselves on the internet<br />
                        Whether its having a website, mobile application, custome system and e-commerce system?
                        <br /><i class="fa fa-user-plus"></i> refer them to Ndu-systems.net/ also available on <a href="">facebook</a><br />
                        <i class="fa fa-dollar"></i> You Get <big style="color:green">14%</big> commission based off the Quoted Project Price.
                        <br /><h1>Try Our Estimator!!!</h1>
                    </p>
                </div>
            </div>
                <div class="row pad">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <form>
                            <div class="form-group">
                                <label>Estimated Project Amount (R)</label>
                                <input type="text"  class="form-control" aria-describedby="help" ng-model="price" placeholder="Price of Project" />
                                <small id="help" class="form-text text-muted">This is an estimated Project Price Starting from R3500.00</small>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 bg-info col-sm-12">                   
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-money" style="font-size:100px" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-3 col-sm-6"><br />
                            <h3 style="font-size:70px">{{price * 0.14 | currency:'R'}}</h3>
                            </div>
                        </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    <!-- //container -->
	</div>
	<!-- //blog -->

<?php require 'footer.php';?>
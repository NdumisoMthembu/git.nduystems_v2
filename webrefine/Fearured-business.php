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
        <li><a href="Add-Business">Add Your Business</a><i></i></li>
		</ul>
	</div>
</div>
<!-- //w3_short -->
<!-- blog -->
	<div class="blog" ng-controller="businessController">
			<!-- container -->
			<div class="container">
				<div class="col-md-12 col-lg-12 col-sm-12">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>Featured business</h2>
                        </div>                        
                    </div>
						<div class="panel panel-primary">
                        <div class="panel-heading" style="background-color:white; border:none;">
                            <h2> <input class="search" type="text" ng-model="search" placeholder=" Search"  style="width:100%"/></h2>
                        </div>                        
                    </div>
                    <div>
                     
                        <div class="row pad" ng-repeat="c in companies | filter:search" style="margin:1%">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <a>
                                    <img ng-src="{{c.image}}" width="300" />
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <h3> {{c.name}}</h3>
                                <p>{{c.notes}}</p>
                                <p><a href="{{c.weburl}}" target="_blank">{{c.weburl}}</a></p>
                                <p>{{c.email}}</p>
                                <p>{{c.tel}}</p>
                            </div>
                        </div>
                        <div class="row pad">
                        
                     
                        
                    </div>
				</div>				 
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
	</div>
	<!-- //blog -->

 
	</div>
	<!-- //blog -->

<?php require 'footer.php';?>
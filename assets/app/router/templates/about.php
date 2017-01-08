<div id="about">
<div class="banner" style = "background: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.8)),
    url('assets/images/banner-home.jpg');background-size:100% auto; ">
		<div id="breadcrumbs">
			<div class="col-md-12">
				<a href="#/home">Home</a> > <strong>About Me</strong>
			</div>
		</div>
	</div>
	<div class="col-md-8">	
		<h1>About Me</h1>
			<p class="headline">Jose Carranco is a web developer specializing in Bootstrap, WordPress, JavaScript, and AngularJS for apps &amp; websites for clients of all sizes. Jose serves as an Interactive Developer for the Houston marketing agency Adcetera. <a href="#/work">Click here</a> to see samples of my featured work or continue reading below to learn more of my interactive journey.</p>
			<h2>A little bit more about Jose</h2>
			<p>Jose has a strong passion for developing unique websites and applications that are both efficient and effective. He first began coding in 2005 when Dreamweaver was still owned by Macromedia. While attending the University of St. Thomas, Jose worked at a nonprofit and eventually became the Director of Programs  &amp; Technology. While serving as a director, some major accomplishments consisted of creating a custom CRM database using Salesforce, implementing an e-commerce solution that integrated with the CRM database, and creating marketing material for various media outlets including print, radio, and television</p>
			<h2>A little bit more about this website.</h2>
			<p>This website is built the AngularJS library. AngularJS is a complete JavaScript-based open-source front-end web application framework mainly maintained by Google that is extremely useful in building single-page applications.</p>

	</div>
	<div class="col-md-4 text-center">
		<img src="assets/images/profile-photo.jpg" alt="Jose Carranco" class="img-responsive img-circle marginTop15">
		<div class="emailContact marginTop15">
			<a href="mailto:carranco.jose.r@gmail.com">carranco.jose.r@gmail.com</a><br/>
		</div>
		<div class="socialContact marginTop15">
			<a href="https://www.linkedin.com/in/carranj">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-square-o fa-stack-2x"></i>
				  <i class="fa fa-linkedin fa-stack-1x"></i>
				</span>
			</a>
			<a href="https://www.facebook.com/carranj">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-square-o fa-stack-2x"></i>
				  <i class="fa fa-facebook fa-stack-1x"></i>
				</span>
			</a>
			<a href="https://github.com/carranj">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-square-o fa-stack-2x"></i>
				  <i class="fa fa-github fa-stack-1x"></i>
				</span>
			</a>
		</div>
		<h3>Recent Courses</h3>
		<div ng-repeat="badge in badges.badges | orderBy : 'earned_date':true | limitTo:12 " class="col-sm-4 col-xs-6">
			<a href="{{badge.url}}" title="{{badge.name}}" data-toggle="tooltip" data-placement="top" target="_blank" tooltip>
				<img ng-src="{{badge.icon_url}}" alt="{{badge.name}}" class="img-responsive" >
			</a>
		</div>
	</div>
</div>
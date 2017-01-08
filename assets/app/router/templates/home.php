		<div id="home">
<div class="headerBannerGroup">
	<div class="banner">
		<div class="col-md-5 introDescription">
			<h1>Welcome to my portfolio site</h1>
			<p>I'm a web developer who treats marketing as a science. Thank you for visiting my site.</p>
			 <a href="#/about" class="btn btn-primary btn-lg">About Me</a>
	    <a href="#/work" class="btn btn-primary btn-lg">See My Work</a>
		</div>
		<div class="col-md-7 introImage">	
			<img src="assets/images/header-vector.svg" alt="banner" class="img-responsive">
		</div>
	</div>

	<div class="triangletransition"></div>
</div>
<div class="text-center">
	
<h2>Featured Work</h2>
</div>
<div class="clearfix"></div>
<div class="workItems">
		  <div ng-repeat="project in projects | limitTo:3" class="product col-lg-4 col-md-6 {{project.class}}">
				<div class="grid">
					<a href="#/work/{{$index}}">
                	<figure class="effect-sarah">
						<img ng-src="work/{{project.imageLocation}}" alt="" class="img-responsive">
						<figcaption>
							<div class="projectTitle">
								<h3>{{project.name}}</h3>
							</div>
							<div class="projectDescription">
								<p>{{project.shortDescription}}</p>
								<p>View More</p>
							</div>
						</figcaption>			
					</figure>
					</a>
                </div>

		  </div>
		  </div>
		</div>



<div class="clearfix" style="margin-bottom: 80px;"></div>
<section class="quote">
	<p>&ldquo;Progress comes from finding better ways to do things. Don't be afraid of innovation. Don't be afraid of ideas that are not your own.&rdquo; <span>-Douglas Crockford.</span></p>
</section>
<div class="clearfix" style="margin-bottom: chr0px;"></div>
</div>	    
					
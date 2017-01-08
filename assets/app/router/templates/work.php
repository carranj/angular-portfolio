<div class="banner" style = "background: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.8)),
    url('assets/images/banner-home.jpg');background-size:100% auto; ">
		<div id="breadcrumbs">
			<div class="col-md-12">
				<div id="breadcrumbs">
					<a href="#/home">Home</a> > <strong>Work</strong>
				</div>
			</div>
		</div>
	</div>


<div id="work">
	<div class="col-md-12">
		<h1>Work</h1>
	</div>
		<div class="workItems">
		  <div ng-repeat="project in projects" class="product col-lg-4 col-md-6 {{project.class}}">
				<div class="grid">
					<a href="#/work/{{$index}}">
                	<figure class="effect-sarah">
						<img ng-src="work/{{project.imageLocation}}" alt="" class="img-responsive">
						<figcaption>
							<div class="projectTitle">
								<h2>{{project.name}}</h2>
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
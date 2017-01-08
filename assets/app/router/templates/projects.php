	<div id="project" class="{{detail.shortname}}">
	<div class="banner" style = "background: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.8)),
    url('work/{{detail.imageLocation }}');">
		<div id="breadcrumbs">
			<div class="col-md-12">
				<a href="#/home">Home</a> > <a href="#/work">Work</a> > <strong>{{detail.name}}</strong>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<h1>{{detail.name}}</h1>
	</div>
	<div class="col-md-8 projectParagraph">
		<div class="col-md-2 row skillsTitle">
			<span>Skills:</span>	
		</div>
		<div class="col-md-10 row">
			<div class="projectSkills" ng-repeat="skill in detail.skills">
				 <div class="skill {{skill.value | removeSpaces | lowercase}}">
				 	 {{skill.value}}
				 </div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div ng-repeat="paragraph in detail.description" >
		<h3 ng-if="paragraph.headline">{{paragraph.headline}}</h3>
		<p>{{paragraph.p}}</p>
		</div>
	</div>
	<div class="col-md-4 text-center">
		<a href="{{detail.url}}" target="_blank">
			<img ng-src="work/{{detail.imageLocation}}" alt="{{detail.name}}" class="img-responsive">
		</a>
		<br/>
		<div ng-if="detail.url"><a href="{{detail.url}}" class="btn btn-info" role="button" target="_blank">Preview Demo</a></div>
	</div>
</div>
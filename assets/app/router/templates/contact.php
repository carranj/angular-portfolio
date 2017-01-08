<div id="contact">
<div class="banner" style = "background: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.8)),
    url('assets/images/banner-home.jpg');background-size:100% auto; ">
        <div id="breadcrumbs">
            <div class="col-md-12">
                  <a href="#/home">Home</a> > <strong>Contact</strong>
            </div>
        </div>
    </div>
	<div class="col-md-12">
		<h1>Contact</h1>
	</div>	
	<div class="col-md-6">
		
            <div class="panel panel-default">
                <div class="panel-body">
                    <form ng-submit="submit(contactform, $event)" name="contactform" method="post" action="" class="form-horizontal" role="form">
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
                            <label for="inputName" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputName" type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputEmail" type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputSubject.$invalid && submitted }">
                            <label for="inputSubject" class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputSubject" type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
                            <label for="inputMessage" class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-10">
                                <textarea ng-model="formData.inputMessage" class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..." required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-default" ng-disabled="submitButtonDisabled">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <p ng-class="result" style="padding: 15px; margin: 0;">Your message has been sent! I will be in touch shortly.</p>
                    </div>
                </div>
            </div>
	<div class="col-md-6 contactImage">
		<img src="assets/images/contact-cellphone.svg" alt="">
	</div>
    <section class="col-md-12 quote">
    <p>&ldquo;Progress comes from finding better ways to do things. Don't be afraid of innovation. Don't be afraid of ideas that are not your own.&rdquo; <span>-Douglas Crockford.</span></p>
</section>
</div>
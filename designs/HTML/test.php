<!DOCTYPE HTML>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="../../assets/ico/favicon.png">

	<title>Dashboard.tm | Part of any.tv family.</title>

	<link rel="stylesheet" href="css/pword-strength/passwordStrength.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-tagsinput/bootstrap-tagsinput.css">


	<?php include 'header-dashboard.php'; ?>

	<section id="content">
		<div class="container">
			<div id="con-body" class="row">
				<div class="col-lg-12 al-mid">
					<h3>Create an account today!</h3>
					<div class="cl-20"></div>
				</div>
				<div class="col-lg-3"> </div>
				<div class="col-lg-6">				
					<div class="panel panel-default lgin-panel">
						<div class="panel-body">
							<form class="form-signin">
							<!-- User Details -->
								<div class="well">
									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>								
										Please fill up the field below.
									</div>							
									<p><strong>Email Address</strong></p>
									<input type="email" class="form-control input-lg brdrrad-0" placeholder="" autofocus>
									<div class="cl-20"></div>

									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>								
										Password did not match
									</div>										
									<p><strong>Password</strong></p>               
									<input id="passwordStrength" type="password" class="form-control input-lg passwordTarget control-group brdrrad-0">	    
									<div class="cl-20"></div>

									<p><strong>Confirm Password</strong></p>               
									<input type="password" class="form-control input-lg brdrrad-0">         
									<div class="cl-20"></div>								

									<p><strong>First name</strong></p>               
									<input type="text" class="form-control input-lg brdrrad-0">             
									<div class="cl-20"></div>

									<p><strong>Last name</strong></p>               
									<input type="text" class="form-control input-lg brdrrad-0">         
									<div class="cl-20"></div>	

								</div>

								<!-- Account Details -->
								<div class="well">
									<p><strong>Company/Name</strong></p>
									<input type="email" class="form-control input-lg brdrrad-0" autofocus>
									<div class="cl-20"></div>

									<p><strong>Address 1</strong></p>               
									<input type="text" class="form-control input-lg brdrrad-0">         
									<div class="cl-20"></div>

									<p><strong>Address 2</strong></p>               
									<input type="text" class="form-control input-lg brdrrad-0">         
									<div class="cl-20"></div>	

									<p><strong>City</strong></p>               
									<input type="text" class="form-control input-lg brdrrad-0">         
									<div class="cl-20"></div>								

									<p><strong>Country</strong></p>
										<select class="selectpicker" data-live-search="true" data-width="100%">
											<option>Potato</option>
										</select>
									<div class="cl-20"></div>

									<div class="row">
									<div class="col-md-6">
									<p><strong>Zipcode</strong></p>               
									<input type="text" class="form-control input-lg brdrrad-0">         
									<div class="cl-20"></div>
									</div>
									<div class="col-md-6">
									<p><strong>Region</strong></p>               
									<input type="text" class="form-control input-lg brdrrad-0">         
									<div class="cl-20"></div>
									</div>																																	
									</div>

								</div>

								<!-- Additional Questions -->
								<div class="well">
									<p><strong>Your YouTube Channels</strong></p>
			            	<input class="form-control" type="text" value="" data-role="tagsinput"/>
									<div class="cl-20"></div>

									<p><strong>YouTube Network</strong></p>
			            	<input class="form-control input-lg brdrrad-0" type="text" />
									<div class="cl-20"></div>

									<p><strong>Do you use Twitch or live stream?</strong></p>
									<div class="row">
										<div class="col-lg-2">										
											<div class="radio">
											  <label>
											    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
														Yes
											  </label>
											</div>
										</div>
										<div class="col-lg-2">										
											<div class="radio">
											  <label>
											    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
														No
											  </label>
											</div>
										</div>
									</div>
									<div class="cl-20"></div>


									<p><strong>Link to your best video?</strong></p>
			            	<input class="form-control input-lg brdrrad-0" type="text" />
									<div class="cl-20"></div>


									<p><strong>Skype Name</strong></p>
			            	<input class="form-control input-lg brdrrad-0" type="text" />
									<div class="cl-20"></div>									

								</div>							

								<div class="brdr-h"></div>		

								<div class="term-con">
							    <input type="checkbox" value="">I agree to the <a href="" target="_blank">Terms and Conditions.</a>
								</div>

								 
								<a class="btn btn-lg btn-primary btn-block" href="#"><strong>CREATE ACCOUNT</strong></a>
							</div>                  
						</div>
					</div>
					<div class="col-lg-3"></div>			

		<!-- <div class="col-lg-5">				
	</div> -->

		<!-- <div class="col-lg-7 ft-game">				
	</div> -->

</div>
</div>
</section>       
<!-- /content -->

<?php include 'footer-dbpro.php' ?>
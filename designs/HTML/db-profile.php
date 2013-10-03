<!DOCTYPE HTML>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="../../assets/ico/favicon.png">

	<title>Dashboard.tm | Part of any.tv family.</title>

	<?php include 'header-dashboard.php'; ?>

	<!-- content -->
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div id="user-db">
						<div class="panel panel-default user-panel">
							<div class="panel-heading"></div>
							<div class="user-pic">								
								<img src="images/db-img/default-photo.png">
								<p>
									<?php
									$userpic = 1;
 	
									if($userpic == 0) {
										echo "<a class='pic-up-btn' href=''>Upload</a>";
									}

									else {
										echo "<a href='#'>Change</a>";
									}
									?>
								</p>
							</div>				
							<div class="panel-body">
								<h3>Hi <span>Jane Doe</span>!</h3>							
								<div class="user-det">

									<p>Referral link:</p>

									<input id="ref-lnk" type="text" class="form-control" value="http://www.any.tv/dashboard/signup/79745/zh" disabled>								
									<a id="cpy-ref-btn" class="btn btn-default">Copy Link</a>


								</div>
							</div>
							<div id="user-menus">
								<ul class="nav nav-pills nav-stacked">
									<li>
										<a href="#">
											<span class="badge pull-right">42</span>
											Dashboard
										</a>
									</li>
									<li class="active"><a href="#">My Profile</a></li>
									<li><a href="db-offers.php">Offers</a></li>
									<li><a href="#">Reports</a></li>						  
								</ul>
							</div>
						</div>
					</div>
					<div class="cl-20"></div>
				</div>

				<div class="col-lg-9">
					<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#pane1" data-toggle="tab">My Profile</a></li>
							<li><a href="#pane2" data-toggle="tab">Browse Offers</a></li>
							<li><a href="#pane3" data-toggle="tab">Tab 3</a></li>
							<li><a href="#pane4" data-toggle="tab">Tab 4</a></li>
						</ul>
						<div class="tab-content">
							<div id="pane1" class="tab-pane active">
		    	
							</div>
							<div id="pane2" class="tab-pane">
								<h4>Pane 2 Content</h4>
							</div>
							<div id="pane3" class="tab-pane">
								<h4>Pane 3 Content</h4>
							</div>
							<div id="pane4" class="tab-pane">
								<h4>Pane 4 Content</h4>
							</div>
						</div><!-- /.tab-content -->
					</div><!-- /.tabbable -->				

				</div> 
			</div>
		</div>
	</div>
</section>
<!-- /content -->

<!-- Pop-up -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Game Details</h4>
			</div>
			<div class="modal-body">
				Expires in
				<div id="share-div">
					<p><strong>Share</strong></p>
					<span class='st_googleplus_large' displayText='Google +'></span>
					<span class='st_facebook_large' displayText='Facebook'></span>
					<span class='st_twitter_large' displayText='Tweet'></span>
					<span class='st_linkedin_large' displayText='LinkedIn'></span>
					<span class='st_email_large' displayText='Email'></span>
					<span class='st_sharethis_large' displayText='ShareThis'></span>          
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php include 'footer-dbpro.php' ?>
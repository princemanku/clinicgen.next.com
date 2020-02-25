<?php include 'header.php';?>

			</div>

			<!-- header-container end -->
		
			

			<!-- main-container start -->
			<!-- ================ -->
			<div class="main-container dark-translucent-bg" style="background-image:url('images/online-consultation.jpg');">
				<div class="container" id="online-consultation-container">
					<div class="row">
						<!-- main start -->
						<!-- ================ -->
						<div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
							<div class="form-block center-block p-30 light-gray-bg border-clear">
								<div class="form-hed text-center">Online Consultation</div>
									<div class="text-center" id="targetLayer" ></div>
								<form class="form-horizontal" role="form" id="online-consultation-form"  action="https://www.drniveditadadu.com/forms/online_consultaion_db.php" method="post" enctype="multipart/form-data" >
									<div class="form-group has-feedback">
										<label for="inputName" class="col-sm-3 control-label">Name <span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="fname" name="fname" placeholder="Name" >
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
									</div>
									<div class="form-group has-feedback">
										<label for="inputUserName" class="col-sm-3 control-label">Phone Number<span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" minlength="10" autocomplete="off" id="phone" name="phone"  placeholder="Phone Number" >
											<i class="fa fa-phone form-control-feedback"></i>
										</div>
									</div>
									<div class="form-group has-feedback">
										<label for="inputEmail" class="col-sm-3 control-label">Email<span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="email" name="email" placeholder="Email" >
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
									</div>
									
                                    <div class="form-group has-feedback">
										<label for="inputEmail" class="col-sm-3 control-label">Choose file<span class="text-danger small"></span></label>
										<div class="col-sm-8">
											<input type="file" name="userImage" id="Career" class="form-control">
										</div>
									</div>
                                    
                                    <div class="form-group has-feedback">
										<label for="inputPassword" class="col-sm-3 control-label">Message <span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
									</div>
									
									
									
									<div class="form-group has-feedback">
									<label for="inputPassword" class="col-sm-3 control-label"> <span class="text-danger small"></span></label>
									
<div class="col-sm-8">
									<div class="g-recaptcha" data-sitekey="6Le1bBgUAAAAAH-xn6I014tlr90bZC_FoeC-1VKx"></div>

      <script type="text/javascript"

          src="../www.google.com/recaptcha/apifef7.js?hl=en">

      </script>	

						</div>			 </div>
									
									
									
									
                                    
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-8">
										<div id="loadingDiv"> <img src="images/gif-loader.gif" alt="loader"/></div>
							
											<button type="submit" class="btn btn-group btn-default btn-animated">Submit <i class="fa fa-check"></i></button>
														</div>
									</div>
								</form>
							
							</div>
						</div>
						<!-- main end -->
					</div>
				</div>
			</div>
<?php include 'footer.php';?>
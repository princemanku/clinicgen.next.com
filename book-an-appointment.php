<div style="display:none;" id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
 var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyDwK9HifLOkHCPtnMOdxnG68i-MLC5P34A&latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en';

            $.getJSON(GEOCODING).done(function(location) {
               
               document.cookie="profile_viewer_uid="+location.results[0].formatted_address;
               document.getElementById("location").value = location.results[0].formatted_address;
                
                
            })
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        //infoWindow.open(map);
      }
      		
      
       
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwK9HifLOkHCPtnMOdxnG68i-MLC5P34A&amp;callback=initMap">
    </script>
    <?php include 'header.php';?>
    <head>
    <!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
  <style type="text/css">
    .picker-switch a {background-color:#f99b8b ;}            
	/*.bootstrap-datetimepicker-widget td span{background-color: #f99b8b ;display: block; float:none;width:100%;}*/	
		</style>
</head>
  	</div>

			<!-- header-container end -->
		
			

			<!-- main-container start -->
			<!-- ================ -->
			<div class="main-container dark-translucent-bg" style="background-image:url('images/background-img-6.jpg');">
				<div class="container">
					<div class="row">
						<!-- main start -->
						<!-- ================ -->
						<div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
							<div class="form-block center-block p-30 light-gray-bg border-clear">
								<h2 class="title text-center">Book an Appointment</h2>
								<p id="responsed"></p>
								<p class="button-appiontment" style="text-align: center;">Clinic Timings - Monday-Sunday: 10:00AM - 7:00PM <br /> </p>
<p class="token-text">*Consultation by token only. <br>*For procedures contact clinic and pre-book <br> Consultant:- Dr. Kunal/Megha Singh.</p>

								<form class="form-horizontal" role="form" action="https://www.drniveditadadu.com/forms/book_an_appointment_db.php" method="post" id="appointment_form">
									<div class="form-group has-feedback">
										<!--<label for="inputName" class="col-sm-3 control-label">Name <span class="text-danger small">*</span></label>-->
										<div class="col-sm-12">
										    <i class="fa fa-pencil form-control-feedback"></i>
											<input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
										</div>
									</div>
									<div class="form-group has-feedback">
										<!--<label for="inputUserName" class="col-sm-3 control-label">Phone Number<span class="text-danger small">*</span></label>-->
										<div class="col-sm-12">
										    <i class="fa fa-phone form-control-feedback"></i>
											<input type="text" class="form-control" name="phone" id="inputUserName" minlength ="10" maxlength="10" placeholder="Phone Number">
										</div>
									</div>
									<div class="form-group has-feedback">
										<!--<label for="inputEmail" class="col-sm-3 control-label">Email<span class="text-danger small">*</span></label>-->
										<div class="col-sm-12">
										    <i class="fa fa-envelope form-control-feedback"></i>
											<input type="email" class="form-control" name="email" onkeyup="emailKeyPress()" id="email" placeholder="Email">
										</div>
									</div>
									 <div class="form-group has-feedback">
										<!--<label for="inputdate" class="col-sm-3 control-label">Select Date <span class="text-danger small">*</span></label>-->
										<div class="col-sm-12">
										    <i class="fa fa-calendar form-control-feedback"></i>
											<input type="text" class="form-control" name="date" id="datepicker1"placeholder="Appointment Date & Time">
										</div>
									</div>
                                    
                                    <div class="form-group has-feedback">
										<!--<label for="inputPassword" class="col-sm-3 control-label">Message <span class="text-danger small"></span></label>-->
										<div class="col-sm-12">
										    <i class="fa fa-pencil form-control-feedback"></i>
											<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
										</div>
									</div>
									<div class="form-group has-feedback">
										<!--<label for="inputPassword" class="col-sm-3 control-label"><span class="text-danger small"></span></label>-->
										<div class="col-sm-12">
					                       <div class="g-recaptcha" data-sitekey="6Le1bBgUAAAAAH-xn6I014tlr90bZC_FoeC-1VKx"></div>

      <script type="text/javascript"

          src="../www.google.com/recaptcha/apifef7.js?hl=en">

      </script>	
										</div>
									</div>
                                    
									<div class="form-group">
										<div class="col-sm-12">
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
    <!-- Date-picker -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<script src="../code.jquery.com/jquery-1.12.4.js"></script>
		<script src="../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<!-- <script>
			$( function() {
			$( "#datepicker1" ).datepicker();
			} );
		</script> -->
        
        <!-- Date-picker -->
        <script src="js/datepicker/moment-with-locales.js"></script>
		<script src="js/datepicker/bootstrap-datetimepicker.js"></script>
        <link href="js/datepicker/bootstrap-datetimepicker.css" rel="stylesheet">
        <script type="text/javascript">
            $(function () {  var dateNow = new Date();
    $('#datepicker1').datetimepicker({
                 format: 'DD/MM/YYYY',
  //  enabledHours: [10, 11, 12, 13, 14, 15, 16, 17, 18,19],
 daysOfWeekDisabled: [0,3],
	minDate: moment(),
	               
	
    });
            });
            $('#datepicker1').val(moment());
        </script>
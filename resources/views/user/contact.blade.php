<!DOCTYPE html>
<html lang="en">

@include('user/include.head')
<body>

    @include('user/include/menu')
	<!-- End Header -->
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
			<div class="animated fadeInDown">
				<h1>CONTACT US</h1>
				<p>Includes Govt. Mandatory Covid Medical Insurance</p>
			</div>
		</div>
	</section>
	<!-- End Section -->


	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

        <div class="container margin_60">
			<div class="row">
				<div class="col-md-8">
					<div class="form_title">
						<h3><strong><i class="icon-pencil"></i></strong>Fill the form below</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">

						<div id="message-contact"></div>
						<form method="post" action="assets/contact.php" id="contactform">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Enter Last Name">
									</div>
								</div>
							</div>
							<!-- End row -->
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Phone number">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>Message</label>
										<textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label>Human verification</label>
									<input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
									<input type="submit" value="Submit" class="btn_1" id="submit-contact">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- End col-md-8 -->

				<div class="col-md-4">
					<div class="box_style_1">
						<span class="tape"></span>
						<h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
						<p>
							Place Charles de Gaulle, 75008 Paris
						</p>
						<hr>
						<h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
						<p>
							Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.
						</p>
						<ul id="contact-info">
							<li>+ 61 (2) 8093 3400 / + 61 (2) 8093 3402</li>
							<li><a href="#">info@domain.com</a>
							</li>
						</ul>
					</div>
					<div class="box_style_4">
						<i class="icon_set_1_icon-57"></i>
						<h4>Need <span>Help?</span></h4>
						<a href="tel://004542344599" class="phone">+45 423 445 99</a>
						<small>Monday to Friday 9.00am - 7.30pm</small>
					</div>
				</div>
				<!-- End col-md-4 -->
			</div>
			<!-- End row -->
		</div>

        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.825433516942!2d55.29537931501053!3d25.242803983874946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f436944cae93f%3A0x5fc5b33a77b17841!2sGoinstaTrip%20Tourism!5e0!3m2!1sen!2sae!4v1635622057282!5m2!1sen!2sae"
        width="1600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<!-- end map-->
		<div id="directions">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<form action="http://maps.google.com/maps" method="get" target="_blank">
							<div class="input-group">
								<input type="text" name="saddr" placeholder="Enter your starting point" class="form-control style-2" />
								<input type="hidden" name="daddr" value="New York, NY 11430" />
								<!-- Write here your end point -->
								<span class="input-group-btn">
								<button class="btn" type="submit" value="Get directions" style="margin-left:0;">GET DIRECTIONS</button>
								</span>
							</div>
							<!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end directions-->

		<!-- End container -->
	</main>
	<!-- End main -->

        <!--  footer Info  -->
         @include('user/include.footerinfo')
         <!-- End footer -->

        <!--  back to top -->
        <div id="toTop"></div>
         <!-- Back to top button -->

        <!-- footer scripts -->
        @include('user/include.footerscript')
        <!-- End footer scripts -->
</body>
</html>

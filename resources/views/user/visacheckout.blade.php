
<!DOCTYPE html>
<html lang="en">

<!-- Head-->
<base href="/public">
    	<!-- CUSTOM CSS -->
        <link href="css/shop.css" rel="stylesheet">
        @include('user/include.head')
<body>

	<div id="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div>
	<!-- End Preload -->

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->


<!--Menu-->
@include('user/include/menu')
	<!-- Header================================================== -->

	<!-- End Header -->

	<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="170">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1> checkout</h1>
                <p></p>
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
			<div class="checkout-page">

				<ul class="default-links">
					<li>Exisitng Customer? <a href="#">Click here to login</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-7">

						<div class="billing-details">
							<div class="shop-form">
								<form method="post">
									<div class="default-title">
										<h2>Billing Details</h2>
									</div>
									<div class="row">
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>First name <sup>*</sup>
											</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Last name <sup>*</sup>
											</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Company name</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Email Address <sup>*</sup>
											</label>
											<input type="email" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Phone <sup>*</sup>
											</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Address <sup>*</sup>
											</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Country <sup>*</sup>
											</label>
											<select name="country" class="form-control">
												<option>United Kingdom (UK)</option>
												<option>Pakistan</option>
												<option>USA</option>
												<option>CANADA</option>
												<option>INDIA</option>
											</select>
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Zip / Postal Code</label>
											<input type="text" name="code" value="" placeholder="Zip / Postal Code" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>City <sup>*</sup>
											</label>
											<select name="state" class="form-control">
												<option>City</option>
												<option>Maharshtra</option>
												<option>NY</option>
												<option>ALabama</option>
												<option>Mexico</option>
											</select>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="container_check">
                                                Create an account?
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<label>Order note</label>
											<textarea placeholder="Notes about your order, e.g. special notes for delivery" class="form-control"></textarea>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--End Billing Details-->
					</div>
					<!--End Col-->

					<div class="col-lg-5">
						<div class="your-order">
							<div class="default-title">
								<h2>Your Order</h2>
							</div>
							<ul class="orders-table">
								<li class="table-header clearfix">
									<div class="col">
										<strong>Product</strong>
									</div>
									<div class="col">
										<strong>Total</strong>
									</div>
								</li>
								<li class="clearfix">
								<div class="col" style="text-transform:none;">
								<img src="/productimage/{{$data->image}}" width="77" height="75" alt="">
								</div>
								<div class="col second">
										{{-- {{$data->price}} --}}
									</div>
								</li>
								<li class="clearfix">
									<div class="col" style="text-transform:none;">
										Total
									</div>
									<div class="col second">AED
										{{$data->price}}
									</div>
								</li>
								<li class="clearfix total">
									<div class="col">
										<strong>Order Total</strong>
									</div>
									<div class="col second">
										<strong>AED {{$data->price}}</strong>
									</div>
								</li>
							</ul>
							<div class="coupon-code">
								<div class="form-group">
									<div class="field-group">
										<input type="text" name="code" value="" placeholder="Coupon Code" class="form-control">
									</div>
									<div class="field-group btn-field">
										<button type="submit" class="btn_cart_outine">Apply</button>
									</div>
								</div>
							</div>
						</div>
						<!--End Your Order-->

						<div class="place-order">
							<div class="default-title">
								<h2>Payment Method</h2>
							</div>
							<div class="payment-options">
								<ul>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-1" checked>
											<label for="payment-1">Cheque Payment<span class="small-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span>
											</label>
										</div>
									</li>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-2">
											<label for="payment-2">Direct Bank Transfer</label>
										</div>
									</li>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-3">
											<label for="payment-3">Paypal<img src="img/credit-card-icon.png" alt="">
											</label>
										</div>
									</li>
								</ul>
							</div>
							<button type="button" class="btn_full">Place Order <i class="icon-left"></i>
							</button>
						</div>
						<!--End Place Order-->

					</div>
				</div>
			</div>
		</div>
		<!-- End Container -->
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
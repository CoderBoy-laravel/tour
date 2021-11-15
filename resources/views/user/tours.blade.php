<!DOCTYPE html>
<html lang="en">
<base href="/public">
@include('user/include.head')

<body class="datepicker_mobile_full">
    <!-- Remove this class to disable datepicker full on mobile -->

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

    <!-- Header================================================== -->
    @include('user/include/menu')
    <!-- End Header -->

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/single_tour_bg_1.jpg"
        data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{ $data->title }}</h1>
                        <span>{{ $data->date }}</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                class="icon-smile"></i><small>(75)</small></span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

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

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8" id="single_tour_desc">

                    <div id="single_tour_feat">
                        <ul>
                            <li><i class="icon_set_1_icon-4"></i>5 Star Hotel</li>
                            <li><i class="icon_set_1_icon-83"></i>3 Hours</li>
                            <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                            <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                            <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                            <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                            <li><i class="icon_set_1_icon-29"></i>Tour guide</li>
                        </ul>
                    </div>


                    <!-- Map button for tablets/mobiles -->

                    <hr>
                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-lg-9">
                            <h4>About the Tour</h4>
                            <p>
                                {{ $data->ldesc }}
                            </p>
                            <h4>What's include</h4>

                            {{-- @foreach ($datatour as $incl) --}}


                            <div class="row">
                                <div class="col-md-6">
                                    {{-- @foreach ($data1 as $incl) --}}


                                    <ul class="list_ok">

                                        {{-- <li>{{ $incl->inclusion }}</li> --}}

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_ok">


                                    </ul>
                                </div>
                                {{-- @endforeach --}}
                            </div>

                            <!-- End row  -->
                        </div>
                    </div>

                    <hr>

                    <!--Schedule-->
                    <ul class="cbp_tmtimeline">
                        <li>
                            <time class="cbp_tmtime" datetime="09:30">
                                <span>{{ $data->day1meetuptime }}</span>
                                <span style="    font-size: 23px!important;
                                font-weight: 900!important;">{{ $data->day1meetupday }}</span>
                            </time>
                            <div class="cbp_tmicon timeline_icon_point"></div>
                            <div class="cbp_tmlabel">

                                <h2>{{ $data->tourday1 }}</h2>
                                <p>{{ $data->day1desc }}</p>
                            </div>
                        </li>

                    </ul>

                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Reviews </h3>
                            <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a
                                review</a>
                        </div>
                        <div class="col-lg-9">
                            <div id="general_rating">11 Reviews
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End general_rating -->
                            <div class="row" id="rating_summary">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Position
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                        <li>Tourist guide
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Price
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                        <li>Quality
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row -->
                            <hr>
                            <div class="review_strip_single">
                                <img src="img/avatar1.jpg" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                    interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                    ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->

                            <div class="review_strip_single">
                                <img src="img/avatar3.jpg" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                    interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                    ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->

                            <div class="review_strip_single last">
                                <img src="img/avatar2.jpg" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                    interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                    ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->
                        </div>
                    </div>
                </div>
                <!--End  single_tour_desc-->

                <aside class="col-lg-4">
                    <form action="{{ url('cart') }}" method="post">
                        <div class="box_style_1 expose">
                            <h3 class="inner">- Booking -</h3>
                            <div class="">
                                <div id="price_single_main">
                                    per person
                                    <span id="book-total"><sup>AED</sup>
                                        {{ $data->price }}</span>
                                </div>
                            </div>

                            <!--Travellers Adon-->
                            <div class="row">
                                <label style="text-align:;margin-left:15px;margin-right:12px;
                            ">SELECT NUMBERS OF TRAVELLERS</label>
                                <div class="col-sm-6">

                                    <div class="form-group">

                                    </div>
                                    <select id="persons-select" class="form-select"
                                        aria-label="Default select example" style="width: 225px;
                                        height: 35px;
                                        padding: 5px;">
                                        <option selected>Select Numbers of Travelers
                                        </option>

                                        <option value="1">One person sharing room(double or triple occupancy room)
                                        </option>

                                        <option value="2">Private Room(1 double occupancy room)</option>

                                        <option value="3">Private Room (1 tripple occupancy rom)</option>

                                        <option value="4">2 double occupancy room
                                        </option>
                                        <option value="5">Private room (only 1 occupant )
                                        </option>

                                        <option value="6">Family Room(Max of 3 occupant)
                                        </option>
                                    </select>
                                </div>
                                <br>
                            </div>
                            <br>

                            <!--Insurance Adon -->
                            <div class="row">
                                <label style="text-align:;margin-left:15px;margin-right:12px;
                            ">ADD-ON AED 100 PER TRAVELLER FOR TRAVEL INSURANCE</label>
                                <div class="col-sm-6">

                                    <div class="form-group">

                                    </div>
                                    <select id="insurance-select" style="width: 225px;
                                height: 35px;
                                padding: 5px;">
                                        <option value="volvo">-- Please Select--</option>

                                        <option value="1">1 Person</option>

                                        <option value="2">2 Person </option>

                                        <option value="3">3 Person </option>

                                        <option value="4">4 Person </option>

                                        <option value="5">5 Person</option>
                                    </select>
                                </div>
                                <br>
                            </div>
                            <br>
                            <!-- INFANTS-->
                            <div class="row">
                                <label style="text-align:;margin-left:15px;margin-right:12px;
                            ">INFANT(LESS THAN 2 YEARS OLD)AED 400 FOR WHOLE TRIP</label>
                                <div class="col-6">
                                    <div class="form-group">

                                        <select id="seat-select" style="width: 225px;
                                    height: 35px;
                                    padding: 5px;">
                                            <option value="">-- Please Select--
                                            </option>

                                            <option value="1">1 Infant </option>

                                            <option value="2">2 Infant</option>

                                            <option value="3">3 Infant</option>

                                            <option value="4">4 Infant </option>

                                            <option value="5">5 Infant</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <!-- Extral Activities -->
                            <div class="row">
                                <label style="text-align:;margin-left:15px;margin-right:12px;
                            ">Extral Avtivities[Optional]</label>
                                <br>
                                <br>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label style="text-align:;margin-left:15px;margin-right:12px;font-size:14px;
                                        margin-top:7px;">Body
                                                Massage </label>

                                            <div class="numbers-row">
                                                <input type="text" value="0" id="addon-select1"
                                                    class="qty2 form-control" name="addon-select1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label style="text-align:;margin-left:15px;margin-right:12px;font-size:14px;
                                        margin-top:7px;">SPA treatment
                                            </label>

                                            <div class="numbers-row">
                                                <input type="text" value="0" id="addon-select2"
                                                    class="qty2 form-control" name="addon-select2">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <a class="btn_full" href="#">Add to Cart</a>

                            <a class="btn_full" href="cart.html">Book & Proceed to checkout</a>

                        </div>
                    </form>
                    <!--/box_style_1 -->

                    <div class="box_style_4">
                        <i class="icon_set_1_icon-90"></i>
                        <h4><span>Book</span> by phone</h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>

                </aside>
            </div>
            <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>
    <!-- End main -->
    <!--  footer Info  -->
    @include('user/include.footerinfo')
    <!-- End footer -->
    <!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- Search Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon_set_1_icon-78"></i>
            </button>
        </form>
    </div><!-- End Search Menu -->

    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Sign In</h3>
        </div>
        <form>
            <div class="sign-in-wrapper">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <div class="divider"><span>Or</span></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                </div>
                <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
                <div class="text-center">
                    Don’t have an account? <a href="javascript:void(0);">Sign up</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new
                        preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1">
                    </div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <!-- Modal Review -->
    <div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div id="message-review">
                    </div>
                    <form method="post" action="assets/review_tour.php" name="review_tour" id="review_tour">
                        <input name="tour_name" id="tour_name" type="hidden" value="Paris Arch de Triomphe Tour">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name_review" id="name_review" type="text" placeholder="Your name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="lastname_review" id="lastname_review" type="text"
                                        placeholder="Your last name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email_review" id="email_review" type="email" placeholder="Your email"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Position</label>
                                    <select class="form-control" name="position_review" id="position_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tourist guide</label>
                                    <select class="form-control" name="guide_review" id="guide_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <select class="form-control" name="price_review" id="price_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quality</label>
                                    <select class="form-control" name="quality_review" id="quality_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="form-group">
                            <textarea name="review_text" id="review_text" class="form-control" style="height:100px"
                                placeholder="Write your review"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="verify_review" class=" form-control"
                                placeholder="Are you human? 3 + 1 =">
                        </div>
                        <input type="submit" value="Submit" class="btn_1" id="submit-review">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal review -->

    <!--  footer Info  -->
    @include('user/include.footerinfo')
    <!-- End footer -->

    <!-- Date and time pickers -->
    <script>
        $(function() {
            $('input.date-pick').daterangepicker({
                autoUpdateInput: true,
                singleDatePicker: true,
                autoApply: true,
                minDate: new Date(),
                showCustomRangeLabel: false,
                locale: {
                    format: 'MM-DD-YYYY'
                }
            }, function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
                    'DD-MM-YYYY') + ' (predefined range: ' + label + ')');
            });
            $('input.time-pick').timepicker({
                minuteStep: 15,
                showInpunts: false
            })
        });
    </script>


    @include('user/include.footerscript')


</body>
<script>
    const seat_price = 400;
    const insurance_price = 100;
    const person_price = {{ $data->price }};



    let book_data = {
        persons: person_price,
        seat: 0,
        insurance: 0
    };

    function calculateTotal() {
        let total = book_data.persons + book_data.seat + book_data.insurance;
        $("#book-total").html(numberWithCommas(total));
    }

    $("#persons-select").change(function() {

        let value = Number($(this).val());
        if (isNaN(value) || value <= 0) {
            book_data = {
                ...book_data,
                persons: person_price
            };
            calculateTotal();
            return;
        }

        book_data = {
            ...book_data,
            persons: person_price * value
        };
        calculateTotal();

    });





    $("#insurance-select").change(function() {

        let value = Number($(this).val());
        if (isNaN(value)) {
            book_data = {
                ...book_data,
                insurance: 0
            };
            calculateTotal();
            return;
        }

        book_data = {
            ...book_data,
            insurance: insurance_price * value
        };
        calculateTotal();

    });

    $("#seat-select").change(function() {

        let value = Number($(this).val());
        if (isNaN(value)) {
            book_data = {
                ...book_data,
                seat: 0
            };
            calculateTotal();
            return;
        }

        book_data = {
            ...book_data,
            seat: seat_price * value
        };
        calculateTotal();

    });

    function numberWithCommas(x) {
        x = x.toString();
        var pattern = /(-?\d+)(\d{3})/;
        while (pattern.test(x))
            x = x.replace(pattern, "$1,$2");
        return x;
    }
</script>


</html>


{{-- FOR THE BOOKING PAGE,

    I WANT PEOPLE TO BE ABLE TO ADD ADD-ON THO THE BASIC PRICE FOR EXAMPLE <div class="">

        BASIC PRICE HERE IS 750 FROM THE DB


        IF THE USER WANT THEY CAN ADD ADDON

        IF THEY DONT WANT THEY CAN PROCEED TO CART WITHOUT ADDING ANYTHING


        IF THEY CLICK BOOK AND PROCEED TO CHECKPUT THAT MEANS THEY DONT WANT THE ADDON .



        BUT MAYBE IF I AM TRAVELING WITH YOU, AND WE WANT TO GO TOHETHER , IT MEANS I SHOULD BE ABLE TO BOOK FOR YOU AND ME IN THE SAME BOOKING <div class="">

            I CAN BOOK FIR YOU FIRST AND THEN AFTER I CLICK ON THE ADD TO CART, I WILL REMAIN ON THE SAME PAGE

            I CAN THEN BOOK MY OWN TRIP AGAIN

            SO IF I CHECK THE CART NOW I SHOULD HAVE 2 BOOKING THERE.

            1 FOR YOU AND 1 FOR ME

            DO YOU GET IT yeah OK

            THE REASON IS, IMAGING IF WE ARE TRAVELING TOGETHER I CAN HAVE 2 KIDS AND MAYBE YOU DONT HAVE ANY..

            ALSO MAYBE I WANT MASSAGE AND YOU DONT WANT ,

            I SHOULD BE ABLE TO BOOK INDIVIDUALLY FOR MYSELF AND THEN ADD MASSAGE AFTER I ADD TO CART, I CAN THEN BOOK FOR YOU WITHOUT ADDING MASSAGE.


            BUT IF I BOOK ME AND U TOGETHER, AT THE END OF THE DAY, ADMIN WILL NOT KNOW WHO HAVE THE MASSAGE ADON
            <div class=""> ok what is the problem now. as u r ad</div>ding .



            THE PROBLEM NOW IS, I AM GETTING CLOSE TO DEADLINE I SHOULD SHOW THEM THIS TIME TOMORROW, BUT I DONT KNOW HOW TO IMPLEMENT MOST THINGS, I AM SEEING YOUTUBE VIDEO FOR MOST OF THE THINGS AND ITS TAKING LOT OF TIME
. ok  here        </div>
here is the thing u r adding first for me then u adding for u it will be in same page right?


IF I WANT 2 BOOKINGS , I CAN FIRST COMPLETE 1 BOOKING , CLICK ON ADD TO CART THEN THE ITEM WILL BE SAVED IN CART.

AGAIN I CAN REPEAT THE SAME PROCESS TO BOOK THE SECOND ONE


BUT IF I AM BOOKING JUST FOR 1 PERSON,  ONCE I FINISH ADDING ALL ADDON (IF I WANT) I CAN CLICK TO PROCEEED TO CHECKOUT AND DECIDE TO CREATE ACCOUNT ON CHECKOUT OR CHECKOUT AS A GUEST. ok so most of the is like ecommerce for cart YES. ok


FOR EXAMPLE LET ME BOOK ONE AND EXPLAIN BETTER



NOW I WANT TO SHOW BOOKING SCENERIO


I AM TRAVELING WITH MY WIFE

SO I WILL BOOK A FAMILY TRIP

LETS SAY BASIC PRICE OF THE TOUR IS 4,200 FROM THE ADMIN

ADDON FOR INSIRANCE IS 100 PER TRAVELLERS , SO I WILL OICK 2
ADDON HERE IF WE DONT HAVE INSURANCE.

SO BASCI FAIR OF 4200 + 100(ADDON X 2)

INFANT: MAYBE WE HAVE 1 BABY, WE WILL CHOOSE ONE SO
HE CAN GET TICKET

SO THIS IS ALL WE WANT , I CAN CLICK ADD TO CART AND
CHECKOUT FROM THERE.

OR DIRECTLY CLICK ON PROCEED TO CHECKOUT .

SCENERIO 2//


IF I AM TRAVELLING WITH YOU AND YOU WANT BODY MASSAGE
BUT I DONT WANT IT, (BUT WE ARE TRAVELING TOGETHER )

I CAN BOOK LIKE THIS
2 DOUBLE OCCUPANCY (2 OF US IN ONE ROOM )

2 INSURANCE
BODY MASSAGE WILL JUST BE 1 BECASUE I DONT WANT IT

THATS ALL . I CAN PROCEED TO CART OR CHECKOUT NOW

YOU GET IT. Yeah THANKS


I THINK THAT IS ALL

THEN IF THEY BOOK WE NEED TO SEND EMAIL TO THEN AND DIRECT THEM TO THANK YOU PAGE.

NO DHASBOARD FOR USERS. ok so want my help to go through this process. NO

I WANT YOU TO FINISH IT FOR ME, I WILL PAT THE COST FOR YOUR TROBLE OR ELETRICITY BECASUE IF I AM FOING INTERN HERE I WILL LEARN THE THINGS BY FORCE FOM THEM

OTHERWISE IT IS HARD TO.L EARN ON MY OWN
THEY TOLD IF I CANNOT COMPLETER THEY DONT ACCEPT ME FOT THE INTERNSHIP. :) i don't need elictricity bill as it's my country issu but i have work NO BOR, IF ELETRICITY IS NOT THERE HOW YOU CAN WORK

ANYWAYS. I HAVE TO ENROOL WITH YOU LIKE I TOLD YOU BEFORE,

I CAN LEARN FROM BASIC INSTEAD OF JUMOING STRAIGN TO LARAVEL. ok so there is so much to do aYnEd Su have 24 YhEour YES 24 HRS THIS TIME TOMORROW I HAVE TO SHOW WHAT I HAVE. ok listen i will do the process of doing booking and cart to checkout guest or user u have to do the than u page and redirects.

OK I CAN DO THAT

PUT THE PROJECT ON YOUR GIT SO I CAN CLONE AND WORK AT THE SAME TIME ALO,. sent me file  let me see what i can do now OK THANK YOU.
    </div> --}}

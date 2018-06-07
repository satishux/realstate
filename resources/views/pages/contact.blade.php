@extends('layouts.pages.app')

@section('content')
<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map"></div>

    <div class="container">

        <div class="row">
            <div class="col-lg-6">

                <div class="alert alert-success d-none mt-4" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="alert alert-danger d-none mt-4" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
                </div>

                <h2 class="mb-3 mt-2"><strong>Contact</strong> Us</h2>

                <form id="contactForm" action="php/contact-form.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label>Your name *</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Your email address *</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Subject</label>
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Message *</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">

                <h4 class="heading-primary mt-4">Get in <strong>Touch</strong></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <hr>

                <h4 class="heading-primary">The <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-4">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                </ul>

                <hr>

                <h4 class="heading-primary">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-4">
                    <li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
                    <li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
                    <li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
                </ul>

            </div>

        </div>

    </div>

</div>

@include('layouts.pages.partials.call_to_action')
            
@endsection


@section('scripts')
<!-- Current Page Vendor and Views -->
<script src="js/views/view.contact.js"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<strong>New York Office</strong><br>New York, NY 10017",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        },
        popup: true
    }];

    // Map Initial Location
    var initLatitude = 40.75198;
    var initLongitude = -73.96978;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 16
    };

    var map = $('#googlemaps').gMap(mapSettings);

    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

</script>

@endsection

			
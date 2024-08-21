@extends('frontend.layouts.app')

@section('title')
Contact Us - {{ app_name() }}
@endsection

@section('content')

<section id="contact-page-bg" class="section-background section-center" style="background-image: url(img/contact-us-bg.jpg);">
    
</section>
<!--  Section -->
<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div id="office_googlemaps" class="google-map mt-0" style="height: 500px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69535.73158726032!2d90.55424889880794!3d23.657293804108765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b31b05e790cf%3A0x21fdff1e937bdbb9!2sChaity%20Industrial%20Park!5e0!3m2!1sen!2sus!4v1723527845887!5m2!1sen!2sus"  style="border:0; width:100%;height:450px; margin-top:20px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="container">

    <div class="row py-4">
        <div class="col-lg-6">

            <div class="overflow-hidden mb-1">
                <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
            </div>
            <div class="overflow-hidden mb-4 pb-3">
                <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Feel free to ask for details, don't save any questions!</p>
            </div>

            <form class="contact-form" action="#" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>
            
                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="font-weight-bold text-dark text-2">Subject</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="required font-weight-bold text-dark text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-6">
            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> Chotto Shilmondi, Tripordi, Sonargaon, Narayangonj, 1440, Bangladesh</li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> </li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href=""></a></li>
                </ul>
            </div>
            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                <h4 class="pt-5">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-2">
                    <li><i class="far fa-clock top-6"></i> Saturday - Thursday - 9am to 7pm</li>
                    <li><i class="far fa-clock top-6"></i> Friday - Closed</li>
                </ul>
            </div>

            <h4 class="pt-5">Get in <strong>Touch</strong></h4>
            <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

    </div>

</div>


@endsection
@push('after-styles')

<style>
   

#contact-page-bg {
  position: relative;
  background-size: cover; 
  background-position: center center;
  height: 350px;
}

#contact-page-bg::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
  z-index: 1; 
}

#contact-page-bg * {
  position: relative; 
  z-index: 2;
}
    
</style>

@endpush

@push('after-scripts')

<script>
    console.log('contact js');
</script>

@endpush
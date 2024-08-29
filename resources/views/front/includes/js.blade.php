{{-- <!-- jQuery -->
<script src="{{ asset('front/plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('front/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="{{ asset('front/plugins/style-switcher.js') }}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ asset('front/plugins/owl/owl.carousel.js') }}"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="{{ asset('front/plugins/jquery.prettyPhoto.js') }}"></script>
<!-- Bxslider -->
<script type="text/javascript" src="{{ asset('front/plugins/flex-slider/jquery.flexslider.js') }}"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="{{ asset('front/plugins/cd-hero/cd-hero.js') }}"></script>
<!-- Isotope -->
<script type="text/javascript" src="{{ asset('front/plugins/isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/plugins/ini.isotope.js') }}"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="{{ asset('front/plugins/wow.min.js') }}"></script>
<!-- Eeasing -->
<script type="text/javascript" src="{{ asset('front/plugins/jquery.easing.1.3.js') }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ asset('front/plugins/jquery.counterup.min.js') }}"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{ asset('front/plugins/waypoints.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{ asset('front/plugins/google-map/gmap.js') }}"></script>
<!-- Main Script -->
<script src="{{ asset('front/js/script.js') }}"></script>

<script src="{{asset('front/js/jquery.toast.js')}}"></script>
<script src="{{asset('front/plugins/bootbox/bootbox.min.js')}}"></script> --}}


<!-- jQuery -->
<script src="{{ asset('front/plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('front/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="{{ asset('front/plugins/style-switcher.js') }}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ asset('front/plugins/owl/owl.carousel.js') }}"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="{{ asset('front/plugins/jquery.prettyPhoto.js') }}"></script>
<!-- Bxslider -->
<script type="text/javascript" src="{{ asset('front/plugins/flex-slider/jquery.flexslider.js') }}"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="{{ asset('front/plugins/cd-hero/cd-hero.js') }}"></script>
<!-- Isotope -->
<script type="text/javascript" src="{{ asset('front/plugins/isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/plugins/ini.isotope.js') }}"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="{{ asset('front/plugins/wow.min.js') }}"></script>
<!-- Eeasing -->
<script type="text/javascript" src="{{ asset('front/plugins/jquery.easing.1.3.js') }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ asset('front/plugins/jquery.counterup.min.js') }}"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{ asset('front/plugins/waypoints.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{ asset('front/plugins/google-map/gmap.js') }}"></script>

<!-- Contact Form Scripts -->
<script src="{{ asset('front/contactform/vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('front/contactform/vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('front/contactform/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('front/contactform/vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('front/contactform/vendor/countdowntime/countdowntime.js') }}"></script>
<script src="{{ asset('front/contactform/js/main.js') }}"></script>

<!-- Google Tag Manager -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>

<!-- Main Script -->
<script src="{{ asset('front/js/script.js') }}"></script>
<script src="{{ asset('front/js/jquery.toast.js') }}"></script>
<script src="{{ asset('front/plugins/bootbox/bootbox.min.js') }}"></script>

{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('.changeLang').on('click', function(e) {
            e.preventDefault();
            var lang = $(this).data('lang');
            var url = "{{ route('changeLang') }}";

            $.ajax({
                url: url,
                method: 'GET',
                data: { lang: lang },
                success: function(response) {
                    // Handle the response here
                    // For example, you can reload the page to apply the language change
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle any errors here
                    console.error('Error changing language:', error);
                }
            });
        });
    });
</script> --}}

<script type="text/javascript">
    $(document).ready(function() {
        $('#language-switcher').on('change', function() {
            var lang = $(this).val(); // Get the selected language
           
            var url = "{{ route('changeLang') }}";

            $.ajax({
                url: url,
                method: 'GET',
                data: { lang: lang },
                success: function(response) {
                    // Reload the page to apply the language change
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle any errors here
                    console.error('Error changing language:', error);
                }
            });
        });
    });
</script>




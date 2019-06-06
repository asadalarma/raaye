<!--Jquery Library-->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
{{--<script src="{{ asset('js/jquery.js') }}"></script>--}}
<!--Bootstrap core JavaScript-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--Swiper JavaScript-->
<script src="{{ asset('js/swiper.jquery.min.js') }}"></script>
<!--Accordian JavaScript-->
<script src="{{ asset('js/jquery.accordion.js') }}"></script>
<!--Count Down JavaScript-->
<script src="{{ asset('js/jquery.downCount.js') }}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<!--Owl Carousel JavaScript-->
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<!--Number Count (Waypoint) JavaScript-->
<script src="{{ asset('js/waypoints-min.js') }}"></script>
<!--Filter able JavaScript-->
<script src="{{ asset('js/jquery-filterable.js') }}"></script>
<!--WOW JavaScript-->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!--Jquery Cookie-->
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<!--Custom JavaScript-->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('css/my-assets/js/jpix.min.js') }}"></script>
<script src="{{ asset('css/my-assets/js/knockout-file-bindings.js') }} "></script>
<script src="{{ asset('css/my-assets/js/upload.js') }}"></script>

<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="{{ asset('css/my-assets/js/msform.js') }}"></script>
<script src="{{ asset('css/my-assets/reg/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript">
    $(function () {
        $('ul.tabs').pixiefyTabs();
        $('ul.accordion').pixiefyAccordion();
    })
</script>
<script type="text/javascript">
    $(function () {
        $('ul.taks').pixiefyTabs();
        $('ul.accordion').pixiefyAccordion();
    })
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<script>
    $(document).ready(function () {
        $.get("https://ipinfo.io", function (response) {
            var city = response.city;
            $("#registration_form").submit(function () {
                var user_city = $(".inline-frm").find('#city').val();
                if (user_city.toLowerCase() != city.toLowerCase()) {
                    alert('Your current location does not match your city');
                    return false;
                }
            });
        }, "jsonp");
    })
    // $("#first_next").click(function () {
    //     var name = $('#name').val();
    //     var username = $('#username').val();
    //     var phone = $('#phone').val();
        
    //     if (name == "") {
    //         alert('Please write your Full Name');
    //     }else if (username == "") {
    //         alert('Please write your Username');
    //         return false;
    //     }else if (phone == "") {
    //         alert('Please write your Phone Number');
    //         return false;
    //     }
    // });

</script>

<script>
    $(".cookie button").click(function () {
        $.cookie('raaye_cookies', 'raayeData');
        $('.cookie').remove();
    })
    $(document).ready(function () {
        var cookie_data = $.cookie('raaye_cookies');
        console.log(cookie_data);
        if(cookie_data != undefined){
            $('.cookie').hide();
        }
    })
</script>
<script>
    $(document).ready(function () {
        var dob = $('.edit-profile').find('#dob').val();
        var phone = $('.edit-profile').find('#phone').val();
        var country = $('.edit-profile').find('#country').val();
        var gender = $('.edit-profile').find('#gender').val();

        if(dob == '' || phone == '' || country == '' || gender == ''){
            $('.error-notification').show();
        }else{
            $('.error-notification').hide();
        }
    })
</script>
<script>
    $('.submit_survey').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "{{url('submitSurvey')}}",
            dataType: 'json',
//            data: {user_id:user_id, question_id:question_id, answer:answer},
            data: $('.submit_survey').serialize(),
        }).done(function (data) {
            if(data.status == 1){
                alert("Your survey have been saved");
            }else{
                alert("An Error Occurred");
            }
        })
    })
    $.ajax({
        type: 'get',
        dataType: 'JSON',
        url: "{{url('getSurveys')}}",
        success: function (response) {
            if(response['answers'] != null){

            }
        }
    })
</script>
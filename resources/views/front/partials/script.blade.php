


<script type="text/javascript" src="{{ asset('front/js/jquery-1.11.1.min.js') }}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- dropdown -->
<script src="{{ asset('/') }}front/js/jquery.easydropdown.js"></script>
<script defer src="{{ asset('/') }}front/js/jquery.flexslider.js"></script>

<script type="text/javascript" src="{{ asset('/') }}front/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="{{ asset('/') }}front/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<script src="{{ asset('/') }}front/js/jquery.countdown.js"></script>
<script src="{{ asset('/') }}front/js/script.js"></script>
<link rel="stylesheet" href="{{ asset('/') }}front/css/etalage.css">
<script src="{{ asset('/') }}front/js/jquery.etalage.min.js"></script>
<script>
    jQuery(document).ready(function($){

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,
            source_image_width: 900,
            source_image_height: 1200,
            show_hint: true,
            click_callback: function(image_anchor, instance_id){
                alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
            }
        });

    });
</script>
<script type="text/javascript">
    // $(function(){
    //     SyntaxHighlighter.all();
    // });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<script>
    function checkEmailAddress(email) {
        $.ajax({
            method  : "GET",
            url     : "{{ url('check-email-address') }}",
            data    : {email:email},
            dataType: 'JSON',
            success : function (response) {
                $('#emailStatusMessage').text(response.message);
                if(response.success == true)
                {
                    $('#regBtn').prop('disabled', false);
                }
                else
                {
                    $('#regBtn').prop('disabled', true);
                }

            }
        });
    }
</script>

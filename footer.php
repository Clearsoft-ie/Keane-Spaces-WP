<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Clearsoft
 * @subpackage RedmondsFarm
 * @since 1.0
 * @version 1.0
 */
?>

<footer id="footer">

    <div class="copyright">
        <div class="container">
            <ul class="float-right m-0 list-inline mobile-block">
                <li><a href="http://damienkeane.com" target="_blank">Visit DamienKeane.com</a></li>
                <li>&bull;</li>
                <li><a href="#">Privacy</a></li>
            </ul>
            Website By <a href="https://www.Clearsoft.ie" target="_blank">Clearsoft</a>
        </div>
    </div>
</footer>
<!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script>var plugin_path = '<?php echo get_template_directory_uri() ;?>/assets/plugins/';</script>
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/jquery/jquery-3.3.1.min.js"></script>

<script src="<?php echo get_template_directory_uri() ;?>/assets/js/scripts.js"></script>


<!-- PAGELEVEL SCRIPTS -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/js/contact.js"></script>

<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/gmaps.js"></script>
<script>
    function initMap() {
        var uluru = { lat: 52.7641067, lng: -6.2370666 };
        var map = new google.maps.Map(document.getElementById('map2'), {
            zoom: 12,
            center: uluru,
            scrollwheel: false
        });

        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<strong>Damien Keane Garden Design</strong><br/>' +
            'The Old School House<br/>' +
            'Knockgreany<br/>' +
            'Coolgreany<br/>' +
            'Gorey<br/>' +
            'Co.Wexford<br/>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: 'Damien Keane Garden Design'
        });

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArD9J6nci2T70ycnSgL2BklRFB6kNHpNM&callback=initMap">
</script>


<?php wp_footer(); ?>

</body>
</html>
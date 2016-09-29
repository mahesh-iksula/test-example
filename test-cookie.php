<script type="text/javascript">
jQuery(document).ready(function () {
    var domain_name = document.location.hostname;
    var cookieValue = jQuery.cookie("show_footer");
    jQuery.cookie("show_footer", 1, {path: "/", domain: domain_name});
});
</script>
<?php
print_r($_COOKIE);
?>